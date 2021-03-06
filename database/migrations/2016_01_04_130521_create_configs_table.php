<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('type')->nullable();
            $table->string('key');
            $table->string('value')->nullable();
            $table->string('title');
            $table->string('input');
            $table->string('description');
            $table->string('class');
            $table->string('weight')->default(1);
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
		Schema::drop('configs');
	}

}
