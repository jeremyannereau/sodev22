<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projet;
use App\Models\Passation;
use Illuminate\Http\Request;


class PassationController extends Controller
{

    public function storePassation(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);

        $passation = Passation::where('projet_id',$id)->first();

        if (!$passation) {

            Passation::create([
                'projet_id' => $projet->id,
                'generalites'=> $request->generalites,
                'client'=> $request->client,
                'diabolo'=> $request->diabolo,
                'mikado'=> $request->mikado,
                'cogito'=> $request->cogito,
                'lasido'=> $request->lasido,
                'jeudemo'=> $request->jeudemo,
            ]);
        } else {
            $passation->update([
                'generalites'=> $request->generalites,
                'client'=> $request->client,
                'diabolo'=> $request->diabolo,
                'mikado'=> $request->mikado,
                'cogito'=> $request->cogito,
                'lasido'=> $request->lasido,
                'jeudemo'=> $request->jeudemo,
            ]);
        }


    }


    // public function index(Request $request) {


    //     $pdf = PDF::loadView('customers.index-pdf', compact('data'));
    //     return $pdf->download('customer-list.pdf');



    // return view('customers.index', compact('data'));

    // }
}
