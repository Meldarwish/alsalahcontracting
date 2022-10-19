<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('langkey', 55)->nullable();
			$table->text('url')->nullable();
			$table->string('page_key', 50);
			$table->string('title', 500)->nullable();
			$table->text('content')->nullable();
			$table->integer('stuts')->nullable();
			$table->string('photo')->nullable();
			$table->text('meat_description')->nullable();
			$table->text('meat_keywords')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}
