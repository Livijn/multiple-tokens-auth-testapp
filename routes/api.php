<?php

use App\User;
use Illuminate\Http\Request;

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

Route::get('/login', function (Request $request) {
    $user = User::findOrFail($request->id);

    return ['success' => true, 'token' => $user->generateApiToken()];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return ['success' => true, 'user' => $request->user()];
});

Route::middleware('auth:api')->get('/logout', function (Request $request) {
    auth()->logout();

    return ['success' => true];
});

Route::middleware('auth:api')->get('/purge', function (Request $request) {
    auth()->user()->purgeApiTokens();

    return ['success' => true];
});
