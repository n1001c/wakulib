<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['api']], function() {
    Route::resource('users', 'App\Http\Controllers\UsersController');
});

Route::post('login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::get('refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh']);
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::post('logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::get('me', [App\Http\Controllers\Api\AuthController::class, 'me']);
    Route::resource('books', 'App\Http\Controllers\BooksController');
});
