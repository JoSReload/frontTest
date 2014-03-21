<?php namespace Josreload\ChenkaCrud\Seeds;

use Illuminate\Database\Seeder;
use Josreload\ChenkaCrud\Accounts\User;
use Config;
use Hash;

class UserTableSeeder extends Seeder{
    public function run()
    {
        User::truncate();

        User::create([
            'email' => Config::get('chenka-crud::setup_user.email'),
            'first_name' => Config::get('chenka-crud::setup_user.first_name'),
            'last_name' => Config::get('chenka-crud::setup_user.last_name'),
            'password' => Hash::make( Config::get('chenka-crud::setup_user.password') ),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
} 