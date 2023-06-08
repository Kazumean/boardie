<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/post/create', [PostController::class, 'create']);


// 自分の記事だけを一覧表示する
Route::get('post/mypost', [PostController::class, 'mypost'])->name('post.mypost');
// 自分がコメントを投稿した記事のみを表示する
Route::get('post/mycomment', [PostController::class, 'mycomment'])->name('post.mycomment');

// 記事関連のルート
Route::resource('post', PostController::class);


// コメントを投稿する
Route::post('post/comment/store', [CommentController::class, 'store'])->name('comment.store');
