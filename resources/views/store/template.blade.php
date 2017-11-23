<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'My Store')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>