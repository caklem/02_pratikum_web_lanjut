<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutController;
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
//     return view('welcome');
// });
// Route::get('/', function ($id) {
//     echo "Selamat Datang";
//     });

// Route::get('/about',function (){
//     echo "2141720236";
//     echo "Mohammad Halim Perdana";
//     echo "2H";
// });

// Route::get('/articles/{id}', function ($id){
//     echo "Halaman artikel dengan id $id";
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticlesController::class, 'articles']);