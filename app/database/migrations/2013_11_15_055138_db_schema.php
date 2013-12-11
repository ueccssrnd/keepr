<?php

use Illuminate\Database\Migrations\Migration;

class DbSchema extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('users',function($table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('student_number')->unique;
			$table->string('first_name');
			$table->string('last_name');
			$table->string('middle_name');
			$table->integer('status');
			$table->string('division');
			$table->timestamps();
			$table->index('id');
		});

		Schema::create('time',function($table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->dateTime('login_date');
			$table->integer('status');
			$table->foreign('user_id')->references('id')->on('users');
			$table->index('id');
		});

		Schema::create('schedules', function($table){
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('subject');
			$table->string('time');
			$table->string('day');
			$table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
			$table->index('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedules');
		Schema::drop('time');
		Schema::drop('users');
	}

}
