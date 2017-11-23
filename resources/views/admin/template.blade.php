<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Panel Administrador')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poiret+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>

<body>

	@if(\Session::has('message'))
		@include('admin.partials.message')
	@endif

	@include('admin.partials.nav')

	@yield('content')

	@include('admin.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>