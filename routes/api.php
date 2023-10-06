<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Route::get('/home', 'HomeController@index');
    
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

Route::controller(AuthController::class)->group(function () {
    // Route::post('/auth/login', 'login')->name('login');
    // Route::post('/auth/register', 'register')->name('register');
    // Route::post('/auth/logout', 'logout')->name('logout');
    
    Route::post('/auth/login', 'login')->name('login');
    Route::post('/auth/register', 'register')->name('register');
});
Route::post('/auth/user', [UserController::class, 'user']);
