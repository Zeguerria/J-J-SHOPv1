<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Like;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Pagination\Paginator;

class RouteController extends Controller
{
    //les redirections
    public function lesdirections(Request $request){
        //client totats
        $profil=Auth::user()->profil_id;

        if($profil=='3'){
            //SUPERADMIN
            return redirect()->route('HomeAdmin');
            // return redirect()->route('HomeAdmin')->with($data);

        }elseif($profil=='2'){
            //Admin
            return redirect()->route('HomeAdmin');
            // return redirect()->route('HomeAdmin')->with($data);

        }else{
            return redirect()->route('HomeSite');
            // return redirect()->route('HomeSite')->with($data);
        }
    }

    public function siteacceuil(Request $request){


        // Compte les produit favorie du client
        if(Auth::id()){
            $user=Auth::user();
            $user_id = $user->id;
            $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
            $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
            // ttal
            $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                //
                // les produits favoris du client en prévisualisation
            $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();
        }


        // Categories a l'affiche debut
            $data['categorieaffiches']= Categorie::where('supprimer','=',0)->where('affiche','=',1)->orderBy('id','Asc')->limit(3)->get();
        // Categories a l'affiche fin
        // PRODUITS EN FAVORI DEBUT
            $data['produitaffiches']= Produit::where('supprimer','=',0)->where('favori','=',1)->orderBy('id','Asc')->limit(10)->get();
        // PRODUITS A L'AFFICHE FIN
        // PRODUITS DEBUT
        $data['produitnews']= Produit::where('supprimer','=',0)->orderBy('id')->limit(10)->get();
        // PRODUITS EN FAVORI FIN
        //PRODUI EN TETE D'AFFICHE MAX 2 DEBUT
            $data['produitteteaffiches']= Produit::where('supprimer','=',0)->where('vue','=',1)->orderBy('id','Asc')->limit(2)->get();
        //PRODUI EN TETE D'AFFICHE MAX 2  FIN PhP artisan migrate:fresh --seed


        return view('sites.menus.home')->with($data);
    }
    public function adminacceuil(Request $request){

        return view('admins.menus.home');
    }


    public function detail($id){
        // $boutiques = Boutique::findOrFail($id);
        // $theme = Cookie::get('theme');
        if(Auth::id()){
            $user=Auth::user();
                // Je recupere son id
                $user_id = $user->id;
                $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
                $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                //
                // les produits favoris du client en prévisualisation
                $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();
            }

        //Produit selectionné pour le detail
        $data['produits'] = Produit::find($id);
        // $data['touteboutiques']= Boutique::where('supprimer','=',0)->orderBy('nom')->get();


        //Prosuit de la meme categorie que celui selectionné
        $data['produitmemecategorie'] =Produit::where('supprimer','=',0)->where('categorie_id','=',$data['produits']->categorie_id)->limit(3)->get();
        $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();

        return view('sites.details.detail')->with($data);
    }
    public function allproduitclients( Request $request){
        // $cat = Categorie::findOrFail($id);
        if(Auth::id()){
            $user=Auth::user();
            $user_id = $user->id;
            $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
            $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
            $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                //
                // les produits favoris du client en prévisualisation
            $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();
        }
        $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();
        if($request->get('sort')=="Prix_Croissant"){
            $data['produits']= Produit::where('supprimer','=',0)->orderBy('prix', 'Desc')->get();

        }elseif($request->get('sort')=='Prix_Decroissant'){
            $data['produits']= Produit::where('supprimer','=',0)->orderBy('prix', 'Asc')->get();

        }elseif($request->get('sort')=='Nouveauté'){
            $data['produits']= Produit::where('supprimer','=',0)->orderBy('id', 'Asc')->get();
        }elseif($request->get('sort')=='Etat'){
            $data['produits']= Produit::where('supprimer','=',0)->orderBy('parametre_id', 'Desc')->get();

        }
        else{
            $data['produits']= Produit::where('supprimer','=',0)->orderBy('nom')->paginate(1);
        }

        $data['produitteteaffiches']= Produit::where('supprimer','=',0)->where('vue','=',1)->first();

        return view('sites.produits.produit')->with($data);
    }
    public function categhorieproduitclient($id ,Request $request){
        if(Auth::id()){
            $user=Auth::user();
            $user_id = $user->id;
            $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
            $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
            $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                //
                // les produits favoris du client en prévisualisation
            $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();
        }
        $categories = Categorie::findOrFail($id);
        $data['categories']= Categorie::where('supprimer','=',0)->orderBy('nom')->get();

        if($request->get('sort')=="Prix_Croissant"){
            $data['produits']= Produit::where('supprimer','=',0)->where('categorie_id','=',$categories->id)->orderBy('prix')->get();
        }elseif($request->get('sort')=='Prix_Decroissant'){
            $data['produits']= Produit::where('supprimer','=',0)->where('categorie_id','=',$categories->id)->orderBy('prix', 'DESC')->get();
        }elseif($request->get('sort')=='Nouveauté'){
            $data['produits']= Produit::where('supprimer','=',0)->where('categorie_id','=',$categories->id)->orderBy('id', 'Desc')->get();
        }elseif($request->get('sort')=='Etat'){
            $data['produits']= Produit::where('supprimer','=',0)->where('categorie_id','=',$categories->id)->orderBy('parametre_id', 'Desc')->get();
        }else{
            $data['produits']= Produit::where('supprimer','=',0)->where('categorie_id','=',$categories->id)->orderBy('nom')->get();
        }
        return view('sites.produits.produit')->with($data);

    }
    public function clientcomptes(){
        if(Auth::id()){
            $user=Auth::user();
            $user_id = $user->id;
            $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
            $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                //
                // les produits favoris du client en prévisualisation
            $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();
        }

        //  return view('sites.profils.profil');
         return view('sites.profils.profil')->with($data);

    }
    public function postlike(Request $request,$id){
        // Je verifies que l'utilisateur est connecté sinon en else il doit se connecter
        if(Auth::id()){
            // Je cree une variable pour recuperer l'utilsateur connecté
            $user=Auth::user();
            // Je recupere son id
            $user_id = $user->id;
            //Meme chose pour le produit selectionné
            $produit= Produit::findOrFail($request->id);
            $produit_id = $produit->id;
            // la liste des likes
            $likes= Like::orderBy('id')->get();
            $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

            // condition s'il n y a pas de like je cree le like
            if(count($likes) == 0){
                try{
                    Like::create([
                        'user_id'=>$user_id,
                        'produit_id'=>$produit_id,
                    ]);
                    toast('Produit Ajouté en Favorie','success');
                }catch(Exception $e){
                    toast("Erreur Survenu lors de l'ajout du produit  en Favorie","danger");

                }
                return redirect()->back();
            }
            else{
                // sino je parcours la liste des likes
                foreach($likes as $like){
                    // Si on trouve que le client a deja like ce produit on le supprime
                    // car on ne peut pas ajouter deux foi le meme produit en favori
                    if($like->produit_id == $produit_id and $like->user_id == $user_id){
                        try{
                            $like->delete();
                            toast('Produit retiré des Favories','success');

                        }
                        catch(Exception $e){
                            toast('Impossible de retirer le produit des Favories','danger');
                        }
                        return redirect()->back();
                        // sinon je le creer
                    }else{
                        try{
                            Like::create([
                                'user_id'=>$user_id,
                                'produit_id'=>$produit_id,
                            ]);
                            toast('Produit Ajouté en Favorie','success');
                        }catch(Exception $e){
                            toast("Erreur Survenu lors de l'ajout du produit  en Favorie","danger");
                        }
                        return redirect()->back();
                    }
                }
            }
        }else{
            return redirect('login');
        }

    }
    public function favoriclients(){
        // Compte les produit favorie du client
        if(Auth::id()){
            $user=Auth::user();

                // Je recupere son id
                $user_id = $user->id;
                $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
                //
                // les produits favoris du client en prévisualisation
            $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->get();
                $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                return view('sites.favoris.favori')->with($data);

            }else{
                 return view('sites.favoris.favori');

            }

        //  return view('sites.favoris.favori')->with($data);

    }
    public function retirerfavoriclients($id){

        $monfav=Like::find($id);
        $monfav->delete();
        return redirect()->back();
    }
    public function cards(){

        // condition pour rediriger le client s'il n'est pas connecté car on ne peut pas ajouter au panier sans ca
        if(Auth::id()){
            $user=Auth::user();
                // Je recupere son id
                $user_id = $user->id;
                $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();
                $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');

                //
                // les produits favoris du client en prévisualisation
                $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->limit(6)->get();

            // Je doit faire une autre condition pour rediriger le client si son panier est vide dans la vue cardvide en dessous
            if(empty($data['monpanier'])){
                return view('sites.paniers.paniervide')->with($data);

            }else{
                return view('sites.paniers.panier')->with($data);
            }

        }else{
            return redirect('login');
        }
    }
    public function retirerpanierclients($id){

        $monfav=Panier::find($id);
        $monfav->delete();
        return redirect()->back();
    }
    public function payement (){
        if(Auth::id()){
            $user=Auth::user();
                // Je recupere son id
                $user_id = $user->id;
                $data['mesfavories']= Like::where('user_id','=',$user_id)->count();
                $data['monpanier']= Panier::where('user_id','=',$user_id)->get();
                $data['lasum']= Panier::where('user_id','=',$user_id)->sum('prix');
                // $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();

                //
                // les produits favoris du client en prévisualisation
                $data['mesfavoriesPrevisualisation']= Like::where('user_id','=',$user_id)->get();
                $data['monpanierPrevisualisation']= Panier::where('user_id','=',$user_id)->get();

                return view('sites.payements.payement')->with($data);

            }
        return view('sites.payements.payement');
    }

}
