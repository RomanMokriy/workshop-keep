(function(){
	angular.module('app')
			.directive('newNote', function(){
				return {
					scope		: {
							notes	: '='
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
						if($scope.emptyNote && ($scope.emptyNote.title.length >0 && $scope.emptyNote.text.length >0))
						{
							NoteService.saveNote($scope.emptyNote);
						}

						$scope.emptyNote = null;
					}
				}
			});
})();