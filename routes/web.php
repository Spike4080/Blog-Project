<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\MustBeGuestUser;
use App\Http\Middleware\MustBeLoginUser;
use App\Models\Blog;
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

Route::get('/admin', [AdminController::class, 'index']);

Route::middleware(MustBeGuestUser::class)->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/blogs', [BlogController::class, 'show']);
    Route::get('/blogs/{blog:id}', [BlogController::class, 'detail']);
    Route::post('logout', [LogOutController::class, 'destory']);
});

Route::middleware(MustBeLoginUser::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LogInController::class, 'create']);
    Route::post('/login', [LogInController::class, 'store']);
});
