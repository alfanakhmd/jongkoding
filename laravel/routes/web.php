<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\Blog;

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

// Route::get('/', function () {
//     return view('coba', [
//         "name" => "Budi"
//     ]);
// });
Route::get('/', [Blog::class, 'index']);
Route::get('/blog/form', [Blog::class, 'form']);
Route::post('/blog/post', [Blog::class, 'post']);
Route::get('/coba', [Coba::class, 'index']);
