<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu_locations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('langkey', 155)->nullable();
			$table->string('code')->nullable();
			$table->string('title')->nullable();
			$table->integer('stuts')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menu_locations');
	}

}
