(function(){
	angular.module('app')
			.directive('note', function(){
				return {
//					restrict: "E",
					templateUrl	: 'note.html'
				};
			});
})();