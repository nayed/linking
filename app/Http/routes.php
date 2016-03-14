<?php



Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'LinkController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/submit', 'LinkController@show');

    Route::post('/submit', 'LinkController@create');
});
