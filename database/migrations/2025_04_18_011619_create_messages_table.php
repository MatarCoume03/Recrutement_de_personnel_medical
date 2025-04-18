<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruteur_id');
            $table->unsignedBigInteger('candidat_id');
            $table->text('contenu');
            $table->date('date_envoi');
            $table->timestamps();

            $table->foreign('recruteur_id')
                  ->references('id')
                  ->on('recruteurs')
                  ->onDelete('cascade');
                  
            $table->foreign('candidat_id')
                  ->references('id')
                  ->on('candidats')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
