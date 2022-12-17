<?php

use App\Models\Action;
use App\Models\Projet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ActionsController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PassationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

//Console de gestion principale SODEV22
Route::get('/console',function(){
    $projets = Projet::all();
    return view('console.consoleGestion',['projets'=>$projets]);
})->name('consoleGestion');

//Lien vers OneDrive
Route::get('/onedrive',function(){
    return view('onedrive');
})->name('onedrive');

//Lien vers Aide au Codage
Route::get('/aideCodage',function(){
    return view('aideCodage.home');
})->name('aideCodage');



//Gestion des projets
Route::post('/projets/enregistreProjet',[ProjetController::class,'storeProjet'])
                ->name('saveProjet');
Route::post('/projets/enregistrePassationProjet/{id}',
        [PassationController::class,'storePassation'])->where('id', '[0-9]+')->name('savePassation');

Route::get('/projets/all',[ProjetController::class, 'indexProjets'])->name('listProjets');
Route::get('/projets/search',function(){
    $projets = Projet::all();
    return view('rechercheProjet',['projets'=>$projets]);
})->name('searchProjet');

Route::get('/projets/{id}',[ProjetController::class, 'showProjet'])->where('id', '[0-9]+')->name('showProjet');

Route::get('/projets/deploy',function(){
    return view('nouveauProjet');
})->name('deployProjet');




//Gestion des actions
Route::get('/actions/all',[ActionsController::class,'indexActions'])->name('listActions');
Route::get('/actions/search',function(){
    $actions = Action::all();
    return view('rechercheAction',['actions'=>$actions]);
})->name('searchAction');
Route::get('/actions/{projetId}',[ActionsController::class,'actionsByProject'])->where('projectId', '[0-9]+')->name('actionsParProjet');
Route::post('/action/delete/{action}',[ActionsController::class,'delete'],function (Action $action){
})->name('deleteAction');
// Route::get('actions', function(){
//     $products = Action::sortable()->paginate(5);
//     return view('',compact('actions'));
//  });

//



Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::get('/dashboard', function () {
    $projets = Projet::all()->count();
    $actions = Action::all()->count();
    $actionsenAttente = Action::all()->count();
    return view('dashboard', ['projets'=>$projets, 'actions'=>$actions, 'actionsenAttente'=>$actionsenAttente]);
})->name('dashboard');




// Route::middleware(['auth'])->group(function(){

    Route::get('/projets/new', function(){
                    return view('nouveauProjet');
                })->name('createProjet');
// });

Route::get('/sendMail',[ActionsController::class, 'sendActionsAll']);

//AJAX
Route::post('actions/{idModule}/{idProjet}', function ($idModule,$idProjet) {
    if ($idModule == "all"){
        $actions = Action::where('projet_id',$idProjet)
                        ->paginate(5);
    }else{
        $actions = Action::where('projet_id',$idProjet)
                        ->where('module_id',$idModule)
                        ->paginate(5);

    }

    $projet=Projet::where('id', $idProjet)->first();

    return view('actions.listeActionTable', ['actions'=>$actions, 'projet'=>$projet]);
})->name('ajax.request.actionsbyModule');


require __DIR__.'/auth.php';
