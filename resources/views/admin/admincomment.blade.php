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
a.reply{
    text-decoration: none;
    color: black;
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
                        <li><a href="{{url('/admin')}}"><i class="glyphicon glyphicon-plus"></i>Home</a></li> 
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
                <h2>{{$post->title}}</h2>
                <h5 style="font-size: 14pt; font-style: italic;">{{ date('D d-M-Y  g:i:s A',$post->created_at->timestamp) }}</h5>
                <br><br>
                <p style="word-break: break-all; text-align: justify;white-space: pre-line;">{{$post->blog_post}}</p>
                <br>
                <a href="{{url('admin/')}}" class="reply"> << Back to home</a>
                <hr>
                <h4>Comments</h4>
                <hr>
                <div class="panel-body admin-comment-container" >
                @foreach($comments as $row)
                        <div class="well">
                            <h5><b>Posted by {{$row->name}}</b></h5>
                            <h6 style="font-size: 7pt; font-style: italic;">Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>

                            <span><p>{{$row->comment}}</p></span>

                            <div style="margin-left:2em;">
                                <a style="cursor: pointer; font-size: 10pt;" name_a="{{ $row->name }}" cid="{{ $row->id }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                <hr>
                                <div class="reply-form">
                                    <!-- Dynamic Reply form -->
                                        
                                    
                                </div>
                                
                                @foreach($row->reply as $rep)
                                        <div class="well">
                                            <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                            <h6 style="font-size: 7pt; font-style: italic;">Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>
                                            <span> {{ $rep->reply }} </span>
                                            <div style="margin-left:2em;">
                                            <br>
                                                <a style="cursor: pointer; font-size: 10pt;" rname="{{ $rep->name }}" rid="{{ $row->id }}" class="reply-to-reply" token="{{ csrf_token() }}">Reply to comment</a>&nbsp;
                        
                                            </div>
                                            <div class="reply-to-reply-form">
                                                
                                                
                                                <!-- Dynamic Reply form -->
                                                
                                            </div>
                                            
                                        </div>

                                @endforeach
                                <hr>    
                            </div>
                        </div>
                @endforeach
                </div>
               <!--  @foreach($comments as $row)
                
                    <h5>{{$row->name}}</h5>
                    <h6>Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>
                        <br>
                    <span><p>{{$row->comment}}</p></span>
                    
                    <a id="toggle_reply" href="#" class="reply"">view reply</a>
                    <p><a href="" id="reply" class="reply" style="display: none;">Edit</a></p>
                    <hr>
            
                @endforeach -->

                <h4>Comment as Admin</h4><br>
                <form class="form-group" method="POST" action='{{url("{$post->id}/comment")}}'>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="form-group col-sm-8">
                        <input type="text" class="form-control" name="name" value="Admin"></input>
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
<script>
$(document).ready(function(){
    $("#toggle_reply").click(function(){
        $("#reply").toggle();
    });
});
</script>
@endsection