<?php namespace Josreload\ChenkaCrud\Sessions;


use Josreload\ChenkaCrud\Validations\LoginValidatorInterface;
use Auth;

class Creator {


    /**
     * @var ListenerSessionCreate
     */
    private $listener;
    /**
     * @var \Josreload\ChenkaCrud\Validations\UserValidator
     */
    private $validator;

    function __construct(ListenerSessionCreate $listener, LoginValidatorInterface $validator)
    {
        $this->listener = $listener;
        $this->validator = $validator;
    }

    public function create($input){

        if( $this->validator->isValidForLogin( $input )) {
            $attempt = Auth::attempt([
                'email' => $input['email'],
                'password' => $input['password']
            ]);

            if($attempt)
                return $this->listener->sessionCreationSucceeds();
        }
        return $this->listener->sessionCreationFails();
    }

} 