<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBarrios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barrios', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre',90);
            $table->string('localidad',90)->nullable();
            $table->string('estrato',1)->nullable();
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
		Schema::drop('barrios');
	}

}
