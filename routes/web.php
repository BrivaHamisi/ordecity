<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscriptionController;

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

    //Users Route
    Route::get('/users', [UsersController::class, 'index'])->name('dashboard.users');

    //Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

    Route::get('/user-guide', function () {
    return view('components.dashboard.user-guide');
    })->name('user-guide');


});
    Route::resource('blogs', BlogController::class);

    //about
    Route::get('/about', [AboutController::class, 'about'])->name('about');

    //Show Blogs
    Route::get('/showblogs', [BlogController::class, 'show'])->name('blogs.home');
    Route::get('/showblogs/{id}', [BlogController::class, 'showDetails'])->name('blogs.showdetails');
    Route::get('/blogs/filter', [BlogController::class, 'filter'])->name('blogs.filter');
    Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');


require __DIR__.'/auth.php';
