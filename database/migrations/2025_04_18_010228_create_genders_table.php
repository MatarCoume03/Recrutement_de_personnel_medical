<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGendersTable extends Migration
{
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('libelle', 20);
        });

        // Données de base
        DB::table('genres')->insert([
            ['id' => 1, 'libelle' => 'Masculin'],
            ['id' => 2, 'libelle' => 'Feminin']
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
