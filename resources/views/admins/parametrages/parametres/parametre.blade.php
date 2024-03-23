{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    Parametres
@endsection
@section('corps')


    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title pt-2">
                    <h4 class="mb-0 bread" style="color:#D9B8F7;"><img src="{{asset('glbal/icon/gear.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Parametre</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5; " >Types</li>
                        <li class="breadcrumb-item active" aria-current="page"  style="color:#B460B5; ">Parametre</li>
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
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas  fa-wrench"></i></span>&ensp;Ajouter un Parametre</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" >
                                                            <form method="post" action="{{route('ajouterParametre')}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                            <input type="text" class="form-control" id="" name="code" placeholder="Entrer le code">
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                        <div class="form-group">
                                                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                                                            <input type="text" class="form-control" id="" name="libelle" placeholder="Entrer le Libelle">
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                <input type="text" class="form-control" id="" name="description" placeholder="Entrer la Description">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-cog"></i>&ensp;Type de Parametre</label>
                                                                                <select class="form-control select2 text-start" name="type_parametre_id" style="width: 100%;">
                                                                                    @foreach ($type_parametres as $key => $value)
                                                                                      <option class="text-start" value="{{$value->id}}">{{$value->libelle}}</option>
                                                                                      @endforeach
                                                                                </select>
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
                                                <label for=""><a href="./adminparametre" class="btn " id="" data-bs-toggle="tooltip" title="total  de parametres"><i class="fas fa-screwdriver" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$ParametreTotal}}</sup></label>
                                                <label for=""><a href="./adminparametreCorbeille" class="btn " id="" data-bs-toggle="tooltip" title="total de parametres en corbeille"><i class="fa fa-trash msicons" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$ParametreTotalC}}</sup></label>
                                            </div>

                                            <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#D9B8F7;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="text-center">
                                  <th>#</th>
                                  <th>Code</th>
                                  <th>Libelle</th>
                                  <th>Description</th>
                                  <th>Type de Parametre</th>
                                  <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($parametres as $key => $value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>


                                            <td class="text-center"> {{$value->code}}</td>

                                            <td class="text-center">{{$value->libelle}}</td>
                                            <td class="text-center">{{$value->description}}</td>
                                            <td class="text-center">{{$value->type_parametre->libelle}}</td>
                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class=" ">
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

                                                        </div>


                                                    </div>
                                                </div>
                                            </td>
                                            <div class="s">
                                                 <!--CONSULTER-->
                                                 <div class="modal fade" id="consulter{{$value->id}}">
                                                    <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-spinner"></i></span>&ensp;Consulter le Parametre : {{$value->libelle}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form>
                                                                @csrf
                                                                <!--corp du formulaire debut-->
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                                                                <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-cog"></i>&ensp;Type de Parametre</label>
                                                                                <select class="form-control select2 text-start" disabled name="type_parametre_id" style="width: 100%;">
                                                                                    @foreach ($type_parametres as $key => $tpar)
                                                                                      <option class="text-start" value="{{$tpar->id}}"{{($tpar->id==$value->type_parametre_id)?"selected":""}}>{{$tpar->libelle}}</option>
                                                                                      @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <div class="">
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
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas  fa-chevron-circle-up"></i></span>&ensp;Modifier le Parametre : {{$value->libelle}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('modifierParametre')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                    <div>
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                    <input type="text" class="form-control" value="{{$value->code}}"  id="" name="code" placeholder="Entrer le code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6 col-ml-6 col-lg-6">

                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                    <input type="text" class="form-control" value="{{$value->libelle}}"  id="" name="libelle" placeholder="Entrer le libellé">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                    <input type="text" class="form-control" value="{{$value->description}}"  id="contact" name="description" placeholder="Entrer la description">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-cog"></i>&ensp;Type de Parametre</label>
                                                                                    <select class="form-control select2 text-start"  name="type_parametre_id" style="width: 100%;">
                                                                                        @foreach ($type_parametres as $key => $tpar)
                                                                                          <option class="text-start" value="{{$tpar->id}}"{{($tpar->id==$value->type_parametre_id)?"selected":""}}>{{$tpar->libelle}}</option>
                                                                                          @endforeach
                                                                                    </select>
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
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-trash"></i></span>&ensp;Supprimer le Parametre : {{$value->libelle}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form method="post" action="{{route('corbeilleParametre')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <!--corp du formulaire debut-->
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                        <input type="text" class="form-control" value="{{$value->code}}" readonly id="" name="code" placeholder="Entrer la code">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                        <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="" name="libelle" placeholder="Entrer le libellé">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                        <input type="text" class="form-control" value="{{$value->description}}" readonly id="description" name="description" placeholder="Entrer la description">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style="  color: var(--color-t); font-family: italic;"><i class="fas fa-cog"></i>&ensp;Type de Parametre</label>
                                                                                        <select class="form-control select2 text-start" disabled  name="type_parametre_id" style="width: 100%;">
                                                                                            @foreach ($type_parametres as $key => $tpar)
                                                                                              <option class="text-start" value="{{$tpar->id}}"{{($tpar->id==$value->type_parametre_id)?"selected":""}}>{{$tpar->libelle}}</option>
                                                                                              @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                            <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-trash-alt"></i>&ensp;Supprimer et Fermer</button>
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
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-trash"></i></span>&ensp;Supprimer le Parametre : {{$value->libelle}}</h4>

                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('supprimerParametre')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="supprimer{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Code </label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->code}}" id="suprimer{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->libelle}}" id="suprimer{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->description}}" id="suprimer{{$value->id}}" name="description" placeholder="Entrer la description">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style="  color: var(--color-t); font-family: italic;"><i class="fas fa-cog"></i>&ensp;Type de Parametre</label>
                                                                                        <select class="form-control select2 text-start" disabled  name="type_parametre_id" style="width: 100%;">
                                                                                            @foreach ($type_parametres as $key => $tpar)
                                                                                              <option class="text-start" value="{{$tpar->id}}"{{($tpar->id==$value->type_parametre_id)?"selected":""}}>{{$tpar->libelle}}</option>
                                                                                              @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                            <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-trash-alt"></i>&ensp;Supprimer et Fermer</button>
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
                                                        <a href="corbeilleAllparametre" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
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








