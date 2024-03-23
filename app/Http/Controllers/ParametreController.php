<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreParametreRequest;
use App\Http\Requests\UpdateParametreRequest;

class ParametreController extends Controller
{
    public function index()
    {
        //
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('admins.parametrages.parametres.parametre')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['ParametreTotal']= Parametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['ParametreTotalC']= Parametre::where('supprimer','=',1)->orderBy('code')->count();
        $data['type_parametres']= TypeParametre::where('supprimer','=',0)->orderBy('code')->get();

        $data['parametres']= Parametre::where('supprimer','=',1)->orderBy('code')->get();
        return view('admins.parametrages.parametres.corbeilleparametre')->with($data);


    }
    public function store(Request $request)
    {
        //
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        try{
            Parametre::create([
                'code'=>$code,
                'libelle' => $libelle,
                'description' => $description,
                'type_parametre_id'=>$type_parametre_id
            ]);
            toast('Parametre ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout du Parametre impossible','danger');

        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $code = $request->code;
        $libelle = $request->libelle;
        $description = $request->description;
        $type_parametre_id=$request->type_parametre_id;
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description,
                'type_parametre_id'=>$type_parametre_id
            ]);
            toast('Modification du Parametre éffectué avec success','warning');

        }
        catch(Exception $e){
            toast('Modification  du Parametre impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>1
            ]);
            toast('Parametre supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Parametre impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->delete();
            toast('Parametre supprimé avec success','danger');

        }
        catch(Exception $e){
            toast('Supression du Parametre impossible','danger');
        }
        return back();
    }
    public function corbeille_all(Request $request){
        $parametre = Parametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Parametres supprimé avec success','success');

        }
        catch(Exception $e){
            toast('Supression des parametres impossible','danger');
        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $parametre = Parametre::findOrFail($request->id);
        try{
            $parametre->update([
                'supprimer' =>0
            ]);
            toast('Parametre restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration du Parametre impossible','danger');
        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Parametre restoré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration du Parametre impossible','danger');
        }
        return back();
    }
    public function destroyTous(Request $request){
        $parametre = Parametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($parametre as $value){
                $value->delete();
            }
            toast('Supression des Parametres éffectué avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Parametres impossible','danger');
        }
        return back();
    }

}
