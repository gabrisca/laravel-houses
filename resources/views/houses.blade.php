@extends('layouts.main')

@section('content')

    <section class="container mt-3 mb-3">
        <h1>Houses</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">codice</th>
                    <th scope="col">indirizzo</th>
                    <th scope="col">cap</th>
                    <th scope="col">città</th>
                    <th scope="col">stato</th>
                    <th scope="col">metratura</th>
                    <th scope="col">stanze</th>
                    <th scope="col">tipologia</th>
                    <th scope="col">box auto</th>
                    <th scope="col">classe energetica</th>
                    <th scope="col">prezzo</th>
                </tr>
            </thead>
            <tbody>
                {{-- $new_house = new House();
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
            $new_house->save(); --}}

                @foreach ($houses as $house)
                    <tr>
                        <th scope="row">{{ $house['id'] }}</th>
                        <td>{{ $house['reference'] }}</td>
                        <td>{{ $house['address'] }}</td>
                        <td>{{ $house['postal_code'] }}</td>
                        <td>{{ $house['city'] }}</td>
                        <td>{{ $house['state'] }}</td>
                        <td>{{ $house['square_meters'] }}</td>
                        <td>{{ $house['rooms'] }}</td>
                        <td>{{ $house['type'] }}</td>
                        <td>{{ $house['energy_rating'] }}</td>
                        <td>{{ $house['box'] }}</td>
                        <td>{{ $house['price'] }}$</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="container mb-5">{{ $houses->links() }}

        </section>
    </section>


@endsection
