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
    return view('index',['title'=>'建平中学','control'=>['club'=>true,'activity'=>true]]);
});

Route::get('/about',function () {
    return view('aboutus');
});

Route::get('/club/list/','ClubControl@list');

Route::get('/club/{id}','ClubController@get_detail_by_id');

Route::get('/club/c/{category}','ClubController@list_by_category');

Route::post('/club/attend','ClubController@attend');

Route::post('/club/quit','ClubController@quit');

Route::prefix('admin')->group(function () {
    Route::get('club/list','AdminClubController@list');
    Route::post('club/confirm','AdminClubController@confirm');
})
?>