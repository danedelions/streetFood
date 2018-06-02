@extends('layouts.app')
@push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
@endpush

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