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
                <hr>
                <h4>Comments</h4>
                <hr>
                <div class="panel-body comment-container" >
                @foreach($comments as $row)
                        <div class="well">
                            <h5>{{$row->name}}</h5>
                            <h6>Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>
                            
                            <span><p>{{$row->comment}}</p></span>

                            <div style="margin-left:10px;">
                                <a style="cursor: pointer;" name_a="{{ $row->name }}" cid="{{ $row->id }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                <div class="reply-form">
                                    <!-- Dynamic Reply form -->
                                        
                                    
                                </div>
                                
                                @foreach($row->reply as $rep)

                                        <div class="well">
                                            <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                            <h6>Posted on {{ date('D d-M-Y  g:i:s A',$row->created_at->timestamp) }}</h6>
                                            <span> {{ $rep->reply }} </span>
                                            <div style="margin-left:10px;">
                                                <a style="cursor: pointer;" rname="{{ $rep->name }}" rid="{{ $row->id }}" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;
                        
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

                <h4>Comment as guest</h4><br>
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
<script>
$(document).ready(function(){
    $("#toggle_reply").click(function(){
        $("#reply").toggle();
    });
});
</script>
@endsection