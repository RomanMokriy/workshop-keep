(function(){
	angular.module('app')
			.directive('noteEdit', function(){
				return {
					bindToController: true,
					controller		: NoteEditController,
					controllerAs	: "NoteEditCtrl",
					scope	: {
						noteData		: '=',
//						allnotes		: '=',
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
								console.log(vm.onSaveCallback);

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
//					function saveNewNote()
//					{
//						if(vm.noteData && (vm.noteData.title.length >0 && vm.noteData.content.length >0))
//						{
//							if(typeof vm.onSaveCallback == 'function')
//							{
//
//							}
//							NoteService.saveNote(vm.noteData).then(function(savedNote){
//								vm.allnotes.unshift(savedNote);
//							});
//						}
//
//						vm.noteData = null;
//					}
//
//					function deleteNote(){
//						NoteService.deleteNote(vm.noteData).then(function(savedNote){
//							vm.allnotes.splice(vm.allnotes.indexOf(savedNote), 1);
//						});
//
//					}
				}

			});
})();