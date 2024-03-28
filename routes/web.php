<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MustBeAdminUser;
use App\Http\Middleware\MustBeGuestUser;
use App\Http\Middleware\MustBeLoginUser;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(MustBeAdminUser::class)->group(function () {
    Route::get('/admin/blogs', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'create']);
    Route::delete('/admin/blogs/{blog}/delete', [AdminController::class, 'delete']);
    Route::get('/admin/blogs/{blog}/edit', [AdminController::class, 'edit']);
    Route::patch('/admin/blogs/{blog}/update', [AdminController::class, 'update']);
    Route::get('/admin/users', [AdminController::class, 'show']);
});

Route::middleware(MustBeGuestUser::class)->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/blogs', [BlogController::class, 'show']);
    Route::get('/blogs/{blog:id}', [BlogController::class, 'detail']);
    Route::post('/blogs/{blog}/comment/store', [CommentController::class, 'store']);
    Route::post('logout', [LogOutController::class, 'destory']);
    // Create Blogs
    Route::get('/blogs/blog/create', [BlogController::class, 'create']);
    Route::post('/blogs/blog/store', [BlogController::class, 'store']);
    // User Profile
    Route::get('/users/user/profile', [UserController::class, 'index']);
});

Route::middleware(MustBeLoginUser::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LogInController::class, 'create']);
    Route::post('/login', [LogInController::class, 'store']);
});
