<?php

/*
|---------------------------------------------------------------------
| Laravel Binds
|---------------------------------------------------------------------
*/
App::bind('Josreload\ChenkaCrud\Accounts\UserInterface', 'Josreload\ChenkaCrud\Accounts\UserRepository');
App::bind('Josreload\ChenkaCrud\Validations\LoginValidatorInterface', 'Josreload\ChenkaCrud\Validations\UserValidator');
