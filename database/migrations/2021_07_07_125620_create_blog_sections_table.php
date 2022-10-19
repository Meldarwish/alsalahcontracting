<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_sections', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('langkey')->nullable();
			$table->string('title')->nullable()->index('title');
			$table->text('url')->nullable();
			$table->string('stuts', 20)->nullable();
			$table->string('photo')->nullable();
			$table->text('content')->nullable();
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
		Schema::drop('blog_sections');
	}

}
