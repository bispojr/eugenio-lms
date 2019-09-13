<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_turma', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('avaliacao_id');
            $table->unsignedBigInteger('turma_id');
            $table->timestamps();

            $table->unique('avaliacao_id', 'turma_id');

            $table->foreign('avaliacao_id')->references('id')->on('avaliacao');
            $table->foreign('turma_id')->references('id')->on('turma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_turma');
    }
}
