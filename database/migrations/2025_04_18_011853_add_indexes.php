<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexes extends Migration
{
    public function up()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->index('email');
        });
        
        Schema::table('offre_emplois', function (Blueprint $table) {
            $table->index('statut');
            $table->index('date_publication');
        });
        
        Schema::table('candidatures', function (Blueprint $table) {
            $table->index('statut');
            $table->index('date_depot');
        });
    }

    public function down()
    {
        // Suppression des index
    }
}
