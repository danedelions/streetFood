@extends('layouts.app')
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

.archive{
    list-style: none;
    color: black;
    padding: 0;
    margin: 0;
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
                        <li><a href="{{url('post/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('archive')}}">Archive</a></li>     
                    </ul
                </div>
            </center>           
        </div>          
    </div>
@endsection
@section('page-content')

	<div class="content">
        <div class="card">
            Archives
            <hr>
            @foreach ($archives as $row)
                    <ul class="archive">
                        <li class="archive">
                           <h3><a href="post/?month={{$row['month']}}&year={{$row['year']}}" class="archive">{{$row['month'].' '.$row['year']}}</a></h3>
                        </li>                    
                    </ul>

            @endforeach
        </div>

	</div>

@endsection