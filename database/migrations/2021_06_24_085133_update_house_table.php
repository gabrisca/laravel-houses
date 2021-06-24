<?php

// QUESTA è UNA PAGINA DI MIGRAZIONE CREATA TRAMITE IL COMANDO UPDATE

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            //crea una nuova colonna alla tabella dopo price
            $table->string('energy_rating', 5)->after('price');
            $table->boolean('box', 5)->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            // qui scrivo il comando opposto inserito in up
            $table->dropColumn('energy_rating');
            $table->dropColumn('box');
        });
    }
}
