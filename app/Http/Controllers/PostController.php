<?php

namespace App\Http\Controllers;
use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
        public function getPostView(){
    		return view('post/index');
    	}

         public function showPosts(Request $request){

    	    $posts = Post::latest('id');

            if ($month = $request->month){
                $posts->whereMonth('created_at', Carbon::parse($month)->month);
            }
     
            if ($year = $request->year){
                $posts->whereYear('created_at', $year);
            }

                $posts = $posts->get();

    		return view('post/index')
                ->with('posts', $posts);
    	}

    	public function archivePost(){

            $posts = Post::latest();


            $posts = $posts->get();
            // dd($posts->toArray());  
            
    		$archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
                ->orderByRaw('min(created_at) desc')
                ->get();


    		return view('post/archive', compact('archives','posts'));  
    	}
}
