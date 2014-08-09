<html>
<head>
	<?php //echo Asset::styles(); ?>
	<script src="<?php echo URL::asset('js/angular.js') ?>"></script>
    @yield('scripts')
    <script src="<?php echo URL::asset('js/app.js') ?>"></script>
</head>
<body>
    <div class="container">
    	<div ng-app="angvelApp">
        	@yield('content')
        </div>
    </div>
</body>
</html>