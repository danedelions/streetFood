@extends('layouts.app')

@push('css')
	<style>
		body, html {
    		height: 100%;
		}

		.parallax {
		    /* The image used */
		    background-image: url("img/1.jpg");

		    /* Set a specific height */
		    height: 100%;

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}
	</style>
@endpush

@section('content')
	
	<div class="parallax"></div>

@endsection