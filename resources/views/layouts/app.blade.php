<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>The Street Food Index</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	@stack('css')
</head>
<body> 
	@yield('page-header')
	@yield('page-content')
</body>
</html>