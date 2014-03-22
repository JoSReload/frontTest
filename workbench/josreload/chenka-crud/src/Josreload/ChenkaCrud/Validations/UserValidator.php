<?php namespace Josreload\ChenkaCrud\Validations;

use Validator;

class UserValidator extends ValidatorBase implements LoginValidatorInterface{


    protected $insertRules;
    protected $updateRules;
    protected $loginRules;

    function __construct()
    {
        $this->insertRules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        );
        $this->updateRules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        );
        $this->loginRules = array(
            'email' =>  'required|email',
            'password' => 'required'
        );
    }

    protected function getRulesForCreation()
    {
        return $this->insertRules;
    }

    protected function getRulesForUpdate() {
        return $this->updateRules;
    }

    public function isValidForLogin($input)
    {
        $validator = Validator::make($input, $this->getRulesForLogin());
        return $this->check($validator);
    }

    protected function getRulesForLogin()
    {
        return $this->loginRules;
    }
}