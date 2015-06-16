<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		//
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title' , 50);
			$table->string('description' , 140);
			$table->string('url');
			$table->string('image_file' , 60);
			$table->string('tags' , 100);
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->timestamps();
		});

	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('resources');
	}

}
