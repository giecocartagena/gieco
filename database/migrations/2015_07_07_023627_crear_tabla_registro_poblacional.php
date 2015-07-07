<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRegistroPoblacional extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registropoblacional', function(Blueprint $table)
		{
            $table->increments('id');

            // Datos sociodemográficos
            $table->string('cedula',16)->unique();
            $table->string('iniciales',30);
            $table->string('sexo',1);
            $table->date('fechanacimiento');
            $table->integer('edad');
            $table->string('residenciahabitual',90)->nullable();
            $table->string('lugarnacimiento',90)->nullable();
            $table->string('regimenseguridadsocial',90)->nullable();
            $table->integer('eps')->unsigned();
            $table->integer('estrato')->unsigned();

            // Datos de tumor
            $table->date('iniciosintomas')->nullable();
            $table->date('fechadiagnostico')->nullable();
            $table->string('metododiagnostico',90)->nullable();
            $table->string('localizacionprimaria',90)->nullable();
            $table->string('morfologia',90)->nullable();
            $table->integer('estadio')->unsigned();

            // Datos de las fuentes de información
            $table->string('lugardiganostico',90)->nullable();
            $table->string('numerobiopsia',20)->nullable();
            $table->string('lugartratamiento',90)->nullable();
            $table->integer('datostratamiento')->unsigned();

            //Datos del seguimiento
            $table->string('certificadodefuncion',90)->nullable();


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
		Schema::drop('registropoblacional');
	}

}
