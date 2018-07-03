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
@endpush

@section('page-header')    
    <div class="container">
        <h1 class="h1">Add New Post</h1>
    </div>
    <hr>
@endsection

@section('page-content')
	<div class="content">
		<div class="card">
			<div class="card-body">
					<form method="post" action="{{ route('admin.store')}}" class="form-group">
					{{csrf_field()}}
						<div class="form-group col-sm-6">
							<label>Title</label>
							<input type="text" name="title" class="form-control"></input>
						</div>
						<div class="form-group col-sm-8">
							<label>Post</label>
							<textarea class="form-control" name="blog_post" rows="12" maxlength="4096"></textarea>
						</div>

                        <div class="form-group col-sm-6">
                                <button type="submit" class="btn btn-success">Submit</button>
                        </div>
					</form>

			</div>
		</div>



		<div class="footer">
		</div>

	</div>



@endsection