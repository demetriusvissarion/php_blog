<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    // Eager loading
    return view('posts', [
        'posts' => Post::latest()->get() // ->with('category', 'author') here fixes the n+1 problem, but it's repeating code
    ]);
});

// this binds a route key to an underlying eloquent model
// route name has to match up with the variable name
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);

});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts    // ->load(['category', 'author']) here fixes the n+1 problem, but it's repeating code
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts    // ->load(['category', 'author']) here fixes the n+1 problem, but it's repeating code
    ]);
});
