<?php

use App\Http\Controllers\portofolio;
use Illuminate\Support\Facades\Route;

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

// controller portofolio
Route::get('/', [portofolio::class,'portofolio'])->name('home');
Route::get('/about', [portofolio::class,'about'])->name('about');
Route::get('/project', [portofolio::class,'project'])->name('project');
Route::get('/serti', [portofolio::class,'sertifikat'])->name('serti');

