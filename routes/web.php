<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
// 	echo "s";
//     return view('dashboard');
// })->name('dashboard');
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/room', 'App\Http\Controllers\PagesController@room');
Route::get('/location', 'App\Http\Controllers\PagesController@location');
Route::get('/restaurant', 'App\Http\Controllers\PagesController@restaurant');
Route::get('/gallery', 'App\Http\Controllers\PagesController@gallery');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/single-room', 'App\Http\Controllers\PagesController@single_room');
Route::get('/booking', 'App\Http\Controllers\PagesController@booking');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {

    Route::resource('dashboard', 'App\Http\Controllers\HomeController');
    Route::resource('category', 'App\Http\Controllers\RoomCategoryController');
    Route::resource('availability', 'App\Http\Controllers\RoomAvailabilityController');
    Route::post('date-select', 'App\Http\Controllers\RoomAvailabilityController@date')->name('date-select');

});

