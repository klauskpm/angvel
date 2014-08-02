<html>
<head>
	<?php //echo Asset::styles(); ?>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="<?php echo URL::asset('js/angular.js') ?>"></script>
    <script src="<?php echo URL::asset('js/app.js') ?>"></script>
</body>
</html>