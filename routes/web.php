<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Rizky Yanuar",
        "email" => "rizkyyanuar123@gmail.com",
        "image" => "shaun-the-sheep.png"
    ]);
});

Route::get('/blogs', [PostController::class, 'index']);

Route::get('/blogs/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Posts by Author: $author -> name",
//         'posts' => $author->posts
//     ]);
// });
