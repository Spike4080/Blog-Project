<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\f;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create()
    {
        $comments = Comment::all();
        return view('blog-detail', [
            'comments' => $comments
        ]);
    }

    public function store(Blog $blog)
    {
        request()->validate([
            'body' => ['required']
        ]);

        $comment = new Comment;
        $comment->user_id = auth()->user()->id;
        $comment->blog_id = $blog->id;
        $comment->body = request('body');
        $comment->save();

        return redirect()->back();
    }
}
