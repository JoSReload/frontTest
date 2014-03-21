<?php namespace Josreload\ChenkaCrud\Controllers;

use Config;

abstract class BaseController extends \Controller{

    /**
     * List of routes that can be used without authentication
     * @var array
     */
    protected $whitelist;

    function __construct()
    {
        $this->beforeFilter( 'admin' , array('except' => $this->whitelist));

        $this->whitelist = array();
    }


    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }
} 