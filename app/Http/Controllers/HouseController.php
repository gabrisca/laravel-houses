<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        // prendo il mio database
        // $houses = House::all();
        $houses = House::paginate(10);
        // dump($houses);

        $data = [
            'houses' => $houses
        ];

        return view('houses',$data);
    }
}
