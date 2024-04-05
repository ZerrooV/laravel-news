<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SesiController;

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

Route::get('/index', [PageController::class, 'index'])->name('index');
// Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');


Route::prefix('/admin')->controller(PostController::class)->name('posts.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/baca','baca')->name('baca');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('{id}', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('{id}', 'destroy')->name('destroy');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index'])->name( 'index' );
    Route::post('/login', [SesiController::class, 'login'])->name( 'login' );
});

Route::middleware(["auth"])->group(function (){
    Route::get('/admin', [PostController::class, 'index']);
    // Route::get('/baca', [PostController::class, 'baca']);
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/home', function(){
    return redirect('/admin');
});

