<?php
// routes/web.php
use App\Http\Controllers\BlogPostController;
Route::get('/', [BlogPostController::class, 'startingPage']);
Route::get('/posts/create', [BlogPostController::class, 'create'])->name('posts.create');
Route::post('/posts', [BlogPostController::class, 'store'])->name('posts.store');
Route::get('/posts', [BlogPostController::class, 'index'])->name('posts.index');