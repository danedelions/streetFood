@extends('layouts.app')
@push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
@endpush
<!-- @push('css')
	<style>
		* {
		    box-sizing: border-box;
		}
		body, html {
    		height: 100%;
	   		/*background-color: #474747;*/
	   		background-image: url("img/4.png");
    		padding: 20px;
    		background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		.parallax {
		    /* The image used */
		    background-image: url("img/1.jpg");

		    /* Set a specific height */
		    height: 400px;

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		.intro{
			color: white;
			font-size: 48pt;
		}

		.text{
			padding-top: 11em;
		}

		.card{
			background-color: white;
		    padding: 20px;
		    margin-top: 20px;
		}

		.left{
			float: left;
    		width: 75%;
		}

		.footer{
		    background-image: url("img/2.jpg");
		    height: 100px;
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    padding: 20px;
		    margin-top: 20px;
		}

		.content{
			/*background-color: #474747;*/
		    height: 100%;
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;

		}
		ul li {
			padding: 0;
			margin: 0;
			list-style: none;
			display: inline-block;
		}

		#links{
			color: white;
		}

		a{
			text-decoration: none;
			color: white;
		}
	</style>
@endpush -->

@section('content')
	
	<div class="parallax">
		<div class="col-sm-12">
			<center>
				<div class="text">
					<h1 class="intro">The Street Food Index</h1>
					<ul id="links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</div>
			</center>			
		</div>			
	</div>

	<div class="content">
			<div class="card">
			    <h2>TITLE HEADING</h2>
			    <h5>Title description, Dec 7, 2017</h5>
			    <p>Some text..</p>
			    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		    </div>

		    <div class="card">
			    <h2>TITLE HEADING</h2>
			    <h5>Title description, Dec 7, 2017</h5>
			    <p>Some text..</p>
			    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		    </div>

		    <div class="card">
			    <h2>TITLE HEADING</h2>
			    <h5>Title description, Dec 7, 2017</h5>
			    <p>Some text..</p>
			    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		    </div>

		<div class="footer">
			<h2>Footer</h2>
		</div>
	</div>



@endsection