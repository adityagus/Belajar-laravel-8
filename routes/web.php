<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home', [
    "title" => "Home",
    "active" => 'home',
  ]);
});

Route::get('/about', function () {
  return view(
    'about',
    [
      "title" => "About",
      "active" => "about",
      "name" => "Aditya Gustianaaaaa  ",
      "email" => "adityagustian11@gmail.com",
      "image" => "bg-oren.png"
    ]
  );
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (Category $category) {
  return view('categories', [
    'title' => 'Post categories',
    "active" => 'categories',
    'categories' =>  Category::all()
  ]);
});




