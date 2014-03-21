<?php namespace Josreload\ChenkaCrud\Controllers;

use Josreload\ChenkaCrud\Accounts\UserInterface;
use Josreload\ChenkaCrud\Validations\UserValidator;

class UsersController extends BaseController {


    /**
     * @var \Josreload\ChenkaCrud\Accounts\UserInterface
     */
    protected $user;
    /**
     * @var \Josreload\ChenkaCrud\Validations\UserValidator
     */
    protected $validator;

    function __construct(UserInterface $user, UserValidator $validator)
    {
        parent::__construct();
        $this->user = $user;
        $this->validator = $validator;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return $this->user->getAll();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->user->getById($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}