<?php namespace Josreload\ChenkaCrud\Controllers;

use Auth, Redirect, Session, View, Input, Hash;
use Josreload\ChenkaCrud\Sessions\Creator;
use Josreload\ChenkaCrud\Sessions\ListenerSessionCreate;
use Josreload\ChenkaCrud\Validations\LoginValidatorInterface;

class SessionsController extends BaseController implements ListenerSessionCreate{

    protected $validator;

    function __construct(LoginValidatorInterface $validator)
    {
        $whitelist = array(
            'create',
            'store',
            'destroy'
        );
        parent::__construct($whitelist);
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
        $creator = new Creator($this, $this->validator);

        return $creator->create(Input::all());
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

    public function sessionCreationSucceeds()
    {
        return Redirect::action('Josreload\ChenkaCrud\Controllers\DashController@dashboard');
    }

    public function sessionCreationFails()
    {
        return Redirect::action('Josreload\ChenkaCrud\Controllers\SessionsController@create')->withInput();
    }
}