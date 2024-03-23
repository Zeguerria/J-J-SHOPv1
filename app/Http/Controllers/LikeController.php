<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Like;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLikeRequest;
use App\Http\Requests\UpdateLikeRequest;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function like(Request $request,$id){
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.fff
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLikeRequest $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        //
    }
}
