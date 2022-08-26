<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/create', function(Request $request) {
    $name = $request->query('name');
    dd($name);
    return true;
});

Route::post('/register', [RegisterController::class, 'createV2']);

Route::post('/login', [LoginController::class, 'login']);

Route::post('/user/update', [UserController::class, 'a']);

Route::post('user/delete', [UserControllerTest2::class, 'b']);

Route::post('/post/create', [PostController::class, 'store'])->middleware('auth:api');