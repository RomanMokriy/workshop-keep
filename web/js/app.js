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
			.directive('newNote', function(){
				return {
					scope		: {
							allnotes	: '='
					},
					controller	: NewNoteController,
					templateUrl	: 'new-note.html'
				};

				function NewNoteController($scope, NoteService)
				{
					var emptyNote = null;

					$scope.createNewNote = createNewNote;
					$scope.saveNewNote = saveNewNote;

					function createNewNote()
					{
						$scope.emptyNote = NoteService.createEmptyNote();
					}

					function saveNewNote()
					{
						console.log('test');
						if($scope.emptyNote && ($scope.emptyNote.title.length >0 && $scope.emptyNote.text.length >0))
						{
							NoteService.saveNote($scope.emptyNote).then(function(savedNote){
								$scope.allnotes.unshift(savedNote);
							});
						}

						$scope.emptyNote = null;
					}
				}
			});
})();
(function(){
	angular.module('app')
			.directive('note', function(){
				return {
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
						text	: ''
					};
				}

				function saveNote(Note){
					return $http.post('/note', Note)
							.then(function (response) {
								return response.data
							})
							.catch(function (error){
								alert(response);
								return true;
							});
				}
			});
})()

