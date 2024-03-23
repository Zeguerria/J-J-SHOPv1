<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tarif;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTarifRequest;
use App\Http\Requests\UpdateTarifRequest;

class TarifController extends Controller
{
    public function index()
    {
        //
        $data['TarifTotal']= Tarif::where('supprimer','=',0)->orderBy('parametre_id')->count();
        $data['TarifTotalC']= Tarif::where('supprimer','=',1)->orderBy('parametre_id')->count();
        $data['tarifs']= Tarif::where('supprimer','=',0)->orderBy('parametre_id')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('parametre_id','=',6)->orderBy('code')->get();
        return view('admins.parametrages.tarifs.tarif')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['TarifTotal']= Tarif::where('supprimer','=',0)->orderBy('parametre_id')->count();
        $data['TarifTotalC']= Tarif::where('supprimer','=',1)->orderBy('parametre_id')->count();
        $data['tarifs']= Tarif::where('supprimer','=',1)->orderBy('parametre_id')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('parametre_id','=',6)->orderBy('code')->get();
        return view('admins.parametrages.tarifs.corbeilletarif')->with($data);

    }
    public function store(Request $request)
    {
        //
        $prix = $request->prix;
        $parametre_id = $request->parametre_id;
        try{
            Tarif::create([
                'prix'=>$prix,
                'parametre_id' => $parametre_id,
               
            ]);
            toast('Tarif ajouté avec success','success');

        }
        catch(Exception $e){
            toast('ajout du Tarif impossible','danger');

        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $tarif = Tarif::findOrFail($request->id);
        $prix= isset($request->prix)?$request->prix:$tarif->prix;
        $parametre_id= isset($request->parametre_id)?$request->parametre_id:$tarif->parametre_id;
        try{
            $tarif->update([
                'prix'=>$prix,
                'parametre_id'=>$parametre_id,
               
            ]);
            toast('Modification du Tarif éffectué avec success','warning');

        }
        catch(Exception $e){
            toast('Modification  du Tarif impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        $tarifs = Tarif::findOrFail($request->id);
        try{
            $tarifs->update([
                'supprimer' =>1
            ]);
            toast('Tarif supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Tarif impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $tarifs = Tarif::findOrFail($request->id);
        try{
            $tarifs->delete();
            toast('Tarif supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Tarif impossible','danger');
        }
        return back();
    }
    public function corbeille_all(Request $request){
        $tarif = Tarif::where('supprimer', 0)->orderBy('parametre_id')->get();
        try{
            foreach($tarif as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Tarifs supprimés avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Tarifs impossible','danger');
        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $tarif = Tarif::findOrFail($request->id);
        try{
            $tarif->update([
                'supprimer' =>0
            ]);
            toast('Tarif restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration du Tarif impossible','danger');
        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $tarif = Tarif::where('supprimer', 1)->orderBy('parametre_id')->get();
        try{
            foreach($tarif as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Tarifs restorés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration des Tarifs impossible','danger');
        }
        return back();
    }
    public function destroyTous(Request $request){
        $tarif = Tarif::where('supprimer', 1)->orderBy('parametre_id')->get();
        try{
            foreach($tarif as $value){
                $value->delete();
            }
            toast('Supression des Tarifs éffectué avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Tarifs impossible','danger');
        }
        return back();
    }
}
