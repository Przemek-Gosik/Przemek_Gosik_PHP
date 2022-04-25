<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Input;
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
    return view('stronaglowna');
});


Auth::routes();

Route::middleware(['auth','verified'])->group(function(){
    Route::get('/pages/comments',[App\Http\Controllers\CommentController::class,'index']);
    Route::get('/pages/edit/{user}',[App\Http\Controllers\UsersController::class,'edit'])->name('pages.edit');
    Route::post('/pages/update/{id}',[App\Http\Controllers\UsersController::class,'update'])->name('pages.update');
    Route::post('/pages/comments',[App\Http\Controllers\CommentController::class,'store'])->name('store');
    Route::get('/admin_content/userslist',[App\Http\Controllers\UsersController::class, 'index'])->name('admin_content.userslist')->middleware('can:isAdmin');
    Route::delete('/admin_content/userslist/{id}',[App\Http\Controllers\UsersController::class, 'destroy'])->middleware('can:isAdmin');
    Route::delete('/pages/galeria/{id}',[App\Http\Controllers\GaleriaController::class, 'destroy'])->middleware('can:isAdmin');
    Route::get('/profil',[App\Http\Controllers\ProfileController::class,'index']);
    Route::post('/profil',[App\Http\Controllers\ProfileController::class,'update']);
    Route::get('/pages/createphoto',[App\Http\Controllers\GaleriaController::class,'create'])->name('pages.createphoto')->middleware('can:isAdmin');
    Route::post('/pages/createphoto',[App\Http\Controllers\GaleriaController::class,'store'])->name('pages.store')->middleware('can:isAdmin');
});


//Route::get('/pages/comments',[App\Http\Controllers\CommentController::class,'create'])->name('create');

Route::get('/pages/historie/poczatki',[App\Http\Controllers\HistoriaController::class,'index1']);
Route::get('/pages/historie/polska',[App\Http\Controllers\HistoriaController::class,'index2']);
Route::get('/pages/historie/szybowce',[App\Http\Controllers\HistoriaController::class,'index3']);
Route::get('/pages/historie/wspolczesne',[App\Http\Controllers\HistoriaController::class,'index4']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pages/filmy', [App\Http\Controllers\FilmyController::class, 'index']);
Route::get('/pages/galeria', [App\Http\Controllers\GaleriaController::class, 'index'])->name('pages.galeria');
Route::get('/pages/historia', [App\Http\Controllers\HistoriaController::class, 'index']);
Route::delete('/admin_content/commentslist/{id}',[App\Http\Controllers\CommentController::class, 'destroy'])->middleware('can:isAdmin');


