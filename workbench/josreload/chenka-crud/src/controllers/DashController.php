<?php namespace Josreload\ChenkaCrud\Controllers;

use View;

class DashController extends BaseController {


    function __construct()
    {
        parent::__construct();
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function dashboard()
	{
        return View::make('chenka-crud::dashboard.dashboard');
	}

}
