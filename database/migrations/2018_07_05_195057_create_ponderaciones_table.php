<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePonderacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponderaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ponderacion');
            $table->integer('etapa_id')->unsigned();
            $table->foreign('etapa_id')
                  ->references('id')
                  ->on('etapas')
                  ->onDelete('cascade');
            $table->integer('pregunta_id')->unsigned();
            $table->foreign('pregunta_id')
                  ->references('id')
                  ->on('preguntas')
                  ->onDelete('cascade');  
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
        Schema::dropIfExists('ponderaciones');
    }
}
