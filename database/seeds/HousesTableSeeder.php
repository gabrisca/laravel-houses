<?php

use App\House;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\New_;
use Faker\Generator as Faker; // usa il Faker

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) // aggiungi il Faker
    {

        // $table->id(); // valore default
        // // inserisco le colonne della mia tabella
        // $table->string('reference', 12); //inserisco una stringa per codice di riferimento
        // $table->string('address', 100); //inserisco una stringa per indirizzo
        // $table->string('postal_code', 10); //inserisco una stringa per codice postale
        // $table->string('city', 50);
        // $table->string('state', 50);
        // $table->smallInteger('square_meters')->unsigned();
        // $table->tinyInteger('rooms')->unsigned();
        // $table->string('type', 50);
        // $table->text('description')->nullable(); // nullable è un valore non obbligatorio NULL
        // $table->float('price', 10,2); // numero totale delle cifre , numero decimali
            // qui c'è energy_rating
            // qui c'è box
        // $table->boolean('is_available')->default(1); // boolean (sì o no)
        //  // fine inserimento delle colonne della mia tabella
        // $table->timestamps(); // valore default

        for ($i=0; $i < 100; $i++) {
            # code...
            $new_house = new House();
            $new_house->reference = $faker->bothify('??-########');
            $new_house->address = $faker->streetAddress();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(30,1000);
            $new_house->rooms = $faker->numberBetween(1,20);
            $new_house->type = $this->typeRand();
            $new_house->price = $faker->randomFloat(2,50000,1000000);
            $new_house->energy_rating= $faker->numberBetween(0,5);
            $new_house->box= $faker->numberBetween(0,10);
            $new_house->save();
        }
    }

    // funzione che genera un valore causale tra quelli inseriti nell'array
    private function typeRand(){
        $arr =  ['monolocale', 'bilocale', 'trilocale', 'quadrilocale', 'villa'];
        shuffle($arr);
        return $arr[0];
    }
}
