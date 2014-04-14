<?php
//Route::get('/', function() {
//
////    return getenv('DB_USER');
//    return View::make('hello');
//});
Route::get('hola', function(){
    return View::make('hello');
});