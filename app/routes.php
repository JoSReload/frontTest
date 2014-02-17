<?php

Route::get('/', function() {

    return getenv('DB_USER');

});