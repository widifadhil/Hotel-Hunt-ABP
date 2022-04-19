<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserSettingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\StaffDepartmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HotelController;
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
Route::get('/home', [HomeController::class, 'home']);
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



//home
Route::get('admin', [HomeController::class, 'index'])->name('dashboard');

//admin login route
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/login', [AdminController::class, 'check_login']);
Route::get('admin/logout', [AdminController::class, 'login']);


//  roomType route
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//  room route
Route::get('admin/room/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('admin/room', RoomController::class);

//  roomType route
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

// Hotel Route
// Route::get('admin/hotel/{id}/delete', [HotelController::class, 'destroy']);
// Route::resource('admin/hotel', HotelController::class);

//  customer route
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('admin/customer', CustomerController::class);

// Delete Image
Route::get('admin/roomtypeimage/delete/{id}', [RoomtypeController::class, 'destroy_image']);

// Delete Image
Route::get('admin/hotelimage/delete/{id}', [HotelController::class, 'destroy_image']);

//  Department route
Route::get('admin/department/{id}/delete', [StaffDepartmentController::class, 'destroy']);
Route::resource('admin/department', StaffDepartmentController::class);

//  Staff crud route
Route::get('admin/staff/{id}/delete', [StaffController::class, 'destroy']);
Route::resource('admin/staff', StaffController::class);

// Staff payment
Route::get('admin/staff/payment/{id}/{staff_id}/delete', [StaffController::class, 'delete_payment']);
Route::get('admin/staff/payment/{id}', [StaffController::class, 'all_payments']);
Route::get('admin/staff/payment/{id}/add', [StaffController::class, 'add_payment']);
Route::post('admin/staff/payment/{id}', [StaffController::class, 'save_payment']);

//  Hotel crud route
Route::get('admin/hotel/{id}/delete', [HotelController::class, 'destroy']);
Route::resource('admin/hotel', HotelController::class);

//  Booking route
Route::get('admin/booking/{id}/delete', [BookingController::class, 'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::resource('admin/booking', BookingController::class);
//  Fasilitas route
// Route::get('admin/fasilitas/{id}/delete', [FasilitasController::class, 'destroy']);
// Route::resource('admin/fasilitas', FasilitasController::class);
