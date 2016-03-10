<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        $links = \App\Link::all();
        return view('welcome', compact('links'));
    });

    Route::get('/submit', function() {
        return view('submit');
    });

    Route::post('/submit', function(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
