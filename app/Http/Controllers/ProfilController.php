<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Profil;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfilRequest;
use App\Http\Requests\UpdateProfilRequest;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        return view('admins.access.profils.profil')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        //
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
            Profil::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Profil ajouteé avec success','success');

        }
        catch(Exception $e) {
            toast('Ajout du profil impossible','danger');

        }
        return back();
    }

    public function update(Request $request)
    {
        //
        $profil = Profil::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $profil->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Modifiaction éffectuée avec success','warning');

        }
        catch(Exception $e) {
            toast('Modification du profil impossible','danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $profil = Profil::findOrFail($request->id);

        try {
           $profil->update([
                'supprimer'=>1

            ]);
            toast('Profil supprimé avec success','danger');

        }
        catch(Exception $e) {
            toast('Supression du profil impossible','danger');
        }
        return back();
    }


    public function indexCorbeille()
    {
        //
        $data['ProfilTotal']= Profil::where('supprimer','=',0)->orderBy('code')->count();
        $data['ProfilTotalC']= Profil::where('supprimer','=',1)->orderBy('code')->count();
        $data['profils']= Profil::where('supprimer','=',1)->orderBy('code')->get();
        return view('admins.access.profils.corbeilleprofil')->with($data);



    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $profil = Profil::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($profil as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Supression des profils éffectuée','success');

        }
        catch(Exception $e){
            toast('Supression des profils impossible','danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $profil = Profil::findOrFail($request->id);
        try{
            $profil->update([
                'supprimer' =>0
            ]);
            toast('Profil restauré avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $profil = Profil::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($profil as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Profils restaurés avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration des profils impossible','danger');
        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $profil = Profil::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($profil as $value){
                $value->delete();
            }
            toast('Supression des profils éffectué avec success','danger');

        }
        catch(Exception $e){
            toast('Supression des profils impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $profil = Profil::findOrFail($request->id);
        try{
            $profil->delete();
            toast('Profil supprimé avec success','success');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la suppression du Profil","error");

        }
        return back();
    }
}
