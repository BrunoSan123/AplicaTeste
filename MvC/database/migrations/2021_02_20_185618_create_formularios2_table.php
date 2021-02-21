<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularios2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios2', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('email',196)->unique();
            $table->string('telefone',20);
            $table->string('cargo_desejado',100);
            $table->string('escolaridade',50);
            $table->string('arquivo',100);
            $table->string('ip',100);
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
        Schema::dropIfExists('formularios2');
    }
}
