<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id(); // valore default
            // inserisco le colonne della mia tabella
            $table->string('reference', 12); //inserisco una stringa per codice di riferimento
            $table->string('address', 100); //inserisco una stringa per indirizzo
            $table->string('postal_code', 10); //inserisco una stringa per codice postale
            $table->string('city', 50);
            $table->string('state', 50);
            $table->smallInteger('square_meters')->unsigned();
            $table->tinyInteger('rooms')->unsigned();
            $table->string('type', 50);
            $table->text('description')->nullable(); // nullable è un valore non obbligatorio NULL
            $table->float('price', 10,2); // numero totale delle cifre , numero decimali
            $table->boolean('is_available')->default(1); // boolean (sì o no)
             // fine inserimento delle colonne della mia tabella
            $table->timestamps(); // valore default
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    // down serve per poter tornare indietro e modificare la tabella
    {
        Schema::dropIfExists('houses');
    }
}
