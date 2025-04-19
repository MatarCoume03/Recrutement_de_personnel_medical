<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id');
            $table->unsignedBigInteger('offre_emploi_id');
            $table->enum('statut', ['accepte','rejete','En cours de traitement']);
            $table->date('date_depot');
            $table->timestamps();

            $table->foreign('candidat_id')
                  ->references('id')
                  ->on('candidats')
                  ->onDelete('cascade');
                  
            $table->foreign('offre_emploi_id')
                  ->references('id')
                  ->on('offre_emplois')
                  ->onDelete('cascade');
                  
            $table->unique(['candidat_id', 'offre_emploi_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
