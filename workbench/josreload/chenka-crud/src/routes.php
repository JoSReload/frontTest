<?php

/*
|---------------------------------------------------------------------
| Routes Admin
|---------------------------------------------------------------------
*/

Route::group(['prefix' => Config::get('chenka-crud::app.access_url')], function() {

    Route::get('', 'Josreload\ChenkaCrud\Controllers\DashController@dashboard');

    Route::get('login', 'Josreload\ChenkaCrud\Controllers\SessionsController@create');
    Route::post('login', 'Josreload\ChenkaCrud\Controllers\SessionsController@store');
    Route::get('logout', 'Josreload\ChenkaCrud\Controllers\SessionsController@destroy');
    Route::resource('sessions', 'Josreload\ChenkaCrud\Controllers\SessionsController',
        ['only' => ['create', 'store', 'destroy']]);

    Route::resource('posts', 'Josreload\ChenkaCrud\Controllers\PostsController');
    Route::resource('users', 'Josreload\ChenkaCrud\Controllers\UsersController');
    Route::group(['prefix' => 'settings'], function(){
        Route::get('', function(){
            return Redirect::to(Config::get('chenka-crud::app.access_url') . '/settings/profile');
        });
        Route::get('profile', function(){
            return 'profile';
        });
    });


});


