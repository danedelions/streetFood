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
    padding: 10px;
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
@section('page-header')
        
    <div class="parallax">
        <div class="col-sm-12">
            <center>
                <div class="text">
                    <h1 class="intro">The Street Food Index</h1>
                    <ul id="links">
                        <li><p>Welcome, Admin!</p></li>
                        <li><a href="{{url('logout')}}"><i class="glyphicon glyphicon-plus"></i>Logout</a></li>   
                    </ul>
                </div>
            </center>   
        </div>
                          
    </div>
@endsection
@section('page-content')

	<div class="content">

			<div class="card">
				<div class="col-sm-6">
				    <a href="{{url('admin/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add New Post
				    </a>
				</div>
		    </div>

		    @foreach($posts as $row)
			<div class="card">
			
			    <h2>{{$row->title}}</h2>
                <h5>{{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h5>
			    <ul>
			    	<li><a href="{{url('admin/'.$row->id.'/edit')}}" class="btn btn-success">Edit</a></li>
			    	<li>
                        <form action="{{ route('admin.destroy', ['id' => $row->id]) }}" method="post">    
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        </form>
                    </li>
			    </ul>
		    </div>
		    @endforeach

<!-- 		<div class="footer">
			<h2></h2>
		</div> -->
	</div>

@endsection