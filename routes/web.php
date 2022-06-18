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
    "title" => "Home"
  ]);
});

Route::get('/about', function () {
  return view(
    'about',
    [
      "title" => "About",
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
    'categories' =>  Category::all()
  ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
  return view('category', [
    'title' => "Post By Category: $category->name",
    'posts' => $category->posts->load('author', 'category'),
  ]);
});

Route::get('/authors/{author:username}', function (User $author) {
  return view('posts', [
    'title' => "Post By Author : $author->name",
    'posts' => $author->posts->load('author', 'category'),
  ]);
});
