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