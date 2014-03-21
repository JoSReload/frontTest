<?php namespace Josreload\ChenkaCrud\Accounts;

use Josreload\ChenkaCrud\Core\EloquentBaseRepository;

class UserRepository extends EloquentBaseRepository implements UserInterface {

    function __construct(User $user)
    {
        parent::__construct($user);
    }
}