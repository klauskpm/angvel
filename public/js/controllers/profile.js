var profile = angular.module('Profile', []);

profile.controller('Profile', ['$scope', function($scope){
	if(!!localStorage.getItem('profile')) {
		$scope.profile = JSON.parse(localStorage.getItem('profile'));
	}
}]);