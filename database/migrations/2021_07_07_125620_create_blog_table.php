<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('langkey')->nullable();
			$table->integer('section_id')->nullable();
			$table->string('title', 400)->nullable()->index('title');
			$table->text('url')->nullable();
			$table->string('photo')->nullable();
			$table->text('content')->nullable();
			$table->string('short_desc', 500)->nullable();
			$table->string('aouther')->nullable();
			$table->integer('stuts')->nullable();
			$table->text('meat_description')->nullable();
			$table->text('meat_keywords');
			$table->date('publish_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog');
	}

}
