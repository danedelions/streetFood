<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
        public function getPostView(){
    		return view('post/index');
    	}

         public function showPosts(){

    	    $posts = Post::latest('id')->get();
    		return view('post/index')->with('posts', $posts);
    	}
}
