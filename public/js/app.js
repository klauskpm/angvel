var angvelApp = angular.module('angvelApp', []);

angvelApp.controller('TodoController', ['$scope', function($scope) {
	$scope.lists = [];
	$scope.list = {}

	$scope.task = {};
	$scope.order = '';
	$scope.tasks = getLocalItem('tasks');
	$scope.orders = [{
		'title': 'Ordem alfabética',
		'value': 'title'
	},{
		'title': 'Orderm alfabética ao contrário',
		'value': '-title'
	}];

	$scope.addTask = function() {
		if($scope.task.title) {
			$scope.tasks.push(this.task);
			$scope.updatetasks();
			$scope.task = {};
		}
	};

	$scope.deleteTask = function(task) {
		if(confirm('Deseja deletar essa tarefa?')) {
			$scope.tasks[$scope.tasks.indexOf(task)].deletedAt = Date.now();
			// $scope.tasks.splice($scope.tasks.indexOf(task), 1);
			$scope.updatetasks();
		} 
	}

	$scope.updatetasks =  function() {
		setLocalItem('tasks', $scope.tasks);
	};

}]);

function getLocalItem(selector) {
	return (localStorage.getItem(selector)?fromJson(localStorage.getItem(selector)):[]);
}

function setLocalItem(selector, data) {
	localStorage.setItem(selector, toJson(data));
}

function toJson(data) {
	return JSON.stringify(angular.toJson(data));
}

function fromJson(data) {
	return angular.fromJson(JSON.parse(data));
}