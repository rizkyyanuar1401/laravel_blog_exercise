<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
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

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');


Route::get('/dashboard/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/dashboard/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->except([
    'show', 'destroy', 'edit', 'update'
])->middleware('auth');
// Read Method
Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
// Delete Method
Route::delete('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');
// Edit Method
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');
// // Update Method
Route::patch('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'update'])->middleware('auth');
