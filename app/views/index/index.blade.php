@section('content')
	<div ng-controller="MyController">
		{{ text }}
		<button troca></button>
    	<button destroca></button>
	</div>
@show

@section('scripts')
<script src="<?php echo URL::asset('js/controllers/controller.js') ?>"></script>
@show