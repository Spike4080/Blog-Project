<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function show()
    {
        $blogs = Blog::filter(request(['search', 'username', 'category']))
            ->paginate(3)
            ->withQueryString();
        $categories = Category::all();
        return view('blogs', [
            'blogs' => $blogs,
            'categories' => $categories
        ]);
    }

    public function detail(Blog $blog)
    {
        return view('blog-detail', [
            'blog' => $blog
        ]);
    }
}
