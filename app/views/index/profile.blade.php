@section('styles')
<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/profile.css') ?>">
@show
@section('scripts')
<script src="<?php echo URL::asset('js/app.js') ?>"></script>
@show
@section('content')
<div ng-controller="TodoController">
	<select ng-model="order">
		<option value="">Ordem original</option>
		<option ng-repeat="order in orders" value="{{order.value}}">{{order.title}}</option>
	</select>
	<ul>
		<li ng-repeat="task in tasks | orderBy:order" ng-hide="task.deletedAt"><span class="task">{{ task.title }}</span><span class="delete-task" ng-click="deleteTask(task)">X</span></li>
		<li><span class="task">{{task.title}}</span></li>
	</ul>
	<form name="taskForm" ng-submit="addTask()">
		<input ng-model="task.title" type="text" name="task.title" />
		<input type="submit">
	</form>
</div>
@show