<?php

/*
|---------------------------------------------------------------------
| Laravel Filter Association
|---------------------------------------------------------------------
*/
Route::filter('admin', 'Josreload\ChenkaCrud\Filters\Admin');

/*
|---------------------------------------------------------------------
| Laravel Binds
|---------------------------------------------------------------------
*/
App::bind('Josreload\ChenkaCrud\Accounts\UserInterface', 'Josreload\ChenkaCrud\Accounts\UserRepository');
App::bind('Josreload\ChenkaCrud\Validations\LoginValidatorInterface', 'Josreload\ChenkaCrud\Validations\UserValidator');

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
});


