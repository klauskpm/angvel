var angvelApp = angular.module('angvelApp', []);

angvelApp.controller('MyController', ['$scope', function($scope){
	$scope.text = 'Olá';

	$scope.troca = function() {
		$scope.text = 'Trocado';
	}

	$scope.destroca = function() {
		$scope.text = 'Olá';
	}
}]);

angvelApp.directive('troca', function(){
	// Runs during compile
	return {
		restrict: 'EA', // E = Element, A = Attribute, C = Class, M = Comment
		template: '<button ng-click="troca()">Troca</button>',
		replace: true
	};
});

angvelApp.directive('destroca', function(){
	// Runs during compile
	return {
		restrict: 'EA', // E = Element, A = Attribute, C = Class, M = Comment
		template: '<button ng-click="destroca()">Destroca</button>',
		replace: true
	};
});