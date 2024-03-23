<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        $blogs = Blog::all();
        return view('blogs', [
            'blogs' => $blogs
        ]);
    }
}
