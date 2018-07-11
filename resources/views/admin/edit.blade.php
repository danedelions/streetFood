@extends('layouts.app')
@push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
@endpush
@push('css')
	<style>
	* {
    box-sizing: border-box;
}
body, html {
    height: 100%;
    /*background-color: #474747;*/
    background-image: url("{{asset('img/4.png')}}");
    padding: 20px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.parallax {
    /* The image used */
    background-image: url("{{asset('img/1.jpg')}}");

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
@endpush


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
<div class="container">
        <h1 class="h1" style="color: white;">Edit Post</h1>
    </div>
	<div class="content">
        <div class="form-group">
        {!! Form::model($post, ['method'=>'PATCH','route' => ['admin.update', $post->id]]) !!}
        {{ method_field('PATCH')}}
        {{ csrf_field() }}
            <div class="card">
                <div class="card-body">
                    <div class="form-group col-sm-8">
                        <label>Title</label>
                        {!! Form::input('text','title', $post->title, ['class' => 'form-control'])!!}
                    </div>
                    <div class="form-group col-sm-8">
                        <label>Post</label>
                        {!! Form::textarea('blog_post', $post->blog_post, ['size' => '50x10', 'class' => 'form-control']) !!}
                    </div>
                    <div>
                        {!! Form::submit('Save', ['type' => 'submit','class' => 'btn btn-success']) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>            
        </div>


	<div class="footer">
	</div>

@endsection