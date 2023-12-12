<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
     return view('index');
 });
 
 Route::get('/dash', function () {
    return view('dash');
});
 Route::get('/livre',[PostController::class, 'show'])->name('posts.show');

 Route::get('/', [PostController::class, 'index'])->name('accueil');
 Route::get('/#manuel', [PostController::class, 'index'])->name('manuel');
 Route::get('/posts',[PostController::class, 'search'])->name('posts.search');
 Route::get('/mail',[PostController::class, 'mail'])->name('mail');
 Route::get('/contact',function () {
    return view('contact_us');
})->name('contact_us');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/profile', [RegisteredUserController::class, 'update'])->name('update');
    Route::patch('/profile/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/post/{id}', [PostController::class, 'viewUpdate'])->name('updatelivre');
    Route::patch('/updatePost/{id}', [PostController::class, 'update'])->name('updatePost');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/createpost',[PostController::class, 'create'])->name('vendre');
    Route::post('/storepost', [PostController::class, 'store'])->name('posts.store');
    Route::get('/profile', [PostController::class, 'userPosts'])->name('profile.edit');
});

require __DIR__.'\auth.php';
