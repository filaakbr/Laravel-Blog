<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Http\Controllers\PostController;

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
    return view('home');
});


Route::get('/about', function () {
    return view('about', [
        "nama" => "Fila Akbar" ,
        "email" => "fila_21310003@stimata.ac.id" ,
        "gambar" => ""
    ]);
});

// Route::get('/Blog', function ()  {
//     return view('blog');

    
// });

// Route::get('/create-blog', function(){
//     $blog = new Blog();
//     $blog->title ='Test Title';
//     $blog->body='test description';
//     return response()->json($blog->save());
// });

// Route::get('/show', function(){
   
//     return response()->json(Blog::all());
// });

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{slug}', [PostController::class, 'show']);