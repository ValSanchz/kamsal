<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');
Route::view('/divisiones', 'divisiones')->name('division');
Route::view('/about', 'about')->name('about');
/*Route::get('/galery', [PostController::class, 'index'])->name('posts.index');
Route::get('galery/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/galery', [PostController::class, 'store'])->name('posts.store');
Route::get('/galery/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/galery/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/galery/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/galery/{post}', [PostController::class, 'destroy'])->name('posts.destroy');*/

Route::resource('post', PostController::class, [
    'names' => 'posts',
    'parameters' => ['galery' => 'post']
]);

Route::view('/galery', 'galery')->name('galery');

Route::view('/contact', 'contact')->name('contact');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
//Route::post('/register', [RegisteredUserController::class, 'store']);