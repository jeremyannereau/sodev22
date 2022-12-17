<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Action;
use App\Models\Passation;
use App\Models\Projet;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use function PHPUnit\Framework\isEmpty;
use Illuminate\Support\Facades\Storage;

use Barryvdh\DomPDF\PDF;

class ProjetController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except('indexProjets');
    }


    public function indexProjets()
    {
        $projets = Projet::all();
        return view('listeProjets', [
            'projets' => $projets
        ]);
    }

    public function showProjet($id)
    {

        $projet = Projet::findOrFail($id);
        $actions = Action::where('projet_id', $id)->paginate(5);;


        return view('projetResume', [
            'projet' => $projet,
            'actions' => $actions
        ]);
    }

    

    public function createProjet()
    {
        return view('nouveauProjet');
    }

    public function linkModule($projetId,$moduleId)
    {
        $projet = Projet::find($projetId);
        return $projet->modules()->attach($moduleId);

    }

    public function storeProjet(Request $request, User $user)
    {

        // if (! Gate::allows('define-access',$user)){
        //     abort(403);
        // }

        $request->validate([
            'projectName' => ['required', 'min:3', 'max:150' ,'unique:projets']
        ]);

        if ($request->logo != null) {
            $logo = Storage::disk('public')->put('logos', $request->logo);
        }else{
            $logo = '/storage/logos/none.svg';
        }


        Projet::create([
            'projectName'=> $request->projectName,
            'logoChemin' => $logo,
            'baseSerial' => $request->baseSerial,
            'serveur'=> $request->serveur,

        ]);

        $projets = Projet::all();
        return view('listeProjets',['projets'=>$projets]);

    }



}
