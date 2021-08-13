<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\Controller;

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

Route::get('/test', function () {
    return '<h1> this is a test<h1>';
});
Route::get('/contact', function () {
    return view('contact');
});

route::get('/movies', [MovieController::class, 'all_movies']);
route::get('/movies/{id}', [MovieController::class, 'one_movie']);

//routes para criar paginas e posso usar uma function que esta depois de class,
route::get('/flowers', [FlowerController::class, 'index']);
route::get('/new-flower', [FlowerController::class, 'create']);
route::post('/new-flower', [FlowerController::class, 'update']);


/* Route::get('/books/{id}', function ($id) {
    return 'Book page Number : ' . $id; */
