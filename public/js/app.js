var angvelApp = angular.module('angvelApp', ['Profile']);

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