{{-- @php
    $droits = array();

    foreach(Auth::user()->profil->profil_habilitations as $key => $value){
        $droits[$key] = $value->habilitation->code;
    }
@endphp --}}

@extends('admins.menus.menu')
@section('titre')
    catégories
@endsection
@section('corps')


    <div class="content-wrapper lebody masection pb-5">
        <div class="content-header pb-5">
            <div class="col-md-6 col-md-12 bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                <div class="title pt-2">
                    <h4 class="mb-0 bread" style="color:#D9B8F7;"><img src="{{asset('glbal/icon/blackboard.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Catégories</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;">Types</li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5;">catégorie</li>
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
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-tags"></i></span>&ensp;Ajouter une Categorie</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form method="post" action="{{route('ajouterCategorie')}}" enctype="multipart/form-data">
                                                                @csrf

                                                                <div>
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-12 col-md-5 col-ml-5 col-lg-5">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-file-signature"></i>&ensp;Nom</label>
                                                                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-7  col-ml-7 col-lg-7">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-image"></i>&ensp;Image</label>

                                                                                    <div class="custom-file">
                                                                                        <input type="file" name="photo" class="form-control" id="customFile" accept=".png,.gpg,.gpeg, .jpg">
                                                                                        <label class="custom-file-label" for="customFile">Selectionnez l'image</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                    <input type="text" class="form-control" id="description" name="description" placeholder="Description de La Catégorie">
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
                                                <label for=""><a href="./categorie" class="btn " id="" data-bs-toggle="tooltip" title="total catégories" style="color :#D9B8F7; font-size: 20px;"><i class="fa fa-tag" style="font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$CategorieTotal}}</sup></label>
                                                <label for=""><a href="./categoriecorbeille" class="btn " id="" data-placement="bottom" data-bs-toggle="tooltip" title="total catégories en corbeille" style="color :#D9B8F7; font-size: 20px;"><i class="fa fa-trash msicons" style="font-size: 20px;"></i></a><sup style="color :#D9B8F7;" >{{$CategorieTotalC}}</sup></label>
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
                                  <th> Image </th>
                                  <th> Nom </th>
                                  <th> Dscription </th>
                                  <th> Normale/Affiche </th>
                                  <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($categories as $key => $value)
                                        <tr>
                                            <td>{{$key+1}}</td>


                                            <td>
                                                <center>
                                                    <img src="{{asset($value->le_profil)}}" alt="" class="img img-circle" width="50" height="50">
                                                </center>
                                            </td>
                                            <td> {{$value->nom}}</td>
                                            <td> {{$value->description}}</td>
                                            @if($value->affiche==0)
                                                <td>
                                                    <a href="{{url('mettreaffiche', $value->id)}}" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mettre en Affiche"  style="font-size: 20px; color:#050034;">Affiche</a>
                                                </td>

                                            @else
                                                <td>
                                                    <a href="{{url('retireraffiche', $value->id)}}" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Retirer des Affiche"  style="font-size: 20px; color:#050034;" >Normal</a>
                                                </td>
                                            {{-- php artisan serve --}}
                                            @endif
                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
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
                                            </td>
                                            <div class="s">
                                                <!--CONSULTER-->
                                                <div class="modal fade" id="consulter{{$value->id}}">
                                                    <div class="modal-dialog  modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-sticky-note"></i></span>&ensp;Ajouter une Categorie</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" >
                                                                <form enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="" >
                                                                        <div class="container-fluid" >
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-file-signature"></i>&ensp;Nom</label>
                                                                                                    <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group p-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                    <input type="text" value="{{$value->description}}" class="form-control text-break" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
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
                                                                <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-spa"></i></span>&ensp;Modifier la Catégorie : {{$value->nom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('modifierCategorie')}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                        <div class="" >
                                                                            <div class="container-fluid" >
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-file-signature"></i>&ensp;Nom</label>
                                                                                                        <input type="text" value="{{$value->nom}}" class="form-control"  id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-image"></i>&ensp;Image</label>
                                                                                                        <div class="custom-file">
                                                                                                            <input type="file" name="photo" class="form-control" id="customFile" accept=".png,.gpg,.gpeg">
                                                                                                            <label class="custom-file-label" for="customFile">Selectionnez l'image</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 col-md-6 col-ml-6 col-lg-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                            <input type="text" value="{{$value->description}}" class="form-control"  id="description" name="description" placeholder="Description de La Catégorie">
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
                                                <!--CORBEILLE-->

                                                <div class="modal fade" id="corbeille{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-trash-restore"></i></span>&ensp;Supprimer la Catégorie: {{$value->nom}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form method="post" action="{{route('corbeilleCategorie')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <!--corp du formulaire debut-->
                                                                    <div class="" >
                                                                        <div class="container-fluid" >
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="container-fluid">
                                                                                        <div class="row">
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-file-signature"></i>&ensp;Nom</label>
                                                                                                    <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                <div class="form-group pt-2">
                                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt"></i>&ensp;Description</label>
                                                                                                    <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6 col-md-6 col-ml-6 col-lg-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
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
                                                            <div class="modal-headerbgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                <h4 class="modal-title" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-trash-restore"></i></span>&ensp;Supprimer la Catégorie : {{$value->nom}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('supprimerCategorie')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                        <div class="" >
                                                                            <div class="container-fluid" >
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-file-signature"></i>&ensp;Nom</label>
                                                                                                        <input type="text" value="{{$value->nom}}" class="form-control" readonly id="nom" name="nom" placeholder="Nom de La Catégorie">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12 col-md-12 col-ml-12 col-lg-12">
                                                                                                    <div class="form-group pt-2">
                                                                                                        <label class="d-flex"><i class="mdi mdi-receipt msicons"></i>&ensp;Description</label>
                                                                                                        <input type="text" value="{{$value->description}}" class="form-control" readonly id="description" name="description" placeholder="Description de La Catégorie">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6 col-md-6 col-ml-6 col-lg-6" style="background-image: url({{asset($value->le_profil)}});  background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
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
                                                        <a href="corbeilleAllcategorie" data-bs-toggle="tooltip" title="Tout Supprimer" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
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








