<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/home/{name?}',[HomeController::class, 'index'])->name('home.index');

Route::get('/user/{name?}', function( $name = null ){

    $age = 13;
    return view('user', compact('name','age')); // ['name' => $name] 와 같다

});

Route::get('/test1',function(){
    return view('test1', ['name'=>'<b>홍길동</b>','id'=>'<b>길동아!</b>']);

});

Route::get('/posts', [ClientController::class, 'getAllpost'])->name('posts.getallpost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');