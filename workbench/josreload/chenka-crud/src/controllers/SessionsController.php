<?php namespace Josreload\ChenkaCrud\Controllers;

use Auth, Redirect, Session, View, Input, Hash;
use Josreload\ChenkaCrud\Validations\LoginValidatorInterface;

class SessionsController extends BaseController {

    protected $validator;

    function __construct(LoginValidatorInterface $validator)
    {
        $this->whitelist = array(
            'create',
            'store',
            'destroy'
        );
        parent::__construct();
        $this->validator = $validator;
    }


    /**
	 * Show the form for Login
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Auth::check())
            return Redirect::action('Josreload\ChenkaCrud\Controllers\DashController@dashboard');
        return View::make('chenka-crud::sessions.login');
	}

	/**
     * Login processing
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        if( $this->validator->isValidForLogin( $input )) {
            $attempt = Auth::attempt([
                'email' => $input['email'],
                'password' => $input['password']
            ]);

            if($attempt)
                return Redirect::action('Josreload\ChenkaCrud\Controllers\DashController@dashboard');
            return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionsController@create')->withInput();
        }
        return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionsController@create')->withInput();
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

        return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionsController@create');
	}

}