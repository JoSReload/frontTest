<?php namespace Josreload\ChenkaCrud\Controllers;

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
        return 'DashBoard';
	}

}
