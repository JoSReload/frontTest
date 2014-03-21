<?php namespace Josreload\ChenkaCrud\Validations;

class UserValidator extends ValidatorBase {


    protected $insertRules;
    protected $updateRules;

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
    }

    function getRulesForCreation()
    {
        return $this->insertRules;
    }

    function getRulesForUpdate() {
        return $this->updateRules;
    }
}