<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showComments(Post $posts)
    {
    	$posts = Post::find('id');
        return view('comment.comment', compact('posts'));
    }

    public function addComment(Request $request)
    {
    	$comments = Comment::create([
    			'name' => $request->input('name'),
    			'post_id' => $request->post_id,
    			'comment' =>$request->input('comment')
    		]);
    }
}
