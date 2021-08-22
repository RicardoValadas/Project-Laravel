<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;

class ApiController extends Controller
{
    public function getFlowers()
    {
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getFlower($id)
    {
        $oneFlower = Flower::where('id', $id)
            ->get();
        return $oneFlower->toJson(JSON_PRETTY_PRINT);
    }

    public function getType($type)
    {
        $type = Flower::Where('columns', 'like', '&' . $type . '%')->get();
        return $type->toJson(JSON_PRETTY_PRINT);
    }
}
