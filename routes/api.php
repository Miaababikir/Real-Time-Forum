<?php

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

Route::apiResource('questions', 'QuestionController');
Route::apiResource('categories', 'CategoryController');
Route::apiResource('questions.replies', 'ReplyController');
Route::apiResource('replies.likes', 'LikeController')->only(['index', 'store']);
Route::delete('replies/{reply}/likes', 'LikeController@destroy');


Route::group(['middleware' => 'api','prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
