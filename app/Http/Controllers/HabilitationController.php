<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Habilitation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHabilitationRequest;
use App\Http\Requests\UpdateHabilitationRequest;

class HabilitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['HabilitationTotal']= Habilitation::where('supprimer','=',0)->orderBy('code')->count();
        $data['HabilitationTotalC']= Habilitation::where('supprimer','=',1)->orderBy('code')->count();
        $data ['habilitations'] = Habilitation::where('supprimer','=',0)->orderBy('code')->paginate(10);
         return view('admins.access.habilitations.habilitation')->with($data);
    }
    public function indexCorbeille()
    {
        //
        $data['HabilitationTotal']= Habilitation::where('supprimer','=',0)->orderBy('code')->count();
        $data['HabilitationTotalC']= Habilitation::where('supprimer','=',1)->orderBy('code')->count();
        $data['habilitations']= Habilitation::where('supprimer','=',1)->orderBy('code')->paginate(8);
        return view('admins.access.habilitations.corbeillehabilitation')->with($data);


    }
    public function store(Request $request)
    {
        //
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
            Habilitation::create([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast('Habilitation ajoutée avec success','success');

        }
        catch(Exception $e) {
            toast("ajout impossible de l'habilitation ",'danger');

        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $habilitation = Habilitation::findOrFail($request->id);
        $code= $request->code;
        $libelle= $request->libelle;
        $description= $request->description;
        try {
           $habilitation->update([
                'code'=>$code,
                'libelle'=>$libelle,
                'description'=>$description
            ]);
            toast("Modifiaction de l'habilitation éffectuée avec success",'warning');

        }
        catch(Exception $e) {
            toast("modification  de l'habilitation impossible",'danger');

        }
        return back();
    }
    public function corbeille(Request $request){
        //aller faire la modification de l'element
        $habilitation = Habilitation::findOrFail($request->id);

        try {
           $habilitation->update([
                'supprimer'=>1

            ]);
            toast('Habilitation supprimée avec success','danger');

        }
        catch(Exception $e) {
            toast("Supression de l'habilitation impossible",'danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $habilitation = Habilitation::findOrFail($request->id);
        try {
            $habilitation->delete();
            toast('Habilitation supprimé avec success','danger');

         }
         catch(Exception $e) {
            toast("Supression  de l'habilitation impossible",'danger');
         }
         return back();
    }

    //mettre tous les cours en corbeille
    public function corbeille_all(Request $request){
        $habilitation = Habilitation::where('supprimer', 0)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast("Supression de l'habilitation éffectuée avec success",'danger');
        }
        catch(Exception $e){
            toast("Supression de l'habilitation impossible",'danger');
        }
        return back();
    }
     //recuper un element de la corbeille
     public function recup_corbeille(Request $request){
        $habilitation = Habilitation::findOrFail($request->id);
        try{
            $habilitation->update([
                'supprimer' =>0
            ]);
            toast('Habilitation restaurée avec success','primary');

        }
        catch(Exception $e){
            toast("Restauration de l'habilitation impossible",'danger');
        }
        return back();
    }
    //recuper tous les elements de la corbeille
    public function recup_all(Request $request){
        $habilitation = Habilitation::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Habilitations restaurées avec success','primary');

        }
        catch(Exception $e){
            toast('Restauration des habilitations impossible','danger');

        }
        return back();
    }
    //supprimer tous les elements de la corbeille
    public function delete_all(Request $request){
        $habilitation = Habilitation::where('supprimer', 1)->orderBy('code')->get();
        try{
            foreach($habilitation as $value){
                $value->delete();
            }
            toast('Supression des habilitations éffectuée avec success','danger');
        }
        catch(Exception $e){
            toast('Supression des habilitations impossible','danger');
        }
        return back();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Habilitation $habilitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habilitation $habilitation)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */

}
