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