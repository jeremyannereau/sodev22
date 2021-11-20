<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projets = Projet::all();

        return view('dashboard', ['projets'=>$projets]);

    }





    
}
