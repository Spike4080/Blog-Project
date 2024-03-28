<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.index', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }
    public function delete(Blog $blog)
    {
        $blog->delete();
        return back();
    }
    public function show()
    {
        $users = User::all();
        return view('admin.users', [
            "users" => $users
        ]);
    }
    public function edit(Blog $blog)
    {
        return view('admin.edit', [
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }

    public function update(Blog $blog)
    {
        request()->validate([
            'title' => ['required'],
            'photo' => ['nullable', 'image'],
            'intro' => ['required'],
            'slug' => ['required'],
            'body' => ['required']
        ]);


        $blog->title = request('title');
        $blog->intro = request('intro');
        $blog->slug = request('slug');
        $blog->body = request('body');
        $blog->user_id = auth()->user()->id;
        $blog->category_id = request('category_id');
        if (request('photo')) {
            $blog->photo = '/storage/' . request('photo')->store('/blogs');
        }
        $blog->save();

        return redirect('/admin/blogs');
    }
}
