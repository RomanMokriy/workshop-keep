(function(){
	angular.module('app')
			.controller("IndexController", function($scope, NoteService)
			{
				$scope.notes			= NoteService.getNotes();
				$scope.createEmpty		= function()
				{
					CurrentNoteService.current = NoteService.createEmptyNote();
				}
				$scope.saveCurrentNote	= NoteService.saveCurrent;
				$scope.current	= NoteService.current;
				$scope.currentNote		= NoteService.currentNote;
				$scope.NoteService		= NoteService;
			}
	);
})();