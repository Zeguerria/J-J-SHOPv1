<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //

         //requete compte les categories
         $data['CategorieTotal']= Categorie::where('supprimer','=',0)->orderBy('nom')->count();
         $data['CategorieTotalC']= Categorie::where('supprimer','=',1)->orderBy('nom')->count();
         //listes de categories
         $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->paginate(10);
         return view('admins.categories.categorie')->with($data);
    }
    public function indexCorbeille()
    {
        // toast('Vous êtes dans dans la vue Categorie en Corbeille','success');

        //requete compte les categories
        $data['CategorieTotal']= Categorie::where('supprimer','=',0)->orderBy('nom')->count();
        $data['CategorieTotalC']= Categorie::where('supprimer','=',1)->orderBy('nom')->count();
        //listes de categories
        $data['categories']= Categorie::where('supprimer','=',1)->orderBy('nom')->paginate(10);
        return view('admins.categories.corbeillecategorie')->with($data);
    }
    public function store(Request $request)
    {
        //
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/stockages/images/categories', $request->file('photo'));
        }else{
            $photo = "storage/stockages/images/categories/profil.jpg";
        }
        $nom = $request->nom;
        $description = $request->description;
        try{
            Categorie::create([
                'nom'=>$nom,
                'description' => $description,
                'photo' => $photo,
            ]);
            toast('Catégorie ajouteé avec success','success');
        }
        catch(Exception $e){
            die($e->getMessage());toast('ajout impossible','danger');
        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $categorie= Categorie::findOrFail($request->id);
        if(isset($request->photo) and !empty($request->photo)){
            $photo = Storage::putFile('public/stockages/images/categories', $request->file('photo'));
        }else{
            $photo = $categorie->photo;
        }
        $nom= isset($request->nom)?$request->nom:$categorie->nom;
        $description= isset($request->description)?$request->description:$categorie->description;
        try{
            $categorie->update([
                'nom'=>$nom,
                'description' => $description,
                'photo'=>$photo,

            ]);
            toast('Modifiaction éffectuée avec success','warning');
        }
        catch(Exception $e){
            toast('Modification impossible','danger');
        }
        return back();
    }
    public function corbeille(Request $request){
        $categorie= Categorie::findOrFail($request->id);
        try{
            $categorie->update([
                'supprimer'=>1,
            ]);
            toast('Catégorie supprimée avec success','danger');
        }
        catch(Exception $e){
            toast('suppression impossible','danger');
        }
        return back();
    }
    public function corbeilleTous(Request $request){
        $categorie= Categorie::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($categorie as $value){
                $value->update([
                    'supprimer' =>1
                ]);
                toast('Catégories supprimés avec success','danger');
            }
        }
        catch(Exception $e){
            toast('suppression impossible','danger');

        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $categorie= Categorie::findOrFail($request->id);
        try{
            $categorie->update([
                'supprimer' =>0
            ]);
            toast('Catégorie restauré avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $categorie= Categorie::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($categorie as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Catégories restaurés avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }

    public function destroy(Request $request)
    {
        //
        $categorie= Categorie::findOrFail($request->id);
        try{
            $categorie->delete();
            toast('Catégorie supprimé avec success','Error Message');
        }
        catch(Exception $e){
            toast('suppression impossible','Error Message');
        }
        return back();
    }
    public function destroyTous(Request $request){
        $categorie= Categorie::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($categorie as $value){
                $value->delete();
            }
            toast('Catégories supprimées avec success','Error Message');

        }
        catch(Exception $e){
            toast('suppressions impossible','Error Message');
        }
        return back();
    }


    public function changeaffiche($id, Request $request){
        $categorie= Categorie::findOrFail($request->id);
        try{
            $categorie->update([
                'affiche'=>1,
            ]);
            toast('Categorie ajoutée en Affiche avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de l'ajout de la Categorie en Affiche","error");

        }
        return back();
    }
    public function changenormal($id, Request $request){
        $categorie= Categorie::findOrFail($request->id);
        try{
            $categorie->update([
                'affiche'=>0,
            ]);
            toast('Categorie retirée des Affiches avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors du changement de la  Categorie en Affiches","error");

        }
        return back();
    }




    // Site

}
