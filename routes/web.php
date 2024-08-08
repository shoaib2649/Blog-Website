<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Practice;
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

// Route::get('/', function () {
//     return "hellow";
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [HomeController::class, 'homepage']);
Route::get('home', [HomeController::class, 'index']);
Route::get('addpost', [AdminController::class, 'postpage'])->name('addpost');
Route::get('showpost', [AdminController::class, 'showpost'])->name('showpost');
Route::post('postsubmit', [AdminController::class, 'postsubmit'])->name('postsubmit');
Route::post('showpost', [AdminController::class, 'showpost'])->name('showpost');
Route::get('deletepost/{id}', [AdminController::class, 'deletepost'])->name('deletepost');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('editsubmit', [AdminController::class, 'editsubmit'])->name('editsubmit');
Route::get('viewpage/{id}', [HomeController::class, 'viewpage'])->name('viewpage');
Route::get('createpost', [HomeController::class, 'createpost'])->name('createpost');
Route::post('postsubmit', [HomeController::class, 'postsubmit'])->name('postsubmit');
Route::get('accept/{id}', [AdminController::class, 'accept'])->name('accept');
Route::get('reject/{id}', [AdminController::class, 'reject'])->name('reject');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
// Geeyshow  channel
// Route::get('/user/{id}',function( string $ide='malik')
// {
// return "hellow".$ide;
// })->whereNumber('id');
// Route::get('user/{id}/{name}',[Practice::class,'index'])->name('profile');
// Route::fallback(function(){
//     return "not found herre";
// });
Route::get('/add_author', [AuthorController::class, 'add_author']);


Route::get('/add_book', [BookController::class, 'add_book']);
Route::get('/get_book/{id}', [BookController::class, 'get_book']);
Route::get('/get_author/{id}', [BookController::class, 'get_author']);

