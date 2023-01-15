<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])
        ->name('post.index');

    Route::get('/post/add', [PostController::class, 'create'])
        ->name('post.create');

    Route::get('/post/{post:id}', [PostController::class, 'show'])
        ->name('post.show');

    Route::post('/post/add', [PostController::class, 'store'])
        ->name('post.store');

    Route::get('/all', [PostController::class, 'all'])
        ->name('post.all');

    Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])
        ->name('ckeditor.image-upload');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
