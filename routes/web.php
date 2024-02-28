<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/about', [WelcomeController::class, 'about']);

Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

// basic route
Route::get('/world', function () {
    return 'World';
});

// route with parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

// route with multiple parameter
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// route with parameter
Route::get('/article/{id}', function ($id) {
    return "Halaman Artikel dengan ID {$id}";
});

// route with optional parameter and default value
Route::get('/user/{name?}', function ($name = "John") {
    return 'Nama saya ' . $name;
});

// route naming
Route::get('/user/profile', function () {
    return "Profile Page";
})->name('profile');


Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);