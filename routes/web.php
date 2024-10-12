<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\JobController;

use App\Http\Controllers\ApplicationController;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'index2'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('index', [JobController::class , 'index']);

    Route::get('post-job', [UserController::class , 'postJob']);
    
    Route::post('jobs/store', [JobController::class, 'store']);

    Route::get('application/{job_id}', [JobController::class , 'apply']);

    Route::post('application', [ApplicationController::class , 'storeApp']);

    Route::get('blog', [ApplicationController::class , 'indexApp']);

    Route::post('application/approve/{application_id}', [ApplicationController::class , 'approve']);

    Route::post('application/decline/{application_id}', [ApplicationController::class , 'decline']);

    Route::post('post/store', [PostsController::class, 'storePost']);

    Route::get('posts', [PostsController::class, 'indexPost']);

    Route::get('posts/{user_id}', [PostsController::class, 'indexPost']);

    Route::get('reviewjob/{user_id}', [JobController::class, 'reviewJob']);


});

require __DIR__.'/auth.php';