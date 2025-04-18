<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruteur_id');
            $table->string('titre', 100);
            $table->text('description');
            $table->string('statut', 50);
            $table->date('date_publication');
            $table->timestamps();

            $table->foreign('recruteur_id')
                  ->references('id')
                  ->on('recruteurs')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('offre_emplois');
    }
}
