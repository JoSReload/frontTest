<?php namespace Josreload\ChenkaCrud\Controllers;

use Auth, Redirect, Session;

class SessionsController extends BaseController {

    function __construct()
    {
        $this->whitelist = array(
            'create',
            'store',
            'destroy'
        );
        parent::__construct();
    }


    /**
	 * Show the form for Login
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Auth::check())
            return Redirect::action('Josreload\ChenkaCrud\Controllers\DashController@index');
        return 'login';
	}

	/**
     * Login processing
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
     * Log the user out
	 *
	 * @return Response
	 */
	public function destroy()
	{
        Auth::logout();
        Session::flush();

        return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionController@create');
	}

}