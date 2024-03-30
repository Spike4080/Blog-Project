<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $user = auth()->user();
        return view('user.profile', [
            'user' => $user
        ]);
    }

    public function show()
    {
        return view('user.posts', [
            'blogs' => Blog::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('user.edit', [
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
        };
        $blog->save();

        return redirect('/users/user/posts');
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    // Edit and Delete Profile
    public function editProfile(User $user)
    {
        return view('user.edit-profile', [
            'user' => $user
        ]);
    }

    public function updateProfile(User $user)
    {
        request()->validate([
            'name' => ['required', 'min:2', 'max:30'],
            'username' => ['required', 'min:2', 'max:30'],
            'email' => ['required', 'email', 'max:40'],
            'password' => ['required', 'confirmed', 'min:2', 'max:30'],
            'role_id' => ['nullable']
        ]);

        $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->role_id = auth()->user()->role_id ?? 3;
        $user->save();

        return redirect('/users/user/profile');
    }

    public function deleteProfile(User $user)
    {
        $user->delete();
        $user->blogs()->delete();
        return redirect('/login');
    }
}
