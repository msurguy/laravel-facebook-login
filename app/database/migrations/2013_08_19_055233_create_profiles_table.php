<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	public function up()
	{
	    Schema::create('profiles', function($table)
	    {
	        $table->increments('id');
	        $table->integer('user_id')->unsigned();
	        $table->string('username');
	        $table->biginteger('uid')->unsigned();
	        $table->string('access_token');
	        $table->string('access_token_secret');
	        $table->timestamps();
	    });
	}

	public function down()
	{
	    Schema::drop('profiles');
	}

}