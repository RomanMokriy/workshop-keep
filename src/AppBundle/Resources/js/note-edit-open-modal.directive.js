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