var controller = angular.module('controller', []);

controller.controller('MyController', ['$scope', function($scope){
	$scope.text = 'Olá';

	$scope.troca = function() {
		$scope.text = 'Trocado';
	}

	$scope.destroca = function() {
		$scope.text = 'Olá';
	}
}]);