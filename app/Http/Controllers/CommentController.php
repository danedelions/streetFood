<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showComments(Post $post)
    {
    	// $post = Post::find('id');
        $comments = Comment::all()->where('post_id','=',$post->id);
        // dd($comments->toArray());
        return view('comment.comment', compact(['post'],['comments']));
    }

    public function addComment(Request $request)
    {
    	$comments = Comment::create([
    			'name' => $request->input('name'),
    			'comment' =>$request->input('comment'),
                'post_id' => $request->postId
    	]);

        return redirect()->back();

    }

    public function displayComments($id)
    {
        $comments = Comment::latest('id')->get();
        return view('comment.comment', compact('comments'));
    }
}
