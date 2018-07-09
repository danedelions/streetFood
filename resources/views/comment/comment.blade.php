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
                    </ul>
                </div>
            </center>           
        </div>          
    </div>

@endsection
@section('page-content')

    <div class="content">
            <div class="card">
                <h2>{{$post->title}}</h2>
                <h5><i>{{ date('D d-M-Y  g:i:s A',$post->created_at->timestamp) }}</i></h5>
                <p style="word-break: break-all; text-align: justify;white-space: pre-line;">{{$post->blog_post}}</p>
                <br>
                <hr>
                <h4>Comments</h4><br>
                @foreach($comments as $row)
                
                    <h5>{{$row->name}}</h5>
                    <h6>Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>
                        <br>
                    <span><p>{{$row->comment}}</p></span>
                    <hr>
            
                @endforeach

                <hr>
                <form class="form-group" method="POST" action='{{url("{$post->id}/comment")}}'>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="form-group col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Name (optional)..."></input>
                    </div>
                    <div class="form-group col-sm-8">
                        <textarea class="form-control" name="comment" placeholder="Comment here..."></textarea>
                    </div>
                    <div class="form-group col-sm-8">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    </div>
                    
                </form>
            </div>
    </div>

@endsection