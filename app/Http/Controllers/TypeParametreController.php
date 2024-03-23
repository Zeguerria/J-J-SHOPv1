<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\TypeParametre;
use App\Http\Requests\StoreTypeParametreRequest;
use App\Http\Requests\UpdateTypeParametreRequest;

class TypeParametreController extends Controller
{
    public function index()
    {
        //

        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data ['typeparametres'] = TypeParametre::where('supprimer','=',0)->orderBy('code')->get();
        return view('admins.parametrages.typeparametres.typeparametre')->with($data);
    }
    public function indexCorbeille()
    {
        $data['TypeParametreTotal']= TypeParametre::where('supprimer','=',0)->orderBy('code')->count();
        $data['TypeParametreTotalC']= TypeParametre::where('supprimer','=',1)->orderBy('code')->count();
        $data ['typeparametres'] = TypeParametre::where('supprimer','=',1)->orderBy('code')->get();

        return view('admins.parametrages.typeparametres.corbeilletypeparametre')->with($data);


    }
    public function store(Request $request)
    {
        //
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
            TypeParametre::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Type de Paramétre ajouté avec success','success');

        }
        catch(Exception $e) {
            toast('ajout du Type de parametre impossible','danger');

        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $typeParametre = TypeParametre::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $typeParametre->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Modifiaction du Type de Parametre éffectuée avec success','warning');

        }
        catch(Exception $e) {
            toast('modification du Type de Parametre impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request)
    {
        //aller faire la modification de l'element
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->update([
                'supprimer'=>1

            ]);
            toast('Type de Parametre supprimé avec success','danger');
                }
        catch(Exception $e) {
            toast('Supression du Type de Parametre impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $typeParametre = TypeParametre::findOrFail($request->id);

        try {
           $typeParametre->delete();
           toast('Type de paramétre supprimé avec success','danger');

        }
        catch(Exception $e) {
            toast('Supression du Type de Parametre impossible','danger');
        }
        return back();
    }
    public function corbeille_all(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Types de Paramétre supprimés avec success','danger');

        }
        catch(Exception $e){
            toast('Supression des Types de Parametre impossible','danger');
        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $typeParametre = TypeParametre::findOrFail($request->id);
        try{
            $typeParametre->update([
                'supprimer' =>0
            ]);
            toast('Type de Parametre restoré avec success ','success');

        }
        catch(Exception $e){
            toast('Restauration du type de Parametre impossible','danger');
        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->update([
                    'supprimer' =>0
                ]);
                toast('Types de Paramétres restaurés avec success','primary');
            }
            toast('Types de Parametres restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration des Types de Paramtre impossible','danger');
        }
        return back();
    }
    public function destroyTous(Request $request){
        $typeParametre = TypeParametre::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($typeParametre as $value){
                $value->delete();
            }
            toast('Supression des Types de Parametre éffectuée avec success','success');

        }
        catch(Exception $e){
            toast('Supression des Type de Parametre impossible','danger');
        }
        return back();
    }
}
