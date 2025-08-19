<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostBlogController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('auth.store');
Route::post('/logout', [AuthController::class, 'destroy'])->name('auth.destroy');


Route::get('/register', [RegisteredUserController::class, 'index']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/blogs', [PostBlogController::class, 'index']);
Route::get('/postBlog', [PostBlogController::class, 'create'])->middleware('auth');
Route::post('/postBlog', [PostBlogController::class, 'store'])->name('postBlog.store');
Route::get('postBlog/{post}/edit', [PostBlogController::class, 'edit'])->name('postBlog.edit');
Route::put('postBlog/{post}', [PostBlogController::class, 'update'])->name('postBlog.update');
Route::delete('postBlog/{post}', [PostBlogController::class, 'destroy'])->name('postBlog.destroy');
Route::get('postBlog/{post}', [PostBlogController::class, 'show'])->name('postBlog.show');

Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

Route::get('/search', [PostBlogController::class, 'search'])->name('search');

Route::get('/myBlogs', function () {
    $posts = auth()->user()->posts; // Only fetch posts by the logged-in user
    return view('components.myBlogs', compact('posts'));
})->middleware('auth')->name('myBlogs');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');



Route::get('/about', [AboutPageController::class, 'index']);