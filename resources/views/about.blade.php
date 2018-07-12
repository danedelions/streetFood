@extends('layouts.app')
<!-- @push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
@endpush -->
@push('css')
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

.scrollContainer{
    /*background-color: #474747;*/
    height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

.section-1{
    background-image: url("img/5.png");
}

.section-2{
    background-image: url("img/6.png");
}

.section-3{
    background-image: url("img/7.jpg");
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

.text{
    color: white;
    margin: 2em;
}

#container{
    padding: 3em;
    display: block;
   /* height: 50px;
    width: 300px;*/
}
.tiles{
    display: inline-block;
    opacity: 0;
    padding-right: 1em;
    padding-left: 1em;
}

.images{
    height: 300px;
    border-radius: 50%;
/*    padding: 2em;
    padding-top: 1em;*/
    border-style: solid;
    border-color: white;
    border-spacing: 0px;
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
                    </ul>
                </div>
            </center>           
        </div>          
    </div>
@endsection
@section('page-content')
	<div class="scrollContainer section-1">
        <div class="text" id="text">
            <p style="text-align: justify; color: white;">
                <h1>What is The Street Food Index?</h1>
            The Streetfood Index is a blog that talks about street food from all around the world. Learn more about the savory and mouth-watering street food and where to find them. In this blog, we highly encourage everyone to travel around and embrace the street food because by embracing street food, we embrace culture and gain knowledge.
            </p>
        </div>
	</div>

    <div class="scrollContainer section-2">
        <div class="text">
            <p style="text-align: justify; color: white;">
                <h1>Why street food?</h1>
            We believe that street food is the heart of one place. You will never truly know culture if you have not tasted food and delicacies from different places. Street food is a go-to eating stop for people who want to have a quick snack or sometimes have a cheap meal.
            </p>
        </div>

    </div>
    <br>
    <div class="container">
        <center>
            <h1 style="color: white;">The Developers of The Street Food Index</h1>
            <div id="container">
                <div class="tiles">
                    <img src="{{asset('img/dane.jpg')}}" class="images">
                    <h3 style="color: white;">Daniela</h3>
                </div>
                <div class="tiles">
                    <img src="{{asset('img/tiff.jpg')}}" class="images">
                     <h3 style="color: white;">Tiffany</h3>
                </div>
                <div class="tiles">
                    <img src="{{asset('img/bryle.jpg')}}" class="images">
                     <h3 style="color: white;">Bryle</h3>
                </div>
            </div>       
        </center>        
    </div>





    <script>
        $(document).ready(function(){
            var velocity = 0.5;

            function update(){ 
                var pos = $(window).scrollTop(); 
                $('.scrollContainer').each(function() { 
                    var $element = $(this);
                    // subtract some from the height b/c of the padding
                    var height = $element.height()-15;
                    $(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px'); 
                }); 
            };

                $(window).bind('scroll', update);

            });

        $(document).ready(function(){
            var divpos= $("#container").offset().top;
            var interval = setInterval(function() {
                if ($(window).scrollTop() >= divpos-650) {
                    
                    var animDelay = 0;
                        $('.tiles').each(function(){
                        $(this).delay(animDelay).animate({
                            opacity:1
                        },500);
                        animDelay += 500;
                });

                    clearInterval(interval);
                }
            }, 250);
        });

    </script>
@endsection