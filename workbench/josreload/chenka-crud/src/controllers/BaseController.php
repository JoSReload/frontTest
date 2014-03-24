<?php namespace Josreload\ChenkaCrud\Controllers;

use Config, View;

abstract class BaseController extends \Controller{

    /**
     * List of routes that can be used without authentication
     * @var array
     */
    protected $whitelist;

    function __construct($whitelist = [])
    {
        $this->beforeFilter( 'admin' , array('except' => $whitelist));

        $this->whitelist = $whitelist;
    }
}