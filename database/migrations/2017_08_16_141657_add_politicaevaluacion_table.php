<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPoliticaevaluacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicaevaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nompolitica','255');
            $table->integer('estado');
            $table->integer('sede_id')->unsigned();
            $table->timestamps();
            $table->foreign('sede_id')->references('id')->on('sedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('politicaevaluacion');
    }
}
