<?php

namespace App\Http\Controllers;

use App\Models\Projet;

class HomeController extends Controller
{
    public function index()
    {
        $projets = Projet::all();

        return view('homepage', compact('projets'));
    }

    
}
