<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\EnsureUserIsLoggedIn;


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
route::get('/', [FlowerController::class, 'index']);
route::get('/flower', [FlowerController::class, 'index'])->name('flowers');


route::get('/new-flower', [FlowerController::class, 'create']);
route::post('/new-flower', [FlowerController::class, 'store']);


Route::get('/update/flower/{id}', [FlowerController::class, 'edit'])->name('update.flower');
Route::post('/update/flower/{id}', [FlowerController::class, 'update']);

Route::get('/delete/flower/{id}', [FlowerController::class, 'destroy'])->name('delete.flower');;


//display flower detail
Route::get('/flower-detail/{id}', [FlowerController::class, 'show'])->name('flower.detail');
//API
route::get('/api', [ApiController::class, 'getFlowers']);
Route::get('/api/get-flower/{id}', [ApiController::class, 'getFlower']);
Route::get('/api/get-detail/{type}', [ApiController::class, 'getType']);
Route::get('/api/get-flowers/{amount}', [ApiController::class, 'getSomeFlowers']);

//ajax calls
route::get('/new-flower', [FlowerController::class, 'ajaxForm'])->name('show.ajax.form');
route::post('/new-flower', [FlowerController::class, 'ajaxAnswer'])->name('submit.ajax.form');

//register
route::get('/register', [RegisterController::class, 'index'])->name('register-page');
route::post('/register', [RegisterController::class, 'store'])->name('register-success');

//login
route::get('/login', [RegisterController::class, 'loginPage'])->name('login');
route::post('/login', [RegisterController::class, 'login'])->name('login.send');

//middleware
route::get('/secret', [RegisterController::class, 'secret'])->middleware(EnsureUserIsLoggedin::class);
