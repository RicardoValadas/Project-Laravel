<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function all_movies()
    {
        return "<h1 style='color:green'><u> List of all movies <u><h1> ";
    }

    public function one_movie($id)
    {
        return "<h1  style='color:green'>only one movie " . $id . '<h1>';
    }
}
