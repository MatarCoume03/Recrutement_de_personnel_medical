<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruteursTable extends Migration
{
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
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
        Schema::dropIfExists('recruteurs');
    }
}
