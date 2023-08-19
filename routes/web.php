<?php

use App\Models\Category;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> f09f359ce93db3e3db08c8ee641039eb2cc7a8f3
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
<<<<<<< HEAD
=======
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('categories', [
        'title' => $category -> name,
        'posts' => $category -> posts,
        'category' => $category ->name
>>>>>>> f09f359ce93db3e3db08c8ee641039eb2cc7a8f3
    ]);
});


// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Posts by Author: $author -> name",
//         'posts' => $author->posts
//     ]);
// });
