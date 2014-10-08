var angvelApp = angular.module('angvelApp', []);

angvelApp.controller('AsideController', ['$scope', function($scope){
	$scope.aside = {
		title: 'Teste de titulo',
		description: 'descrição dada',
		monster: 'oh hell'
	}
}])

angvelApp.directive('asideMenu', function(){
	return {
		restrict: 'E',
		templateUrl: '/aside-template',
		replace: true,
	};
});

angvelApp.directive('enter', function(){
	return function($scope, element){
		element.binding('mouseenter', function(){
			element.addClass('show');
		});
	}
});

angvelApp.directive('leave', function(){
	return function($scope, element){
		element.binding('mouseleave', function(){
			element.removeClass('show');
		});
	}
});