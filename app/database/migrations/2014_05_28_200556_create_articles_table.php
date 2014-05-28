<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
	        $table->increments('id');
	        $table->string('name');
	        $table->text('description');
	        $table->float('price');
	        $table->integer('total_in_shelf');
	        $table->integer('total_in_vault');
	        $table->integer('store_id');
	        $table->timestamp('updated_at');
	        $table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			//
		});
	}

}
