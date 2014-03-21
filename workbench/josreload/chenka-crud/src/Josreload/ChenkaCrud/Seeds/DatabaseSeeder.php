<?php namespace Josreload\ChenkaCrud\Seeds;

use Illuminate\Database\Seeder;
use Eloquent;

class DatabaseSeeder extends Seeder{

    public function run()
    {
        Eloquent::unguard();
        $this->call('Josreload\ChenkaCrud\Seeds\UserTableSeeder');
    }
} 