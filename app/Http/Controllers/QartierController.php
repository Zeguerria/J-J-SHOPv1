<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Qartier;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQartierRequest;
use App\Http\Requests\UpdateQartierRequest;

class QartierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['QartierTotal']= Qartier::where('supprimer','=',0)->orderBy('code')->count();
        $data['QartierTotalC']= Qartier::where('supprimer','=',1)->orderBy('code')->count();
        $data['qartiers']= Qartier::where('supprimer','=',0)->orderBy('nom')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('parametre_id','=',6)->orderBy('code')->get();
        return view('admins.parametrages.quartiers.quartier')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['QartierTotal']= Qartier::where('supprimer','=',0)->orderBy('code')->count();
        $data['QartierTotalC']= Qartier::where('supprimer','=',1)->orderBy('code')->count();
        $data['qartiers']= Qartier::where('supprimer','=',1)->orderBy('nom')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('parametre_id','=',6)->orderBy('code')->get();
        return view('admins.parametrages.quartiers.corbeillequartier')->with($data);

    }
    public function store(Request $request)
    {
        //
        $nom = $request->nom;
        $parametre_id = $request->parametre_id;
        try{
            Qartier::create([
                'nom'=>$nom,
                'parametre_id' => $parametre_id,
               
            ]);
            toast('Quartier ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout du Quartier impossible','danger');

        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $qartiers = Qartier::findOrFail($request->id);
        $nom= isset($request->nom)?$request->nom:$qartiers->nom;
        $parametre_id= isset($request->parametre_id)?$request->parametre_id:$qartiers->parametre_id;
        try{
            $qartiers->update([
                'nom'=>$nom,
                'parametre_id'=>$parametre_id,
               
            ]);
            toast('Modification du Quartier éffectué avec success','warning');

        }
        catch(Exception $e){
            toast('Modification  du Quartier impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        $qartiers = Qartier::findOrFail($request->id);
        try{
            $qartiers->update([
                'supprimer' =>1
            ]);
            toast('Quartier supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Quartier impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $qartiers = Qartier::findOrFail($request->id);
        try{
            $qartiers->delete();
            toast('Quartier supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Quartier impossible','danger');
        }
        return back();
    }
    public function corbeille_all(Request $request){
        $qartier = Qartier::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($qartier as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Quartiers supprimé avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Quartiers impossible','danger');
        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $qartier = Qartier::findOrFail($request->id);
        try{
            $qartier->update([
                'supprimer' =>0
            ]);
            toast('Quartier restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration du Quartier impossible','danger');
        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $qartier = Qartier::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($qartier as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Quartiers restoré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration des Quartiers impossible','danger');
        }
        return back();
    }
    public function destroyTous(Request $request){
        $qartier = Qartier::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($qartier as $value){
                $value->delete();
            }
            toast('Supression des Quartiers éffectué avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Quartiers impossible','danger');
        }
        return back();
    }
}
