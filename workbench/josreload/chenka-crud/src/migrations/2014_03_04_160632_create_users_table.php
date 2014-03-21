<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if( !Schema::hasTable('users') ) {
            Schema::create('users', function(Blueprint $table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id');

                $table->string('email', 255)->unique();
                $table->string('password', 255);
                $table->string('first_name', 255);
                $table->string('last_name', 255);
                $table->timestamps();
            });
        }
    }

	/**Foreign
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			Schema::drop('users');
		});
	}

}