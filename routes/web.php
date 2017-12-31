<?php

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

Route::get('/', function () {
    return view('/pages/index/index',['title'=>'建平中学','control'=>['club'=>true,'activity'=>true]]);
});

Route::get('/about',function () {
    return view('aboutus');
});

Route::get('/club/list/','ClubController@list');

Route::get('/club/{id}','ClubController@get_detail_by_id');

Route::get('/club/c/{category}','ClubController@list_by_category');

Route::post('/club/attend','ClubController@attend');

Route::post('/club/quit','ClubController@quit');

Route::get('/activity/list','ActivityController@list');

Route::get('/activity/{id}','ActivityController@get_detail_by_id');

Route::post('/activity/attend','ActivityController@attend');

Route::post('/activity/quit','ActivityController@quit');

Route::prefix('admin')->group(function () {
    Route::get('','AdminController@index');
    Route::get('club/list','AdminClubController@list');
    Route::post('club/confirm','AdminClubController@confirm');
    Route::post('club/deny','AdminClubController@deny');
    Route::post('activity/confirm','AdminActivityController@confirm');
    Route::post('activity/deny','AdminActivityController@deny');
});

Route::prefix('cadmin')->group(function () {
    Route::get('','ClubAdminController@index');
    Route::get('post/list','ClubPostController@list');
    Route::post('post/add','ClubPostController@add');
    Route::post('post/update','ClubPostController@update');
    Route::post('post/delete','ClubPostController@delete');
    Route::post('activity/list','ClubActivityController@list');
    Route::post('activity/add','ClubActivityController@add');
    Route::post('activity/delete','ClubActivityController@delete');
    Route::post('activity/update','ClubActivityController@update');
})
?>