<?php namespace Josreload\ChenkaCrud\Filters;

use Auth, Redirect;

class Admin {

    public function filter() {
        if( Auth::guest() )
            return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionsController@create');
    }

}