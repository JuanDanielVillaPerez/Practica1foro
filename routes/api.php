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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts','postsController@Allposts');
Route::get('/comentarios','comentarioController@Allcomentarios');
Route::get('/posts/{id}','postsController@Postid')->where(['campeon_id','[0-9]+']);
Route::post('/posts','postsController@Postpost' );
Route::put('/posts/{id}','postsController@Putpost');
Route::delete('/posts/{id}','postsController@Deletepost');
