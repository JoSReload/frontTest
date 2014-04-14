<?php namespace Josreload\ChenkaCrud\Menu;

use Config;

class MenuTopRepository {

    public function getAll() {
        return Config::get('chenka-crud::menu.menu_dash');
    }

} 