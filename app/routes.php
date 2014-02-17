<?php

Route::get('/', function() {

    return getenv('DB_NAME');

});