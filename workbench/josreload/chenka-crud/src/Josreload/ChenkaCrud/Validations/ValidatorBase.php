<?php namespace Josreload\ChenkaCrud\Validations;

use Validator;

abstract class ValidatorBase {

    protected $errors;

    public function isValidForCreation($input) {
        $validator = Validator::make($input, $this->getRulesForCreation());
        return $this->check($validator);
    }

    public function isValidForUpdate($input) {
        $validator = Validator::make($input, $this->getRulesForUpdate());
        return $this->check($validator);
    }

    public function errors() {
        return $this->errors;
    }

    private function check($validator)
    {
        if($validator->fails()) {
            $this->errors = $validator->messages();
            return false;
        }
        return true;
    }

    abstract function getRulesForCreation();

    abstract function getRulesForUpdate();
}