<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Panier;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePanierRequest;
use App\Http\Requests\UpdatePanierRequest;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


    }
    // $produit = Panier::findOrFail($request->id);
             // if(isset($request->nombre)){
            //     $nombre =1;
            // }else{
            //     $nombre = $request->nombre;
            // }
            // $prixtt= $prix*$nombre;


    public function panier(Request $request,$id){
         //
        // if(Auth::id()){

        //     $produit = Produit::findOrFail($request->id);
        //     $user=Auth::user();
        //     $user_id = $user->id;
        //     $produit_id = $produit->id;

        //     if($request->nombre !=null){
        //         $nombre = $request->nombre;
        //     }else{
        //         $nombre = $request =1;
        //     }
        //     if($produit->solde !=null){
        //         $prix =$produit->solde;
        //     }
        //     else{
        //         $prix = $produit->prix;
        //     }
        //     try{

        //         Panier::create([
        //             'nombre' =>$nombre,
        //             'user_id' => $user_id,
        //             'produit_id' => $produit_id,
        //             'prix' => $prix*$nombre,
        //         ]);
        //         toast('Produit Ajouté Au panier success','success');
        //     }catch(Exception $e){
        //         toast("Probleme survennu lors lorsde l'ajout au pannier !",'danger');
        //         // die($e->getMessage());
        //     }
        //     return back();
        // }else{
        //     return redirect('login');
        // }

        if(Auth::id()){
            // Lstes des Panier
            $paniers= Panier::orderBy('id')->get();
            $produit = Produit::findOrFail($request->id);
            $user=Auth::user();
            $user_id = $user->id;
            $produit_id = $produit->id;
            // echo $user;
            // echo $produit;

            $panierSelected=Panier::where('produit_id',"=", $produit_id)
                                    ->where('user_id',"=", $user_id)->first();
            echo $panierSelected;
        
            if(count($paniers) == 0){
                if($request->nombre !=null){
                    $nombre = $request->nombre;
                }else{
                    $nombre = $request =1;
                }
                if($produit->solde !=null){
                    $prix =$produit->solde;
                }
                else{
                    $prix = $produit->prix;
                }
                try{

                    Panier::create([
                        'nombre' =>$nombre,
                        'user_id' => $user_id,
                        'produit_id' => $produit_id,
                        'prix' => $prix*$nombre,
                    ]);
                }catch(Exception $e){
                    // die($e->getMessage());
                }
                return back();
            }
            else
            {
                if($panierSelected != null)
                {
                    // foreach($paniers as $pan)
                    // {
                   /* echo "pan_prod_id:".$pan->produit_id;
                    echo "prod_id:".$produit_id;
                    echo "pan_user_id:".$pan->user_id;
                    echo "user_id:".$user_id;
                    }*/
                    // if($pan->produit_id == $produit_id and $pan->user_id == $user_id){
                       
                        // $user_id= isset($request->user_id)?$request->user_id:$pan->user_id;
                        // $produit_id= isset($request->produit_id)?$request->produit_id:$pan->produit_id;
                        $nombre= isset($request->nombre)?$request->nombre:$panierSelected->nombre+1;

                        if($panierSelected->produit->solde!=null)
                        {
                            $prix= isset($request->prix)?$request->prix:$panierSelected->produit->solde;
                        }else
                        {
                            $prix= isset($request->prix)?$request->prix:$panierSelected->produit->prix;
                        }
                        try
                        {
                            $panierSelected->update([
                                'user_id'=>$user_id,
                                'produit_id' => $produit_id,
                                'prix' => $prix*$nombre,
                                'nombre' => $nombre,
                            ]);

                        }
                        catch(Exception $e){}
                        return redirect()->back();
                }
                else
                {
                    
                    if($request->nombre !=null){
                        $nombre = $request->nombre;
                        
                    }else{
                        $nombre = $request =1;
                        
                    }
                    if($produit->solde !=null){
                        $prix =$produit->solde;
                        
                    }
                    else{
                        $prix = $produit->prix;
                        
                    }
                    
                    try{
                        Panier::create([
                            'nombre' =>$nombre,
                            'user_id' => $user_id,
                            'produit_id' => $produit_id,
                            'prix' => $prix*$nombre,
                        ]);
                        toast('Produit Ajouté Au panier success','success');
                    }catch(Exception $e){
                        toast("Probleme survennu lors lorsde l'ajout au pannier !",'danger');
                        die($e->getMessage());
                    }
                    return back();

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
        // if(Auth::id()){

        //     $produit = Produit::findOrFail($request->id);
        //     $user=Auth::user();
        //     $user_id = $user->id;
        //     $produit_id = $produit->id;
        //     $paniers= Panier::orderBy('id')->get();

        //     if(count($paniers) == 0){
        //         if($request->nombre !=null){
        //             $nombre = $request->nombre;
        //         }else{
        //             $nombre = $request =1;
        //         }
        //         if($produit->solde !=null){
        //             $prix =$produit->solde;
        //         }
        //         else{
        //             $prix = $produit->prix;
        //         }

        //         try{
        //             Panier::create([
        //                 'nombre' =>$nombre,
        //                 'user_id' => $user_id,
        //                 'produit_id' => $produit_id,
        //                 'prix' => $prix*$nombre,
        //             ]);
        //             toast('Produit Ajouté Au panier success','success');
        //         }catch(Exception $e){
        //             toast("Erreur Survenu lors de l'ajout du produit  en Favorie","danger");

        //         }
        //         return redirect()->back();
        //         }
        //         else{

        //             foreach($paniers as $panier){


        //                 if($panier->produit_id == $produit_id and $panier->user_id == $user_id){
        //                     if($request->nombre !=null){
        //                         $nombre = $request->nombre;
        //                     }else{
        //                         $nombre = $panier->nombre;
        //                     }
        //                     if($produit->solde !=null){
        //                         $prix =$produit->solde;
        //                     }
        //                     else{
        //                         $prix = $produit->prix;
        //                     }
        //                     try{

        //                         $n=$nombre+=$nombre;
        //                         $panier->update([
        //                             'nombre' => $n,
        //                             'prix' => $prix*$n,


        //                         ]);
        //                         toast('Panier mst a jr avec success','success');

        //                     }
        //                     catch(Exception $e){
        //                         toast('Impossible de mettre  a jr Panier','danger');
        //                     }
        //                     return redirect()->back();
        //                     // sinon je le creer
        //                 }else{
        //                     if($request->nombre !=null){
        //                         $nombre = $request->nombre;
        //                     }else{
        //                         $nombre = $request =1;
        //                     }
        //                     if($produit->solde !=null){
        //                         $prix =$produit->solde;
        //                     }
        //                     else{
        //                         $prix = $produit->prix;
        //                     }
        //                     try{
        //                         Panier::create([
        //                             'nombre' =>$nombre,
        //                             'user_id' => $user_id,
        //                             'produit_id' => $produit_id,
        //                             'prix' => $prix*$nombre,
        //                         ]);
        //                         toast('Produit Ajouté Au panier success','success');
        //                     }catch(Exception $e){
        //                         toast("Erreur Survenu lors de l'ajout du produit  en Favorie","danger");
        //                     }
        //                     return redirect()->back();
        //                 }
        //             }
        //         }
        // }else{
        //     return redirect('login');
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePanierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        if(Auth::id()){
            // Lstes des Panier
            $paniers= Panier::orderBy('id')->get();
            $produit = Produit::findOrFail($request->id);
            $user=Auth::user();
            $user_id = $user->id;
            $produit_id = $produit->id;
            if(count($paniers) == 0){
                if($request->nombre !=null){
                    $nombre = $request->nombre;
                }else{
                    $nombre = $request =1;
                }
                if($produit->solde !=null){
                    $prix =$produit->solde;
                }
                else{
                    $prix = $produit->prix;
                }
                try{

                    Panier::create([
                        'nombre' =>$nombre,
                        'user_id' => $user_id,
                        'produit_id' => $produit_id,
                        'prix' => $prix*$nombre,
                    ]);
                }catch(Exception $e){
                    // die($e->getMessage());
                }
                return back();

            }else{
                foreach($paniers as $pan){
                    if($pan->produit_id == $produit_id and $pan->user_id == $user_id){
                        $user_id= isset($request->user_id)?$request->user_id:$pan->user_id;
                        $produit_id= isset($request->produit_id)?$request->produit_id:$pan->produit_id;
                        $nombre= isset($request->nombre)?$request->nombre:$pan->nombre+1;
                        if($pan->produit->solde!=null){
                            $prix= isset($request->prix)?$request->prix:$pan->produit->solde;
                        }else{
                            $prix= isset($request->prix)?$request->prix:$pan->produit->prix;
                        }
                        try{
                            $pan->update([
                                'user_id'=>$user_id,
                                'produit_id' => $produit_id,
                                'prix' => $prix*$nombre,
                                'nombre' => $nombre,
                            ]);

                        }
                        catch(Exception $e){
                        }
                        return redirect()->back();
                    }else{
                        if($request->nombre !=null){
                            $nombre = $request->nombre;
                        }else{
                            $nombre = $request =1;
                        }
                        if($produit->solde !=null){
                            $prix =$produit->solde;
                        }
                        else{
                            $prix = $produit->prix;
                        }
                        try{

                            Panier::create([
                                'nombre' =>$nombre,
                                'user_id' => $user_id,
                                'produit_id' => $produit_id,
                                'prix' => $prix*$nombre,
                            ]);
                            toast('Produit Ajouté Au panier success','success');
                        }catch(Exception $e){
                            toast("Probleme survennu lors lorsde l'ajout au pannier !",'danger');
                            // die($e->getMessage());
                        }
                        return back();

                    }
                }
            }

        }else{
            return redirect('login');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $panier = Panier::findOrFail($request->id);
        $user_id= isset($request->user_id)?$request->user_id:$panier->user_id;
        $produit_id= isset($request->produit_id)?$request->produit_id:$panier->produit_id;
        $nombre= isset($request->nombre)?$request->nombre:$panier->nombre;
        if($panier->produit->solde!=null){
            $prix= isset($request->prix)?$request->prix:$panier->produit->solde;

        }else{
            $prix= isset($request->prix)?$request->prix:$panier->produit->prix;

        }
        try{
            $panier->update([
                'user_id'=>$user_id,
                'produit_id' => $produit_id,
                'prix' => $prix*$nombre,
                'nombre' => $nombre,
            ]);
            toast('Modifiaction éffectuée avec success','warning');
        }
        catch(Exception $e){
            toast('Modification impossible','danger');
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panier $panier)
    {
        //
        // if(Auth::id()){

        //     $produit = Produit::findOrFail($request->id);
        //     $user=Auth::user();
        //     $user_id = $user->id;
        //     $produit_id = $produit->id;

        //     if($request->nombre !=null){
        //         $nombre = $request->nombre;
        //     }else{
        //         $nombre = $request =1;
        //     }
        //     if($produit->solde !=null){
        //         $prix =$produit->solde;
        //     }
        //     else{
        //         $prix = $produit->prix;
        //     }
        //     try{

        //         Panier::create([
        //             'nombre' =>$nombre,
        //             'user_id' => $user_id,
        //             'produit_id' => $produit_id,
        //             'prix' => $prix*$nombre,
        //         ]);
        //         toast('Produit Ajouté Au panier success','success');
        //     }catch(Exception $e){
        //         toast("Probleme survennu lors lorsde l'ajout au pannier !",'danger');
        //         // die($e->getMessage());
        //     }
        //     return back();
        // }else{
        //     return redirect('login');
        // }
    }
}
