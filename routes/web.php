<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;

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
    return view('about', [
      "title" => "About",
      "name" => "Aditya Gustianaaaaa  ",
      "email" => "adityagustian11@gmail.com",
      "image" => "bg-oren.png"
    ]
    ) ;
  });
  
Route::get('/posts', function () {

  return view('posts', [
    "title" => "Posts",
    "posts" =>  Post::all()

  ]);
}); 


Route::get('/posts/{slug}', function ($slug) {

  return view('post', [
    "title" => "Single Post", 
    "post" => Post::find($slug)
  ]);

});