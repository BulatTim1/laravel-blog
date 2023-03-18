<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name("home");
    Route::get('/blog', 'blog')->name("blog");
    Route::get('/about', 'about')->name("about");
    Route::get('/contact', 'contact')->name("contact");
    Route::get('/post', 'post')->name("post");

});

Route::controller(ArticleController::class)->as('posts.')->prefix('/posts')->group(function (){
    Route::middleware(['auth', AdminMiddleware::class])->group(function(){
        Route::get('/create', 'createForm')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{article:id}/edit', 'editPost')->name('edit');
        Route::post('/{article:id}/edit', 'editPostPost')->name('editPost');
        Route::get('/{article:id}/delete', 'delete')->name('delete');
        Route::get('/{article:id}/publish', 'publish')->name('publish');
    });
    Route::get('/{article:slug}', 'show')->name('show');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('/signin', 'signin')->name('signin');
    Route::post('/signin', 'signinPost')->name('signinPost');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/signup', 'signupPost')->name('signupPost');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(CommentController::class)->prefix('/comments')->group(function (){
    Route::post('/create', 'store')->name('comment.create');
});

Route::middleware(['auth', AdminMiddleware::class])->controller(AdminController::class)->as('admin.')->prefix('admin')->group(function(){
    Route::get('/', 'index')->name('index');
});
