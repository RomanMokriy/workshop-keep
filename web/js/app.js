(function(){
	angular.module('app', ['templates']);
})();



(function(){
	angular.module('app')
			.controller("IndexController", function($scope, NoteService)
			{
				NoteService.getNotes().then(function(notes){
					$scope.notes = notes;
				});
			}
	);
})();
(function(){
	angular.module('app')
			.directive('navigation', function(){
				return {
					templateUrl	: 'navigation.html'
				};
			});
})();
(function(){
	angular.module('app')
		.directive('noteEditModal', noteEditModalDirective);

	function noteEditModalDirective($timeout, NoteService)
	{
		bindToController	: true;
		return {
			templateUrl: "note-edit-modal.html",
			link: linkFunction
		};

		function linkFunction($scope, $element)
		{
			var vm = this;

			$scope.closeModal = closeModal;
			$scope.onDeleted = onDeleted;

			$timeout(function()
			{
				$('body').append($element);
				$element.find('.modal').openModal();
			});

			function closeModal()
			{
				$element.find('.modal').closeModal();
			};

			function onDeleted(deletedNote)
			{
				$scope.notes.splice(
					$scope.notes.indexOf(deletedNote), 1
				);

				$scope.closeModal();
			};
		}
	}
})();



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function(){
	angular.module('app')
			.directive('noteEditOpenModal', function($compile){
		return {
			link	: function($scope, $element){
				$element.click(function(){
					$compile('<note-edit-modal></note-edit-modal>')($scope);
				});
			}
		};
	});
})();
(function(){
	angular.module('app')
			.directive('noteEdit', function(){
				return {
					bindToController: true,
					controller		: NoteEditController,
					controllerAs	: "NoteEditCtrl",
					scope	: {
						noteData		: '=',
						onSaveCallback	: '=onSave',
						onDeleteCallback: '=onDelete'
					},
					templateUrl		: 'note-edit.html'
				};

				function NoteEditController($scope, NoteService)
				{
					var vm = this;
					vm.saveNote = saveNote;
					vm.deleteNote = deleteNote;

					function saveNote()
					{
						if (vm.noteData.title.length > 0 || vm.noteData.content.length > 0)
						{
							NoteService.saveNote(vm.noteData).then(function(savedNote)
							{
								vm.noteData = savedNote;

								if (typeof vm.onSaveCallback === 'function')
								{
									vm.onSaveCallback(vm.noteData);
								}
							});
						}
						else
						{
							vm.onSaveCallback(false);
						}
					}

					function deleteNote()
					{
						NoteService.deleteNote(vm.noteData).then(function()
						{
							if (typeof vm.onDeleteCallback === 'function')
							{
								vm.onDeleteCallback(vm.noteData);
							}
						});
					}
				}

			});
})();
(function(){
	angular.module('app')
			.directive('noteNew', function(){
				return {
					bindToController: true,
					controller		: NoteNewController,
					controllerAs	: "NoteNewCtrl",
					scope	: {
							allnotes	: '='
					},
					templateUrl		: 'note-new.html'
				};

				function NoteNewController($scope, NoteService)
				{
					var vm = this;
					vm.emptyNote = null;
					vm.createNewNote = createNewNote;
					vm.onSave = onSave;

					function createNewNote()
					{
						vm.emptyNote = NoteService.createEmptyNote();
					}

					function onSave(savedNote)
					{
						if (savedNote)
						{
							vm.allnotes.unshift(savedNote);
						}

						vm.emptyNote = null;
					}
				}
			});
})();
(function(){
	angular.module('app')
			.directive('note', function(){
				return {
//					restrict: "E",
					templateUrl	: 'note.html'
				};
			});
})();
(function(){
	angular.module('app')
			.factory('NoteService', function($http){
				var emptyNote = false;

				var service = {
					getNotes		: getNotes,
					saveNote		: saveNote,
					deleteNote		: deleteNote,
					createEmptyNote	: createEmpty
				};

				return service;

				function getNotes(){
					return $http.get('/note')
							.then(function (response) {
								return response.data
							})
							.catch(function (response){
								alert(response);
								return true;
							});
				}

				function createEmpty(){
					return {
						title	: '',
						content	: ''
					};
				}

				function saveNote(Note){
					if(Note.id)
					{
						return $http.put('/note/' + Note.id, Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
					}

					return $http.post('/note', Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
				}

				function deleteNote(Note){
					if(Note.id)
					{
						return $http.delete('/note/' + Note.id)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
					}
				}
			});
})()

