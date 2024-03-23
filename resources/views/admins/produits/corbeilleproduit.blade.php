{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    Corbeilles
@endsection
@section('corps')


    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title pt-2">
                    <h4 class="mb-0 bread"  style="color:#D9B8F7;"><img src="{{asset('glbal/icon/bin-file.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Produits</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"  style="color:#B460B5; ">Corbeilles</li>
                        <li class="breadcrumb-item active" aria-current="page"  style="color:#B460B5;">Produit</li>
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
                                        </div>
                                        <div class="col-md-9 pt-4 d-flex nav justify-content-end">
                                            <div class="form-group">
                                                <label for=""><a href="./adminproduit" class="btn " id="" data-bs-toggle="tooltip" title="total produits" style="color :#D9B8F7; font-size: 20px;"><i class="fas fa-cubes" style="font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$ProduitTotal}}</sup></label>
                                                <label for=""><a href="./adminproduitCorbeille" class="btn " id="" data-placement="bottom" data-bs-toggle="tooltip" title="total produits en corbeille" style="color :#D9B8F7; font-size: 20px;"><i class="fa fa-trash msicons" style="font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$ProduitTotalC}}</sup></label>
                                            </div>

                                            <a href="#" class="btn " id="A" data-bs-toggle="tooltip" title="Option"><i class="fa fa-ellipsis-v" style="font-size: 20px; color:#D9B8F7;"></i></a>
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
                                    <th> Image 1</th>
                                    <th> Image 2</th>
                                    <th> Nom </th>
                                    <th> Categorie </th>
                                    <th> Description </th>
                                    <th> Quantité </th>
                                    <th> prix </th>
                                    <th> solde </th>
                                    <th> Qualité </th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($produits as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            @if($value->photo1!=null)
                                            <td>
                                                <center>
                                                    <img src="{{asset($value->le_profil1)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>

                                            @else
                                            <td>
                                                <span class="text-danger">
                                                    Cette utilisateur n'a pas de photo 1
                                                </span>
                                            </td>

                                            @endif
                                            @if($value->photo2!=null)
                                            <td>
                                                <center>
                                                    <img src="{{asset($value->le_profil2)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>

                                            @else
                                            <td>
                                                <span class="text-danger">
                                                    Cette utilisateur n'a pas de photo 2
                                                </span>
                                            </td>

                                            @endif

                                            <td> {{$value->nom}}</td>

                                            <td> {{$value->categorie->nom}}</td>
                                            <td> {{$value->description}}</td>
                                            <td> {{$value->quantite}}</td>
                                            <td> {{$value->prix}}</td>
                                            @if($value->solde!=null)
                                                <td> {{$value->solde}}</td>
                                            @else
                                            <td>Pas en solde</td>
                                            @endif
                                            {{-- <td> {{$value->boutique->nom}}</td> --}}
                                            <td> {{$value->parametre->libelle}}</td>

                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class="btn-group">
                                                            <div style="">
                                                                <div class="">
                                                                    <div class="btn-group btn-block">
                                                                      <a type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#050034;"></i></a>
                                                                      <a type="button" class="btn btn-outline-warning" data-bs-toggle="tooltip" data-placement="bottom" title="Modifier" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-recycle" style="font-size: 20px; color:#050034;"></i></a>
                                                                      <a type="button" class="btn btn-danger"  data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#050034;"></i></a>
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
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-clipboard"></i></span>&ensp;Consulter le Produit : {{$value->nom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form>
                                                                    @csrf
                                                                    <div>
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="container-fluid">

                                                                                        <div class=" col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                                <input type="text" value="{{$value->nom}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-money-bill-wave-alt"></i>&ensp;Prix</label>

                                                                                                <input type="text" value="{{$value->prix}}" class="form-control" readonly id="prix" name="prix" placeholder="Prix du produit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <img src="{{asset($value->le_profil1)}}" class="img-thumbnail" alt="...">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class=" h-20 col-12 col-md-6 col-ml-6 col-lg-6" >
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <img src="{{asset($value->le_profil2)}}" class="img-thumbnail" alt="...">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-star"></i>&ensp;Qualité du Produit</label>
                                                                                                <select class="form-control select2  d-flex text-start" disabled name="parametre_id" style="width: 100%;">
                                                                                                    @foreach ($parametres as $key => $calit)
                                                                                                      <option class="d-flex text-start" value="{{$calit->id}}" {{($calit->id===$value->parametre_id)?"selected":""}}>{{$calit->libelle}}</option>
                                                                                                      @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-layer-group"></i>&ensp;Quantité en stock</label>
                                                                                                <input type="text" value="{{$value->quantite}}" class="form-control" readonly id="nombre" name="nombre" placeholder="Nombre de produit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-project-diagram"></i>&ensp;Categorie</label>
                                                                                                <select class="form-control select2  d-flex text-start" disabled name="categorie_id" style="width: 100%;">
                                                                                                    @foreach ($categories as $key => $cat)
                                                                                                      <option class="d-flex text-start" value="{{$cat->id}}" {{($cat->id===$value->categorie_id)?"selected":""}}>{{$cat->nom}}</option>
                                                                                                      @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="far fa-money-bill-alt"></i>&ensp;Solde</label>
                                                                                                <input type="text" value="{{$value->solde}}" class="form-control" readonly id="solde" name="solde" placeholder="Solde du produit">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                            <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
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
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas  fa-redo-alt"></i></span>&ensp;Restorer le Produit : {{$value->nom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('recupProduit')}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <div>
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                    <div class="container-fluid">

                                                                                        <div class=" col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                                <input type="text" value="{{$value->nom}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-money-bill-wave-alt"></i>&ensp;Prix</label>

                                                                                                <input type="text" value="{{$value->prix}}" class="form-control" readonly id="prix" name="prix" placeholder="Prix du produit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <img src="{{asset($value->le_profil1)}}" class="img-thumbnail" alt="...">
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class=" h-20 col-12 col-md-6 col-ml-6 col-lg-6" >
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <img src="{{asset($value->le_profil2)}}" class="img-thumbnail" alt="...">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-star"></i>&ensp;Qualité du Produit</label>
                                                                                                <select class="form-control select2  d-flex text-start" disabled name="parametre_id" style="width: 100%;">
                                                                                                    @foreach ($parametres as $key => $calit)
                                                                                                      <option class="d-flex text-start" value="{{$calit->id}}" {{($calit->id===$value->parametre_id)?"selected":""}}>{{$calit->libelle}}</option>
                                                                                                      @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-layer-group"></i>&ensp;Quantité en stock</label>
                                                                                                <input type="text" value="{{$value->quantite}}" class="form-control" readonly id="nombre" name="nombre" placeholder="Nombre de produit">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-project-diagram"></i>&ensp;Categorie</label>
                                                                                                <select class="form-control select2  d-flex text-start" disabled name="categorie_id" style="width: 100%;">
                                                                                                    @foreach ($categories as $key => $cat)
                                                                                                      <option class="d-flex text-start" value="{{$cat->id}}" {{($cat->id===$value->categorie_id)?"selected":""}}>{{$cat->nom}}</option>
                                                                                                      @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                            <div class="form-group pt-2">
                                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="far fa-money-bill-alt"></i>&ensp;Solde</label>
                                                                                                <input type="text" value="{{$value->solde}}" class="form-control" readonly id="solde" name="solde" placeholder="Solde du produit">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle "></i>&ensp;Fermer</button>
                                                                        <button type="submit" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-success btn-round" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-retweet"></i>&ensp;Restorer et Fermer</button>
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
                                                            <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('glbal/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-minus"></i></span>&ensp;Supprimer le Produit : {{$value->nom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('corbeilleProduit')}}" nctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <div class="">
                                                                            <div>
                                                                                <div class="container-fluid">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                            <div class="container-fluid">

                                                                                                <div class=" col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                                        <input type="text" value="{{$value->nom}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                        <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-money-bill-wave-alt"></i>&ensp;Prix</label>

                                                                                                        <input type="text" value="{{$value->prix}}" class="form-control" readonly id="prix" name="prix" placeholder="Prix du produit">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <img src="{{asset($value->le_profil1)}}" class="img-thumbnail" alt="...">
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=" h-20 col-12 col-md-6 col-ml-6 col-lg-6" >
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <img src="{{asset($value->le_profil2)}}" class="img-thumbnail" alt="...">
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-star"></i>&ensp;Qualité du Produit</label>
                                                                                                        <select class="form-control select2  d-flex text-start" disabled name="parametre_id" style="width: 100%;">
                                                                                                            @foreach ($parametres as $key => $calit)
                                                                                                              <option class="d-flex text-start" value="{{$calit->id}}" {{($calit->id===$value->parametre_id)?"selected":""}}>{{$calit->libelle}}</option>
                                                                                                              @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-layer-group"></i>&ensp;Quantité en stock</label>
                                                                                                        <input type="text" value="{{$value->quantite}}" class="form-control" readonly id="nombre" name="nombre" placeholder="Nombre de produit">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-project-diagram"></i>&ensp;Categorie</label>
                                                                                                        <select class="form-control select2  d-flex text-start" disabled name="categorie_id" style="width: 100%;">
                                                                                                            @foreach ($categories as $key => $cat)
                                                                                                              <option class="d-flex text-start" value="{{$cat->id}}" {{($cat->id===$value->categorie_id)?"selected":""}}>{{$cat->nom}}</option>
                                                                                                              @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="far fa-money-bill-alt"></i>&ensp;Solde</label>
                                                                                                        <input type="text" value="{{$value->solde}}" class="form-control" readonly id="solde" name="solde" placeholder="Solde du produit">
                                                                                                    </div>
                                                                                                </div>

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
                                                        <div class="modal-header bg-danger bgnav" style="background-image: url({{asset('glbal/theme/t1.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-minus"></i></span>&ensp;Supper le Produit : {{$value->nom}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('supprimerProduit')}}">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <!--corp du formulaire debut-->

                                                                    <div class="">
                                                                        <div class="" >
                                                                            <div class="container-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-md-6 col-ml-6 col-lg-6">
                                                                                        <div class="container-fluid">

                                                                                            <div class=" col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label style=" color: var(--color-t); font-family: italic;"><i class="fas fa-signature msicons"></i>&ensp;Nom </label>
                                                                                                    <input type="text" value="{{$value->nom}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                    <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-money-bill-wave-alt"></i>&ensp;Prix</label>

                                                                                                    <input type="text" value="{{$value->prix}}" class="form-control" readonly id="prix" name="prix" placeholder="Prix du produit">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <img src="{{asset($value->le_profil1)}}" class="img-thumbnail" alt="...">
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=" h-20 col-12 col-md-6 col-ml-6 col-lg-6" >
                                                                                        <div class="row">
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <img src="{{asset($value->le_profil2)}}" class="img-thumbnail" alt="...">
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-star"></i>&ensp;Qualité du Produit</label>
                                                                                                    <select class="form-control select2  d-flex text-start" disabled name="parametre_id" style="width: 100%;">
                                                                                                        @foreach ($parametres as $key => $calit)
                                                                                                          <option class="d-flex text-start" value="{{$calit->id}}" {{($calit->id===$value->parametre_id)?"selected":""}}>{{$calit->libelle}}</option>
                                                                                                          @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-layer-group"></i>&ensp;Quantité en stock</label>
                                                                                                    <input type="text" value="{{$value->quantite}}" class="form-control" readonly id="nombre" name="nombre" placeholder="Nombre de produit">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-project-diagram"></i>&ensp;Categorie</label>
                                                                                                    <select class="form-control select2  d-flex text-start" disabled name="categorie_id" style="width: 100%;">
                                                                                                        @foreach ($categories as $key => $cat)
                                                                                                          <option class="d-flex text-start" value="{{$cat->id}}" {{($cat->id===$value->categorie_id)?"selected":""}}>{{$cat->nom}}</option>
                                                                                                          @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="far fa-money-bill-alt"></i>&ensp;Solde</label>
                                                                                                    <input type="text" value="{{$value->solde}}" class="form-control" readonly id="solde" name="solde" placeholder="Solde du produit">
                                                                                                </div>
                                                                                            </div>

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
                            <div class="sumenu card-footer" id="" style="background-color: #050034;">
                                <hr class="text-dander">
                                <div class="code-box" >
                                    <div class="clearfix p-1">
                                        <div class="container-fluid pt-2">
                                            <div class="row">
                                                    <div class="col" >
                                                        <a href="deleteAllproduit" data-bs-toggle="tooltip" title="Tout Vider" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                                        <a href="recupAllproduit" data-bs-toggle="tooltip" title="Tout Restorer" data-placement="bottom" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fas fa-sync-alt" style="font-size: 20px; color:#3300ff;"></i></a>&emsp;
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








