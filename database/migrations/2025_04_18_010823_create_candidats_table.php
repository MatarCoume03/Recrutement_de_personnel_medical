<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->timestamps();

            $table->foreign('id')
                  ->references('id')
                  ->on('utilisateurs')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
