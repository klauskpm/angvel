@section('content')
<div ng-controller="Profile">
	<img src="{{ profile.img }}" title="{{ profile.name }}" />
	<span>Name:</span><span>{{ profile.name }}</span>
	<input type="text" ng-model="profile.name" value="{{ profile.name }}">
	<input type="text" ng-model="profile.img" value="{{ profile.img }}">
</div>
@show

@section('scripts')
<script src="<?php echo URL::asset('js/controllers/profile.js') ?>"></script>
@show