<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostsController::class, 'index']);
Route::get('/pages', [PostsController::class, 'pages'])->name('post.pages');
Route::get('/page/{id}', [PostsController::class, 'viewPage']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/create', [PostsController::class, 'createPage']);
    Route::post('/upload', [PostsController::class, 'uploadPage']);
    Route::get('/edit/{id}', [PostsController::class, 'editPage']);
    Route::post('/update/{id}', [PostsController::class, 'updatePage']);
    Route::get('/delete/{id}', [PostsController::class, 'destroyPage']);

});