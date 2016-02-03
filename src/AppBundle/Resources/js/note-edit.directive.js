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