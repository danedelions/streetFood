<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function getPostView(){
    		return view('post/index');
    	}

    	public function getAboutView(){
    		return view('post/about');
    	}

         public function showPosts(){

    	    $posts = Post::all();
    		return view('post/index')->with('posts', $posts)->first();
    	}


}
