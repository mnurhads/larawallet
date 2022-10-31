<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
		<link rel="icon" href="images/favicon.png">
		<title>iQuest Agent Portal</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('website/mycss/framework7.bundle.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/mycss/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('website/mycss/style.css') }}">
	</head>
	<body>
<div>
@yield('content')
</div>


	</body>
		<!-- script -->
		<script src="{{ asset('website/js/framework7.bundle.min.js') }}"></script>
		<script src="{{ asset('website/js/app.js') }}"></script>
		<!-- end script -->

</html>