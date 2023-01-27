<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;


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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get("/", function() {
//     return view('welcome');
// });


//GET
// Route::get('/blog', [App\Http\Controllers\PostController::class, 'index']);

// Route::get('/article/{id?}', [App\Http\Controllers\PostController::class, 'show']);


// Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'show'])->whereNumber('id');

// Route::get('/article', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
// Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');

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

// Route::get('/blog/{id}/{name}', [App\Http\Controllers\PostController::class, 'show'])
//     ->whereNumber('id')
//     ->whereAlpha('name');


//POST
// Route::get('/blog/create', [App\Http\Controllers\PostController::class, 'create']);
// Route::get('/blog/create', [App\Http\Controllers\PostController::class, 'create'])->name('blog.create');
// Route::get('/blog/{id}', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');

// // Route::get('/blog', [App\Http\Controllers\PostController::class, 'store']);

// //PUT OR PATCH
// Route::get('/blog/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('blog.edit');

// Route::patch('/blog/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('blog.update');

// //DELETE
// Route::delete('/blog/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('blog.destroy');

// Route::resource('/blog', [App\Http\Controllers\PostController::class, 'index']);

//     Route::get('/', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
    // Route::get('/show', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');
    Route::get('/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('blog.show');

//     Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('blog.create');
//     Route::get('/', [App\Http\Controllers\PostController::class, 'store'])->name('blog.store');

//     Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('blog.edit');
//     Route::patch('/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('blog.update');

//     Route::delete('/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('blog.destroy');

});


// // Router for invoke method
// Route::delete('/blog/{id}', [App\Http\Controllers\PostController::class, '__invoke']);

// Multipple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostController::class,'index']);
// Route::any('/blog', [PostController::class, 'index']);

// Return View
// Route::view('/blog', 'blog.index', ['name' => 'Code with ABC']);

// Falback Route
// Route::fallback(FallbackController::class);



// ...

// $router = new Router;

// Set a default action to be performed when no matching routes are found
// $router->fallback(function() {
//     return response('404 | The Page Not Found', 404);
// });


