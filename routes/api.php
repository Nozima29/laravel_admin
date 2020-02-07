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

Route::get('posts', 'PostsController@fetchData');
Route::post('posts', 'PostsController@storeData');
Route::delete('posts/{posts}', 'PostsController@deleteData');
Route::put('posts/{posts}', 'PostsController@updateData');
Route::get('user', 'ClientsController@fetchUser');
Route::post('user', 'ClientsController@storeUser');



