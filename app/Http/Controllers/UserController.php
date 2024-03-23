<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index()
    {


        // toast('Modifiaction éffectuée avec success','warning');
        $data['UserTotal']= User::where('supprimer','=',0)->where('profil_id','!=',1)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->where('profil_id','!=',1)->orderBy('name')->count();
        // $data['parametres']= Parametre::where('supprimer','=',0)->orderBy('code')->get();
        // $data ['role'] =Parametre::where('supprimer','=',0)->where('type_parametre_id','=',3)->orderBy('libelle')->get();
        // $data['role']= Parametre::where('supprimer','=',0)->orderBy('libelle')->get();
        //
        // $data ['profils'] = Profil::where('supprimer','=',0)->orderBy('code')->paginate(10);
        $data['profil']= Profil::where('supprimer','=',0)->where('id','!=',1)->orderBy('libelle')->get();
        $data['users']= User::where('supprimer','=',0)->where('profil_id','!=',1)->orderBy('name')->get();
        return view('admins.users.user')->with($data);


    }
    public function indexCorbeille()
    {
        //
        $data['profil']= Profil::where('supprimer','=',0)->where('id','!=',1)->orderBy('libelle')->get();
        $data['UserTotal']= User::where('supprimer','=',0)->where('profil_id','!=',1)->where('profil_id','!=',1)->orderBy('name')->count();
        $data['UserTotalC']= User::where('supprimer','=',1)->where('profil_id','!=',1)->orderBy('name')->count();
        $data['users']= User::where('supprimer','=',1)->where('profil_id','!=',1)->orderBy('name')->get();
        return view('admins.users.corbeilleuser')->with($data);

    }
    public function store(Request $request)
    {
        //
        if(isset($request->photo) and !empty($request->photo)){

            $photo = Storage::putFile('public/stockages/images/users', $request->file('photo'));
        }else{
            $photo = "storage/stockages/images/users/profil.jpg";
        }
        $name = $request->name;
        $prenom = $request->prenom;
        $pseudo = $request->pseudo;
        $role=$request->role;
        $email=$request->email;
        $profil_id=$request->profil_id;
        $phone=$request->phone;
        $quartier=$request->quartier;
        $password=$request->password;


        try{
            User::create([
                'name'=>$name,
                'profil_id' => $profil_id,
                'phone' => $phone,
                'quartier' => $quartier,
                'prenom' => $prenom,
                'pseudo' => $pseudo,
                'photo'=>$photo,
                // 'role'=>$role,
                'email'=>$email,
                'password' => Hash::make($request['password']),
            ]);
            toast('Utilisateur ajouteé avec success','success');

        }
        catch(Exception $e){
            toast('ajout impossible','danger');
        }
        return back();
    }
    public function update(Request $request)
    {

        //
        $user = User::findOrFail($request->id);
        if(isset($request->photo) and !empty($request->photo)){
            $photo = Storage::putFile('public/stockages/users', $request->file('photo'));
        }else{
            $photo = $user->photo;
        }
        $name= isset($request->name)?$request->name:$user->name;
        $profil_id= isset($request->profil_id)?$request->profil_id:$user->profil_id;
        $role_id= isset($request->role_id)?$request->role_id:$user->role_id;
        $prenom= isset($request->prenom)?$request->prenom:$user->prenom;
        $pseudo= isset($request->pseudo)?$request->pseudo:$user->pseudo;
        $phone= isset($request->phone)?$request->phone:$user->phone;
        $quartier= isset($request->quartier)?$request->quartier:$user->quartier;
        $email= isset($request->email)?$request->email:$user->email;

        if(!isset($request->password)){
            $password = $user->password;
        }
        else{
            $password = Hash::make($request->password);
        }

        try{
            $user->update([
                'name'=>$name,
                'prenom' => $prenom,
                'profil_id' => $profil_id,
                // 'role_id' => $role_id,
                'pseudo' => $pseudo,
                'photo'=>$photo,
                'phone'=>$phone,
                'quartier'=>$quartier,
                'email'=>$email,
                'password' => $password,

            ]);
            toast('Modifiaction éffectuée avec success','warning');
        }
        catch(Exception $e){
            toast('Modification impossible','danger');
        }
        return back();
    }
    public function corbeille(Request $request)
    {
        //
        $user = User::findOrFail($request->id);
        try{
            $user->update([
                'supprimer' =>1
            ]);
            toast('Utilisateur supprimé avec success','danger');
        }
        catch(Exception $e){
            toast('suppression impossible','danger');
        }
        return back();
    }
    public function destroy(Request $request)
    {
        //
        $user = User::findOrFail($request->id);
        try{
            $user->delete();
            toast('Utilisateur supprimé avec success','Error Message');
        }
        catch(Exception $e){
            toast('suppression impossible','Error Message');

        }
        return back();
    }
    public function corbeille_all(){
        $users = User::where('supprimer', 0)->where('profil_id','!=',1)->orderBy('name')->get();
        try{
            foreach($users as $value){
                $value->update([
                    'supprimer' =>1
                ]);
            }
            toast('Utilisateurs supprimés avec success','danger');
        }
        catch(Exception $e){
            toast('suppression impossible','danger');
        }
        return back();
    }
    public function recup_corbeille(Request $request){
        $users = User::findOrFail($request->id);
        try{
            $users->update([
                'supprimer' =>0
            ]);
            toast('Utilisateur restauré avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    public function recup_all(Request $request){
        $user = User::where('supprimer', 1)->where('profil_id','!=',1)->orderBy('name')->get();
        try{
            foreach($user as $value){
                $value->update([
                    'supprimer' =>0
                ]);
            }
            toast('Utilisateurs restaurés avec success','primary');
        }
        catch(Exception $e){
            toast('Restauration impossible','danger');
        }
        return back();
    }
    public function delete_all(Request $request){
        $users = User::where('supprimer', 1)->where('profil_id','!=',1)->get();
        try{
            foreach($users as $value){
                $value->delete();
            }
            toast('Supression éffectué avec success','danger');
        }
        catch(Exception $e){
            toast('Supression impossible','danger');
        }
        return back();
    }

    public function profilAdmin()
    {
        
        $data['profil']= Profil::where('supprimer','=',0)->orderBy('libelle')->get();
        $data['users']= User::where('supprimer','=',0)->where('id','=',Auth::user()->id)->get();
        return view('admins.profils.profil')->with($data);


    }
    //PARTIE CLIENT DEBUT
        public function indexClient(){
            $data['UserTotal']= User::where('supprimer','=',0)->where('profil_id','=',1)->orderBy('name')->count();
            $data['UserTotalC']= User::where('supprimer','=',1)->where('profil_id','=',1)->orderBy('name')->count();
            $data['profil']= Profil::where('supprimer','=',0)->where('id','=',1)->orderBy('libelle')->get();
            $data['users']= User::where('supprimer','=',0)->where('profil_id','=',1)->orderBy('name')->get();
            return view('admins.clients.client')->with($data);
        }
        public function indexCorbeilleClient(){
            $data['UserTotal']= User::where('supprimer','=',0)->where('profil_id','=',1)->orderBy('name')->count();
            $data['UserTotalC']= User::where('supprimer','=',1)->where('profil_id','=',1)->orderBy('name')->count();
            $data['profil']= Profil::where('supprimer','=',0)->where('id','=',1)->orderBy('libelle')->get();
            $data['users']= User::where('supprimer','=',1)->where('profil_id','=',1)->orderBy('name')->get();
            return view('admins.clients.corbeilleclient')->with($data);
        }
        public function storeClient(Request $request){
            if(isset($request->photo) and !empty($request->photo)){

                $photo = Storage::putFile('public/stockages/images/clients', $request->file('photo'));
            }else{
                $photo = "storage/stockages/images/clients/profil.jpg";
            }
            $name = $request->name;
            $prenom = $request->prenom;
            $pseudo = $request->pseudo;
            $role=$request->role;
            $email=$request->email;
            $profil_id=$request->profil_id;
            $phone=$request->phone;
            $quartier=$request->quartier;
            $password=$request->password;
            try{
                User::create([
                    'name'=>$name,
                    'profil_id' => 1,
                    'phone' => $phone,
                    'quartier' => $quartier,
                    'prenom' => $prenom,
                    'pseudo' => $pseudo,
                    'photo'=>$photo,
                    // 'role'=>$role,
                    'email'=>$email,
                    'password' => Hash::make($request['password']),
                ]);
                toast('Client ajouté avec success','success');

            }
            catch(Exception $e){
                toast('ajout impossible','danger');
            }
            return back();
        }
        public function updateClient(Request $request){
            $user = User::findOrFail($request->id);
            if(isset($request->photo) and !empty($request->photo)){
                $photo = Storage::putFile('public/stockages/clients', $request->file('photo'));
            }else{
                $photo = $user->photo;
            }
            $name= isset($request->name)?$request->name:$user->name;
            $profil_id= isset($request->profil_id)?$request->profil_id:$user->profil_id;
            $prenom= isset($request->prenom)?$request->prenom:$user->prenom;
            $pseudo= isset($request->pseudo)?$request->pseudo:$user->pseudo;
            $phone= isset($request->phone)?$request->phone:$user->phone;
            $quartier= isset($request->quartier)?$request->quartier:$user->quartier;
            $email= isset($request->email)?$request->email:$user->email;

            if(!isset($request->password)){
                $password = $user->password;
            }
            else{
                $password = Hash::make($request->password);
            }

            try{
                $user->update([
                    'name'=>$name,
                    'prenom' => $prenom,
                    'profil_id' => 1,
                    // 'role_id' => $role_id,
                    'pseudo' => $pseudo,
                    'photo'=>$photo,
                    'phone'=>$phone,
                    'quartier'=>$quartier,
                    'email'=>$email,
                    'password' => $password,

                ]);
                toast('Modifiaction éffectuée avec success','warning');
            }
            catch(Exception $e){
                toast('Modification impossible','danger');
            }
            return back();
        }

        public function recup_all_Client(Request $request){
            $user = User::where('supprimer', 1)->where('profil_id','=',1)->orderBy('name')->get();
            try{
                foreach($user as $value){
                    $value->update([
                        'supprimer' =>0
                    ]);
                }
                toast('Clients restaurés avec success','primary');
            }
            catch(Exception $e){
                toast('Restauration impossible','danger');
            }
            return back();
        }
        public function corbeille_all_Client(Request $request){
            $users = User::where('supprimer', 0)->where('profil_id','=',1)->orderBy('name')->get();
            try{
                foreach($users as $value){
                    $value->update([
                        'supprimer' =>1
                    ]);
                }
                toast('Clients supprimés avec success','danger');
            }
            catch(Exception $e){
                toast('suppression impossible','danger');
            }
            return back();
        }
        public function delete_all_Client (Request $request){
            $users = User::where('supprimer', 1)->where('profil_id','=',1)->get();
            try{
                foreach($users as $value){
                    $value->delete();
                }
                toast('Supression éffectué avec success','danger');
            }
            catch(Exception $e){
                toast('Supression impossible','danger');
            }
            return back();
        }

    //PARTIE CLIENT FIN

}
