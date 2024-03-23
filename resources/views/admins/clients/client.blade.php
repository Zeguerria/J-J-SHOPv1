{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    clients
@endsection
@section('corps')
    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-12 bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title pt-2">
                    <h4 class="mb-0 bread" style="color:#D9B8F7;"><img src="{{asset('glbal/icon/love.gif')}}" alt="" class="img img-circle " width="50" height="50">&ensp;Clients</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;">Users</li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;" >Client</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #050034;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus msicons" style="font-size: 30px; color:#7bff00;"></i></button>
                                            {{-- MODAL AJOUTER DEBUT --}}
                                            <div class="modal fade" id="modal-default">
                                                <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-chalkboard-teacher"></i></span>&ensp;Ajouter un Client</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                            <form method="post" action="{{route('ajouterClient')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    <!--corp du formulaire debut-->
                                                                    <div class="row">
                                                                        <div class=" col-12 col-md-6  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                <input type="text" class="form-control" id="" name="name" placeholder="Entrer le nom" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-edit msicons"></i>&ensp;Prenom </label>
                                                                                <input type="text" class="form-control" id="" name="prenom" placeholder="Entrer le Prenom">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-3  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-ninja msicons"></i>&ensp;Pseudo</label>
                                                                                <input type="text" class="form-control" id="" name="pseudo" placeholder="Entrer le pseudo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-4  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-map-marker-alt"></i>&ensp;Quartier</label>
                                                                                <input type="text" class="form-control" id="" name="quartier" placeholder="Entrer le Quartier">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;Phone</label>
                                                                                <input type="text" class="form-control" id="" name="phone" placeholder="Entrer le phone">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-paper-plane msicons"></i>&ensp;Email</label>
                                                                                <input type="email" class="form-control" id="" name="email" placeholder="Entrer l'email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-shield msicons"></i>&ensp;Password</label>
                                                                                <input type="password" class="form-control" id="" name="password" placeholder="Entrer le password">
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
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-save"></i>&ensp; Enregistrer</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- MODAL AJOUTER FIN --}}

                                        </div>
                                        <div class="col-md-9 pt-4 d-flex nav justify-content-end">
                                            <div class="form-group">
                                                <label for=""><a href="./client" class="btn " id="" data-bs-toggle="tooltip" title="total clients" ><i class="fa fa-user msicons" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$UserTotal}}</sup></label>
                                                <label for=""><a href="./clientcorbeille" class="btn " id="" data-bs-toggle="tooltip" data-placement="bottom" title="total clients en corbeille"><i class="fa fa-trash msicons" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$UserTotalC}}</sup></label>
                                            </div>

                                            <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="color :#D9B8F7; font-size: 20px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped ">
                                <thead>
                                <tr class="text-center">
                                  <th>#</th>
                                  <th>photo</th>
                                  <th>Noms & Prenoms</th>
                                  <th>Pseudo</th>
                                  <th>Contact</th>
                                  <th>Email</th>
                                  <th>Quartier</th>
                                  <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($users as $key => $value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            @if($value->photo!=null)
                                            <td class="text-center">
                                                <center>
                                                    <img src="{{asset($value->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>
                                            @else
                                            <td class="text-center">
                                                <span class="text-danger">
                                                    Cette utilisateur n'a pas de photo
                                                </span>
                                            </td>

                                            @endif

                                            <td class="text-center"> {{$value->name}}  {{$value->prenom}}</td>

                                            @if($value->pseudo!=null)
                                                <td class="text-center">{{$value->pseudo}}</td>

                                            @else
                                                <td class="text-center">
                                                    <span class="text-danger">
                                                        Cette utilisateur n'a pas de pseudo
                                                    </span>
                                                </td>
                                            @endif

                                            <td class="text-center">{{$value->phone}}</td>
                                            <td class="text-center">{{$value->email}}</td>
                                            <td class="text-center">{{$value->quartier}}</td>
                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class="">
                                                            <div class="btn-group btn-block">
                                                              <a type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#050034;"></i></a>
                                                              <a type="button" class="btn btn-outline-warning" data-bs-toggle="tooltip" data-placement="bottom" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#050034;"></i></a>
                                                              <a type="button" class="btn btn-danger"  data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#050034;"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <div class="s">
                                                <!--CONSULTER-->
                                                <div class="modal fade" id="consulter{{$value->id}}">
                                                    <div class="modal-dialog  modal-lg">
                                                        <div class="modal-content"><i class="">
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7;"><span><i class="fas fa-user-tag"></i></span>&ensp;Consulter le Client : {{$value->name}} {{$value->prenom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                                <form>
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                    <input type="text" class="form-control" value="{{$value->name}}" readonly id="" name="name" placeholder="Entrer le nom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-edit msicons"></i>&ensp;Prenom </label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->prenom}}" readonly name="prenom" placeholder="Entrer le Prenom">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-ninja msicons"></i>&ensp;Pseudo</label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->pseudo}}" readonly name="pseudo" placeholder="Entrer la marque">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-paper-plane msicons"></i>&ensp;Email</label>
                                                                                    <input type="email" class="form-control" id="" value="{{$value->email}}" readonly name="email" placeholder="Entrer l'email">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                            {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-map-marker-alt"></i>&ensp;Quartier</label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->quartier}}" readonly name="quartier" placeholder="Entrer le quartier">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;Phone</label>
                                                                                    <input type="text" class="form-control" id="" value="{{$value->phone}}" readonly name="phone" placeholder="Entrer le phone">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--MODIFFIER-->
                                                <div class="modal fade" id="modifier{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7;"><span><i class="fas fa-user-edit"></i></span>&ensp;Modifier  le Client : {{$value->name}} {{$value->prenom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color :#B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                                <form method="post" action="{{route('modifierClient')}}" enctype="multipart/form-data">
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
                                                                                    </div>
                                                                                    <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                        {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                    </div>

                                                                                </div>


                                                                            </div>
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;&ensp;Contact</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->phone}}"  name="phone" placeholder="Entrer phone">
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
                                                <!--CORBEILLE-->

                                                <div class="modal fade" id="corbeille{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7;"><span><i class="fas fa-user-slash"></i></span>&ensp;Supprimer le Client : {{$value->name}} {{$value->prenom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color :#B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                                <form method="post" action="{{route('corbeilleUser')}}" nctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <div class="">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature"></i>&ensp;Nom </label>
                                                                                                <input type="text" class="form-control" value="{{$value->name}}" readonly id="" name="name" placeholder="Entrer le nom">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-edit"></i>&ensp;Prenom </label>
                                                                                                <input type="text" class="form-control" id="" value="{{$value->prenom}}" readonly name="prenom" placeholder="Entrer le Prenom">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-ninja"></i>&ensp;Pseudo</label>
                                                                                                <input type="text" class="form-control" id="" value="{{$value->pseudo}}" readonly name="pseudo" placeholder="Entrer la marque">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-paper-plane"></i>&ensp;Email</label>
                                                                                                <input type="email" class="form-control" id="" value="{{$value->email}}" readonly name="email" placeholder="Entrer l'email">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                        {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="container-fluid">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-map-marker-alt"></i>&ensp;Quartier</label>
                                                                                                <input type="text" class="form-control" id="" value="{{$value->quartier}}" readonly name="quartier" placeholder="Entrer le quartier">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                            <div class="form-group">
                                                                                                <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;&ensp;Contact</label>
                                                                                                <input type="text" class="form-control" id="" value="{{$value->phone}}" readonly name="phone" placeholder="Entrer le phone">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                                <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-trash-alt"></i>&ensp;Supprimer et Fermer</button>
                                                                            </div>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--SUPPRIMER-->
                                                <div class="modal fade" id="supprimer{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7;"><span><i class="fas fa-user-slash"></i></span>&ensp;Supprmer l'utilisateur : {{$value->name}} {{$value->prenom}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color :#B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" {{--style="background: #B460B5;"--}}>
                                                            <form method="post" action="{{route('supprimerUser')}}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <!--corp du formulaire debut-->

                                                                    <div class="">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature"></i>&ensp;Nom </label>
                                                                                            <input type="text" class="form-control" value="{{$value->name}}" readonly id="" name="name" placeholder="Entrer le nom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-user-edit"></i>&ensp;Prenom </label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->prenom}}" readonly name="prenom" placeholder="Entrer le Prenom">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-user-ninja"></i>&ensp;Pseudo</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->pseudo}}" readonly name="pseudo" placeholder="Entrer la marque">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="msicons fas fa-paper-plane"></i>&ensp;Email</label>
                                                                                            <input type="email" class="form-control" id="" value="{{$value->email}}" readonly name="email" placeholder="Entrer l'email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-12  col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;&ensp;Contact</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->phone}}" readonly name="phone" placeholder="Entrer le phone">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col m-2" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;">
                                                                                    {{-- <img src="{{asset($value->le_profil)}}" alt="" srcset="" class="img-fluid"> --}}
                                                                                </div>
                                                                            </div>
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-map-marker-alt"></i>&ensp;Quartier</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->quartier}}" readonly name="quartier" placeholder="Entrer le quartier">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-md-6  col-ml-6 col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex " style=" color: var(--color-t); font-family: italic;"><i class="fas fa-mobile-alt"></i>&ensp;&ensp;Contact</label>
                                                                                            <input type="text" class="form-control" id="" value="{{$value->phone}}" readonly name="phone" placeholder="Entrer le phone">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                            <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-trash-alt"></i>&ensp;Supprimer et Fermer</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>


                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="sumenu card-footer" id="" style="background-color: #050034;">
                                <hr class="text-dander">
                                <div class="code-box" >
                                    <div class="clearfix p-1">
                                        <div class="container-fluid pt-2">
                                            <div class="row">
                                                    <div class="col" >
                                                        <a href="corbeilleAllclient" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                                        {{-- <a href="userspdf" data-bs-toggle="tooltip" title="Imprimer" data-placement="bottom" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-print" style="font-size: 20px; color:#0682dab4;"></i></a> --}}
                                                    </div>
                                                <div class="col d-flex nav justify-content-end">
                                                    <a href="#basic-table" data-bs-toggle="tooltip" title="fermer" id="T" class="btn btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash" style="font-size: 20px; color:#D9B8F7;"></i></a>
                                                </div>
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








