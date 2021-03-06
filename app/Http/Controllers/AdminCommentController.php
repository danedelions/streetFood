<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Reply;
use App\Http\Requests\CommentRequest;
class AdminCommentController extends Controller
{
    public function showComments(Post $post)
    {
    	// $post = Post::find('id');
        $comments = Comment::all()->where('post_id','=',$post->id);
        // dd($comments->toArray());
        return view('admin.admincomment', compact(['post'],['comments']));
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
        return view('admin.admincomment', compact('comments'));
    }
}
