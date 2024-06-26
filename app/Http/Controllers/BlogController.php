<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
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
            ->paginate(5)
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
            'blog' => $blog->load('comments'),
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('blog.create', [
            'categories' => $categories
        ]);
    }
    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'intro' => ['required'],
            'slug' => ['required'],
            'body' => ['required']
        ]);


        $blog = new Blog;
        $blog->title = request('title');
        $blog->intro = request('intro');
        $blog->slug = request('slug');
        $blog->body = request('body');
        $blog->user_id = auth()->user()->id;
        $blog->category_id = request('category_id');
        $blog->photo = '/storage/' . request('photo')->store('/blogs');
        $blog->save();

        if (auth()->check() && auth()->user()->role_id == 1) {
            return redirect('/admin/blogs');
        } elseif (auth()->check() && auth()->user()->role_id == 2) {
            return redirect('/admin/blogs');
        } else {
            return redirect('/users/user/posts');
        }
    }
}
