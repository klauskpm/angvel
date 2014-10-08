<html>
<head>
	@yield('styles')
	@yield('css')
	<script src="<?php echo URL::asset('js/angular.js') ?>"></script>
    @yield('scripts')
</head>
<body>
    <div class="container">
    	<div ng-app="angvelApp">
        	@yield('content')
        </div>
    </div>
</body>
</html>