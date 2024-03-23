{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    Boutiques
@endsection
@section('corps')


    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title">
                    <h4 class="mb-0 bread"><!--<i class="fas fa-users msicons"></i>--><img src="{{asset('mesImages/icon/customer.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Boutique</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" >Access</li>
                        <li class="breadcrumb-item active" aria-current="page" >boutique</li>
                    </ol>
                </nav>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn" data-bs-toggle="tooltip" title="Ajouter" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus msicons" style="font-size: 20px; color:#7bff00;"></i></button>
                                            {{-- MODAL AJOUTER DEBUT --}}
                                            <div class="modal fade" id="modal-default">
                                                <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900"><span><i class="fas fa-user-plus msicons"></i></span>&ensp;Ajouter la boutique</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form method="post" action="{{route('ajouterboutique')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="mdi mdi-tag msicons"></i>&ensp;Nom</label>
                                                                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="mdi mdi-satellite msicons"></i>&ensp;Image</label>

                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="photo" class="form-control" id="customFile" accept=".png,.gpg,.gpeg">
                                                                                        <label class="custom-file-label" for="customFile">Selectionnez l'image</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description de La Catégorie">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Vendeur</label>
                                                                                    <select class="form-control select2" name="user_id" style="width: 100%;">
                                                                                        @foreach ($users as $key => $value)
                                                                                          <option value="{{$value->id}}">{{$value->name}} {{$value->prenom}}</option>
                                                                                          @endforeach
                                                                                      </select>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal" style=" color: var(--color-t); font-family: italic;" ><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                    <button type="submit" class="btn btn-primary" style=" font-family: italic;"><i class="far fa-thumbs-up msicons"></i>&ensp;Enregistrer</button>

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
                                                <label for=""><a href="./adminboutique" class="btn " id="" data-bs-toggle="tooltip" title="total users"><i class="fa fa-user msicons" style="font-size: 20px;"></i></a><sup >{{$BoutiqueTotal}}</sup></label>
                                                <label for=""><a href="./adminboutiqueCorbeille" class="btn " id="" data-bs-toggle="tooltip" title="total users en corbeille"><i class="fa fa-trash msicons" style="font-size: 20px;"></i></a><sup >{{$BoutiqueTotalC}}</sup></label>
                                            </div>

                                            <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#000307b4;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th> Image </th>
                                    <th> Nom </th>
                                    <th> affiche </th>
                                    <th> best </th>
                                    <th> Description </th>
                                    <th> Vendeur </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($boutiques as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>


                                            <<td>
                                                <center>
                                                    <img src="{{asset($value->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>
                                            <td> {{$value->nom}}</td>
                                            {{-- <td> {{$value->affiche}}</td>/ --}}
                                            @if($value->affiche==0)
                                                <td>
                                                    <a href="{{url('mettreaffiche', $value->id)}}" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mettre a l'affiche">Mettre a l'affiche</a>
                                                </td>

                                            @else
                                                <td>
                                                    <a href="{{url('retireraffiche', $value->id)}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Retirer de l'affiche" >Retire de l'affiche</a>
                                                </td>
                                            {{-- php artisan serve --}}
                                            @endif
                                            {{-- <td> {{$value->best}}</td> --}}
                                            @if($value->best==0)
                                                <td>
                                                    <a href="{{url('mettrebest', $value->id)}}" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mettre en favori">Changer en meilleur</a>
                                                </td>

                                            @else
                                                <td>
                                                    <a href="{{url('retirerbest', $value->id)}}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Retirer des favoris" >Changer en normal</a>
                                                </td>
                                            {{-- php artisan serve --}}
                                            @endif
                                            <td> {{$value->description}}</td>
                                            <td> {{$value->user->name}} {{$value->user->prenom}}</td>
                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class="dropdown ">
                                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow " href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-h " style="font-size: 30px; color:#000307b4;"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#0162fdfb;"></i>&ensp;Consulter</a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-edit" style="font-size: 20px; color:#a6a806b4;"></i>&ensp;Modifier</a>
                                                                <a class="dropdown-item" href="#" data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#corbeille{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#fc0303b4;"></i>&ensp;Supprimer</a>
                                                            </div>
                                                            <!--CONSULTER-->
                                                            <div class="modal fade" id="consulter{{$value->id}}">
                                                                <div class="modal-dialog  modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-headerb bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <h4 class="modal-title d-flex"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Consulter la boutique : {{$value->nom}}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body" style="background: var(--c-color2);">
                                                                        <form>
                                                                            @csrf
                                                                            <!--corp du formulaire debut-->
                                                                            <div class="" >
                                                                                <div class="container-fluid" >
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-tag msicons"></i>&ensp;Nom</label>
                                                                                                            <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                                            <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Vendeur</label>
                                                                                                            <select class="form-control select2" disabled name="user_id" style="width: 100%;">
                                                                                                                @foreach ($users as $key => $user)
                                                                                                                <option value="{{$user->id}}" {{($user->id==$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>

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
                                                                        <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Modifier la boutique : {{$value->nom}}</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                                            <form method="post" action="{{route('modifierBoutique')}}">
                                                                                    @csrf
                                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                                    <!--corp du formulaire debut-->
                                                                                    <div class="" >
                                                                                        <div class="container-fluid" >
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="container-fluid">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-tag msicons"></i>&ensp;Nom</label>
                                                                                                                    <input type="text" value="{{$value->nom}}" class="form-control"  id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                                                    <input type="text" value="{{$value->description}}" class="form-control" id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ccol-md-12">
                                                                                                                <div class="form-group">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-satellite msicons"></i>&ensp;Image</label>

                                                                                                                    <div class="custom-file">
                                                                                                                        <input type="file" name="photo" class="form-control" id="customFile" accept=".png,.gpg,.gpeg">
                                                                                                                        <label class="custom-file-label" for="customFile">Selectionnez l'image</label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Vendeur</label>
                                                                                                                    <select class="form-control select2"  name="user_id" style="width: 100%;">
                                                                                                                        @foreach ($users as $key => $user)
                                                                                                                        <option value="{{$user->id}}" {{($user->id==$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>>

                                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                            <button type="submit" class="btn btn-warning"><i class="far fa-thumbs-up msicons"></i>&ensp;Modifier et Fermer</button>
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
                                                                    <div class="modal-header bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer la boutique : {{$value->nom}}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body" style="background: var(--c-color2);">
                                                                        <form method="post" action="{{route('corbeilleBoutique')}}">
                                                                            @csrf
                                                                            <input type="hidden" name="id" value="{{$value->id}}">
                                                                            <!--corp du formulaire debut-->
                                                                            <div class="" >
                                                                                <div class="container-fluid" >
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="container-fluid">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-tag msicons"></i>&ensp;Nom</label>
                                                                                                            <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                                            <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group pt-2">
                                                                                                            <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Vendeur</label>
                                                                                                            <select class="form-control select2" disabled name="user_id" style="width: 100%;">
                                                                                                                @foreach ($users as $key => $user)
                                                                                                                <option value="{{$user->id}}" {{($user->id==$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                <button type="submit" class="btn btn-danger"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et fermer</button>
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
                                                                        <div class="modal-header bg-black">
                                                                            <h4 class="modal-title"><span><i class="fas fa-user-secret msicons"></i></span>&ensp;Supprimer la boutique : {{$value->nom}}</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                                            <form method="post" action="{{route('supprimerBoutique')}}">
                                                                                @csrf
                                                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                                                    <!--corp du formulaire debut-->
                                                                                    <div class="" >
                                                                                        <div class="container-fluid" >
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="container-fluid">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-tag msicons"></i>&ensp;Nom</label>
                                                                                                                    <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                                                    <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-12">
                                                                                                                <div class="form-group pt-2">
                                                                                                                    <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Vendeur</label>
                                                                                                                    <select class="form-control select2" disabled name="user_id" style="width: 100%;">
                                                                                                                        @foreach ($users as $key => $user)
                                                                                                                        <option value="{{$user->id}}" {{($user->id==$value->user_id)?"selected":""}}>{{$user->name}}{{$user->prenom}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('mesImages/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                                        <button type="button" class="btn bg-black" data-dismiss="modal"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
                                                                                        <button type="submit" class="btn bg-black"><i class="far fa-thumbs-up msicons"></i>&ensp;Supprimer et Fermer</button>

                                                                                    </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                {{-- <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr> --}}
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


 @endsection
 @section('footer')
 @endsection








