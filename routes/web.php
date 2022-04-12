<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserSettingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

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
//View Home
Route::get('/home',[HomeController::class,'home'] );
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [UserSettingController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);
//End View Home

//View Booking Hotel
Route::get('/find', [BookingController::class, 'findh']);
Route::get('/hdetail', [BookingController::class, 'hdetail']);
Route::get('/book', [BookingController::class, 'book']);
//End View Booking Hotel

//View User Setting
Route::get('/mybook', [UserSettingController::class, 'mybook']);
Route::get('/myaccount', [UserSettingController::class, 'myacc']);
Route::get('/pclist', [UserSettingController::class, 'pclist']);
//End View User Setting




