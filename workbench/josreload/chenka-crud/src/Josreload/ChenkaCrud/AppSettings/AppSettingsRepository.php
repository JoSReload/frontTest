<?php namespace Josreload\ChenkaCrud\AppSettings;

use Config;

class AppSettingsRepository {

    public function getAll() {
        return Config::get('chenka-crud::app');
    }
} 