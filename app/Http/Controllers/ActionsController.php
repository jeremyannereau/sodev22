<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Models\Action;
use App\Models\Projet;
use Illuminate\Http\Request;
use App\Events\ActionCreatedEvent;
use Illuminate\Support\Facades\Mail;


class ActionsController extends Controller
{

    public function indexActions()
    {
        $actions = Action::all();
        return view('actions.listeActions', [
            'actions' => $actions
        ]);
    }



    public function sendActionsAll()
    {
        Mail::to('test@mail.test')->send(new testMail());
        return view('dashboard');
    }

    public function storeAction(Request $request){

        $action = Action::create([
            'title'=> ''
        ]);

        event(new ActionCreatedEvent($action));

    }


    public function actionsByProject($projetId)
    {
        $actions=Action::where('projet_id', $projetId)->paginate(5);
        $projet=Projet::where('id', $projetId)->first();

        return view('actions.listeActionsProjet', [
            'actions' => $actions,
            'projet' => $projet
        ]);

    }

    public function delete(Action $action){

        $projetId=$action->projet_id;

        $action->delete();

        return $this->actionsByProject($projetId);
    }

}
