@section('styles')

@show


@section('scripts')
<script type="text/javascript" src="<?php echo URL::asset('js/aside.js') ?>"></script>
@show


@section('content')
<div ng-controller="AsideController">
	<aside-menu></aside-menu>
</div>
@show