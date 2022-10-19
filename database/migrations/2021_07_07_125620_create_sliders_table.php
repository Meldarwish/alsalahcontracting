<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('langkey', 55)->nullable();
			$table->string('text_1', 300)->nullable();
			$table->string('text_2', 300)->nullable();
			$table->text('url')->nullable();
			$table->integer('sort')->nullable();
			$table->string('photo')->nullable();
			$table->string('stuts', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sliders');
	}

}
