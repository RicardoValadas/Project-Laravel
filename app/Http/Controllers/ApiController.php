<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class ApiController extends Controller
{ //get all flowers
    public function getFlowers()
    {
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
    //specific flower
    public function getFlower($id)
    {
        $oneFlower = Flower::where('id', $id)
            ->get();
        return $oneFlower->toJson(JSON_PRETTY_PRINT);
    }
    //flowers based on type
    public function getType($type)
    {
        $flowers = Flower::where('columns', $type)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    //number of flowers that i want to display
    public function getSomeFlowers($amount)
    {
        $flowers = Flower::take($amount)->get();

        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
}
