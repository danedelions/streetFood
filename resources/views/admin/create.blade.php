@extends('layouts.app')

@section('content')
	
	{!! Form::open(['method'=>'post', 'route' => 'post.store']) !!}

		{{ csrf_field() }}

	<div class="card">
		<div class="card-body">
			<div>
				{!! Form::inputGroup('text', 'First Name:', 'fname') !!}
			</div>
			<div>
				{!! Form::inputGroup('text', 'Last Name:', 'lname') !!}
			</div>
			<div>
				{!! Form::inputGroup('date', 'Birthday:', 'birthday') !!}
			<div>
				<button type="submit" class="btn btn-success">Submit</button>
			</div>
		</div>
	</div>

	{!! Form::close() !!}

@endsection