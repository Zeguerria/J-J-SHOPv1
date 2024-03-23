<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //requete compte les categories
         $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
         $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();
         //listes de categories
         $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();
        //  $data['boutiques']= Boutique::where('supprimer','=',0)->orderBy('nom')->get();
         $data['parametres']= Parametre::where('supprimer','=',0)->where('type_parametre_id','=',2)->orderBy('code')->get();
         $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->get();
         return view('admins.produits.produit')->with($data);
    }
    public function indexCorbeille()
    {
        //requete compte les categories
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
        $data['ProduitTotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();

        //requete compte les categories
        $data['ProduitTotal']= Produit::where('supprimer','=',0)->orderBy('nom')->count();
         $data['ProduitotalC']= Produit::where('supprimer','=',1)->orderBy('nom')->count();
         $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();

        //listes de categories
        //  $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();
        $data['parametres']= Parametre::where('supprimer','=',0)->where('type_parametre_id','=',2)->orderBy('libelle')->get();
        $data['produits']= Produit::where('supprimer','=',1)->orderBy('nom')->get();
        return view('admins.produits.corbeilleproduit')->with($data);
    }
    public function store(Request $request)
    {
        //
        if(isset($request->photo1) and !empty($request->photo1)){

            $photo1 = Storage::putFile('public/stockages/images/produits', $request->file('photo1'));
            // $photo2 = Storage::putFile('public/stockages/images/produits', $request->file('photo2'));
        }else{
            $photo1 = "storage/stockages/images/produits/profil.jpg";
            // $photo2 = "storage/stockages/images/produits/profil.jpg";
        }
        if(isset($request->photo2) and !empty($request->photo2)){

            // $photo1 = Storage::putFile('public/stockages/images/produits', $request->file('photo1'));
            $photo2 = Storage::putFile('public/stockages/images/produits', $request->file('photo2'));
        }else{
            // $photo1 = "storage/stockages/images/produits/profil.jpg";
            $photo2 = "storage/stockages/images/produits/profil.jpg";
        }
        $nom = $request->nom;
        $boutique_id = $request->boutique_id;
        $categorie_id = $request->categorie_id;
        $parametre_id = $request->parametre_id;
        $solde = $request->solde;
        $prix = $request->prix;
        $favori = $request->favori;
        $quantite = $request->quantite;
        // $nombre = $request->nombre;
        $description = $request->description;
        try{
            Produit::create([
                'nom'=>$nom,
                'categorie_id'=>$categorie_id,
                'parametre_id'=>$parametre_id,
                'quantite'=>$quantite,
                'solde'=>$solde,
                'prix'=>$prix,
                // 'nombre'=>$nombre,
                'description' => $description,
                'favori' => $favori,
                'photo1' => $photo1,
                'photo2' => $photo2,
                // 'boutique_id' => $boutique_id,
            ]);
            toast('Produit Ajouté avec success','success');

        }
        catch(Exception $e){
            die($e->getMessage());
            // toast("Probleme survenu lors de l'ajout de la parametre","error");
        }
        return back();
    }
    public function update(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        if(isset($request->photo1) and !empty($request->photo1)){
            $photo1 = Storage::putFile('public/stockages/images/produits', $request->file('photo1'));
            // $photo2 = Storage::putFile('public/stockages/images/produits', $request->file('photo2'));
        }else{
            $photo1 = $produit->photo1;
            // $photo2 = $produit->photo2;
        }
        if(isset($request->photo2) and !empty($request->photo2)){
            // $photo1 = Storage::putFile('public/stockages/images/produits', $request->file('photo1'));
            $photo2 = Storage::putFile('public/stockages/images/produits', $request->file('photo2'));
        }else{
            // $photo1 = $produit->photo1;
            $photo2 = $produit->photo2;
        }
        $nom= isset($request->nom)?$request->nom:$produit->nom;
        $favori= isset($request->favori)?$request->favori:$produit->favori;
        // $like= isset($request->like)?$request->like:$produit->like;
        $boutique_id= isset($request->boutique_id)?$request->boutique_id:$produit->boutique_id;
        $categorie_id= isset($request->categorie_id)?$request->categorie_id:$produit->categorie_id;
        $parametre_id= isset($request->parametre_id)?$request->parametre_id:$produit->parametre_id;
        $description= isset($request->description)?$request->description:$produit->description;
        $solde= isset($request->solde)?$request->solde:$produit->solde;
        $prix= isset($request->prix)?$request->prix:$produit->prix;
        $quantite= isset($request->quantite)?$request->quantite:$produit->quantite;
        $nombre= isset($request->nombre)?$request->nombre:$produit->nombre;
        try{
            $produit->update([
                'nom'=>$nom,
                'categorie_id'=>$categorie_id,
                'solde'=>$solde,
                'quantite'=>$quantite,
                'prix'=>$prix,
                'nombre'=>$nombre,
                'description' => $description,
                'photo1' => $photo1,
                'photo2' => $photo2,
                'favori' => $favori,
                // 'like' => $like,
                // 'boutique_id' => $boutique_id,
                'parametre_id' => $parametre_id,
            ]);
            toast('Produit modifié avec success','success');

        }
        catch(Exception $e){
            die($e->getMessage());
            // toast("Probleme survenu lors de la modification du produit","error");
        }
        return back();
    }
    public function corbeille(Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer'=>1,
            ]);
            toast('Produit supprimée avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la suppression de la produit","error");

        }
        return back();
    }

    public function corbeilleTous(Request $request){
        $produit= Produit::where('supprimer', 0)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Produits supprimés avec success','danger');

        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la suppression des produits","error");

        }
        return back();
    }
    public function recupUnCorbeille(Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'supprimer' =>0
            ]);
            toast('Produit Restauré avec success','success');

        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la Restauration du produit","error");

        }
        return back();
    }
    public function recupTousCorbeille(Request $request){
        $produit= Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Produits Restaurés avec success','success');

        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la Restauration des produits","error");

        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->delete();
            toast('Produit supprimé avec success','success');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la suppression du produit","error");

        }
        return back();
    }
    public function destroyTous(Request $request){
        $produit= Produit::where('supprimer', 1)->orderBy('nom')->get();
        try{
            foreach($produit as $value){
                $value->delete();
            }
            toast('Produits supprimé avec success','danger');

        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de la suppression des produits","error");

        }
        return back()->with('supprimertous', 'Données supprimées');
    }
    public function changefavori($id, Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'favori'=>1,
            ]);
            toast('Produit ajouté en favori avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de l'ajout du produit en favori","error");

        }
        return back();
    }
    public function changenormal($id, Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'favori'=>0,
            ]);
            toast('Produit retiré des favoris avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors du changement d'etat  du produit en favori","error");

        }
        return back();
    }
    public function changevue($id, Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'vue'=>1,
            ]);
            toast('Produit ajouté en Affiche avec success','danger');
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors de l'ajout du produit en Affiche","error");

        }
        return back();
    }
    public function changenormalvue($id, Request $request){
        $produit= Produit::findOrFail($request->id);
        try{
            $produit->update([
                'vue'=>0,
            ]);
            toast("Produit retiré de l'affiche avec success","danger");
        }
        catch(Exception $e){
            // die($e->getMessage());
            toast("Probleme survenu lors du changement d'etat  du produit en affiche","error");

        }
        return back();
    }
}
