{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    Profil
@endsection
@section('corps')
    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-12 bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title pt-2">
                    <h4 class="mb-0 bread" style="color:#D9B8F7;"><img src="{{asset('glbal/icon/password.gif')}}" alt="" class="img img-circle " width="50" height="50">&ensp;Profil</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;">Menu</li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;" >Profil</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-md-3 col-ml-3 col-lg-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                          <div class="card-body box-profile">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle"
                                   src="{{asset(Auth::user()->le_profil)}}"
                                   alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{Auth::user()->name}}&ensp;{{Auth::user()->prenom}}</h3>

                            <p class="text-muted text-center">{{Auth::user()->pseudo}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                <b>Profil</b> <a class="float-right">{{Auth::user()->profil->libelle}}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Email</b> <a class="float-right">{{Auth::user()->email}}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Telephone</b> <a class="float-right">{{Auth::user()->phone}}</a>
                              </li>
                              <li class="list-group-item">
                                <b>Quartier</b> <a class="float-right">{{Auth::user()->quartier}}</a>
                              </li>
                              <li class="list-group-item cardt">
                                <div class="d-flex justify-content-center">
                                    @foreach($users as $key => $value)
                                        <a class=" btn btn-warning" type="button" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fa fa-edit msicons">&ensp;Modifier</i></a>
                                        <!--MODIFFIER-->
                                        <div class="modal fade" id="modifier{{$value->id}}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                        <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7;"><span><i class="fas fa-user-edit"></i></span>&ensp;Modifier  l'utilisateur : {{$value->name}} {{$value->prenom}}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color :#B460B5;">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                        <form method="post" action="{{route('modifierUser')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                <!--corp du formulaire debut-->
                                                                <div>
                                                                    <div class="container-fluid">
                                                                        <div class="row">

                                                                            <div class="col">
                                                                                <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature"></i>&ensp;Nom </label>
                                                                                        <input type="text" class="form-control" value="{{$value->name}}"  id="" name="name" placeholder="Entrer le nom">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-12  col-ml-12 col-lg-12">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-edit"></i>&ensp;Prenom </label>
                                                                                        <input type="text" class="form-control" id="" value="{{$value->prenom}}"  name="prenom" placeholder="Entrer le Prenom">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-ninja"></i>&ensp;Pseudo</label>
                                                                                        <input type="text" class="form-control" id="" value="{{$value->pseudo}}"  name="pseudo" placeholder="Entrer la marque">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-paper-plane"></i>&ensp;Email</label>
                                                                                        <input type="email" class="form-control" id="" value="{{$value->email}}"  name="email" placeholder="Entrer l'email">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;&ensp;Contact</label>
                                                                                        <input type="text" class="form-control" id="" value="{{$value->phone}}"  name="phone" placeholder="Entrer phone">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                            </div>

                                                                        </div>


                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6 ">
                                                                                <div class="form-group  text-start">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-id-badge"></i>&ensp;Profil</label>
                                                                                    <select class="form-control select2 text-start" name="profil_id" style="width: 100%;">
                                                                                        @foreach ($profil as $key => $val)
                                                                                          <option class="text-start" value="{{$val->id}}" {{($val->id==$value->profil_id)?"selected":""}}>{{$val->libelle}}</option>
                                                                                          @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-shield"></i>&ensp;Password</label>
                                                                                    <input type="password" class="form-control" id=""  name="password" placeholder="Entrer le password">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-map-marker-alt"></i>&ensp;Quartier</label>
                                                                                    <input type="text" class="form-control" id=""  name="quartier" placeholder="Entrer le quartier">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                <label><i class="fas fa-camera-retro msicons"></i>&ensp;Photo de Profil</label>
                                                                                <div class="form-group">
                                                                                    <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" name="photo" id="customFile" accept=".png,.gpg,.gpeg, .jpg,.avif">
                                                                                    <label class="custom-file-label" for="customFile" style=" color: var(--color-t); font-family: italic;"> <i class="fas fa-image"></i>&ensp;</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-save"></i>&ensp;Modifier et Fermer</button>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </li>
                            </ul>

                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center col-md-7">
                                    <button type="submit" class="btn btn-danger btn-block ">
                                        <i class="nav-icon fas fa-power-off msicons">&ensp;<b>Se deconnecter</b></i>
                                    </button>
                                </div>

                            </form>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        
                    </div>
                    <div class="col-12 col-md-9 col-ml-9 col-lg-9">
                        <div class="card cardt">

                        <div class="card-body">
                            <div class="tab-content">



                            <div class="tab-pane active" id="timeline" style="height: 59vh" >
                                <div class=" d-flex justify-content-center" >
                                    <div class="col-12 col-md-12 col-ml-12 col-lg-12  d-flex justify-content-center ">
                                    <img src="{{asset('glbal/autres/compte.png')}}" alt="login form" class="img-thumbnail" style="height: 59vh ;  border:0;" />

                                    </div>
                                </div>

                            </div>



                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
 @endsection
 @section('footer')
 @endsection








