<?php
use App\Http\Controllers\WebController;
use App\Http\Controllers\ApartmentController;
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

Route::get('/',[ApartmentController::class,"all"] );
Route::get('/about',[WebController::class,"aboutus"] );

