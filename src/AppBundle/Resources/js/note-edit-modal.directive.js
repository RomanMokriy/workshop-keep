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


