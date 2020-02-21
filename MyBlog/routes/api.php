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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('sign-up', 'Auth\AuthController@register');

Route::post('login', 'Auth\AuthController@login');

Route::post('/post/create', 'BlogPostController@store');
Route::get('/post/edit/{id}', 'BlogPostController@edit');
Route::post('/post/update/{id}', 'BlogPostController@update');
Route::delete('/post/delete/{id}', 'BlogPostController@delete');
Route::get('/posts', 'BlogPostController@index');

//Route::get('login', 'BlogController@index');

