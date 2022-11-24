<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
// middleware bhancha that checks bich ma, may be age or country etc
// Middleware of authentication checks ki user logged in cha ki nai before redirecting to dashboard

// middleware(['auth']) ko auth came from kernel.php ko $routeMiddleware that redirects to authentication page
Route::get('/', [HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class,'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class,'logout'])->name('logout');


// Route::get('/posts', function () {
//     return view('posts');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
