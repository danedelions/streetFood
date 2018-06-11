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
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"> -->
	@stack('css')
</head>
<body> 
	@yield('content')
</body>
</html>