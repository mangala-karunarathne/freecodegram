<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get("/", function() {
//     return view('welcome');
// });


//GET
Route::get('/blog', [App\Http\Controllers\PostController::class, 'index']);

// Route::get('/article/{id?}', [App\Http\Controllers\PostController::class, 'show']);


// Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'show'])->whereNumber('id');

// Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'show'])
//     ->where('id', '[0-9]+');

// Route::get('/blog/{name}', [App\Http\Controllers\PostController::class, 'show'])
//     ->where('name', '[A-Za-z]+');

// Route::get('/blog/{name}', [App\Http\Controllers\PostController::class, 'show'])
//     ->whereAlpha('name');

// Route::get('/blog/{id}/{name}', [App\Http\Controllers\PostController::class, 'show'])
//     ->where([
//         'id' => '[0-9]+',
//         'name' => '[A-Za-z]+'
//     ]);

Route::get('/blog/{id}/{name}', [App\Http\Controllers\PostController::class, 'show'])
    ->whereNumber('id')
    ->whereAlpha('name');


//POST
Route::get('/blog/create', [App\Http\Controllers\PostController::class, 'create']);

Route::get('/blog', [App\Http\Controllers\PostController::class, 'store']);

//PUT OR PATCH
Route::get('/blog/edit/{id}', [App\Http\Controllers\PostController::class, 'create']);

Route::patch('/blog/{id}', [App\Http\Controllers\PostController::class, 'update']);

//DELETE
Route::patch('/blog/{id}', [App\Http\Controllers\PostController::class, 'destroy']);

// Router for invoke method
Route::delete('/blog/{id}', [App\Http\Controllers\PostController::class, '__invoke']);

// Multipple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostController::class,'index']);
// Route::any('/blog', [PostController::class, 'index']);

// Return Vie w 
Route::view('/blog', 'blog.index', ['name' => 'Code with ABC']);

