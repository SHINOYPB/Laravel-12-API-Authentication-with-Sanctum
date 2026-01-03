<?php

// Route::group(['namespace' => 'App\Http\Controllers\API'], function () {
//     // --------------- Register and Login ----------------//
//     Route::post('register', 'AuthenticationController@register')->name('register');
//     Route::post('login', 'AuthenticationController@login')->name('login');
    
//     // ------------------ Get Data ----------------------//
//     Route::middleware('auth:sanctum')->group(function () {
//         Route::get('get-user', 'AuthenticationController@userInfo')->name('get-user');
//         Route::post('logout', 'AuthenticationController@logOut')->name('logout');
//     });
// });



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/get-user', [AuthenticationController::class, 'userInfo']);
    Route::post('/logout', [AuthenticationController::class, 'logOut']);
});
