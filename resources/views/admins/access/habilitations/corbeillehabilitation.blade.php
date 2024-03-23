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
                    <h4 class="mb-0 bread" style="color:#D9B8F7;"><img src="{{asset('glbal/icon/bin-file.gif')}}" alt="" class="img img-circle" width="50" height="50">&ensp;Corbeilles</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation" class="d-flex justify-content-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/adminaccueils"  style="color: rgb(0, 191, 255);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color:#B460B5; " >Corbeilles</li>
                        <li class="breadcrumb-item active" aria-current="page"  style="color:#B460B5; ">Habilitation</li>
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
                                                <label for=""><a href="./habilitation" class="btn " id="" data-bs-toggle="tooltip" title="total habilitations"><i class="fa fa-clipboard-check" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$HabilitationTotal}}</sup></label>
                                                <label for=""><a href="./habilitationCorbeille" class="btn " id="" data-bs-toggle="tooltip" title="total habilitation en corbeille"><i class="fa fa-trash msicons" style="color :#D9B8F7; font-size: 20px;"></i></a><sup style="color :#D9B8F7;">{{$HabilitationTotalC}}</sup></label>
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
                                  <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                    @foreach($habilitations as $key => $value)
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>


                                            <td class="text-center"> {{$value->code}}</td>

                                            <td class="text-center">{{$value->libelle}}</td>
                                            <td class="text-center">{{$value->description}}</td>
                                            <td style="" class="sorting_1 text-center">
                                                <div class="btn-group">
                                                    <div style="">
                                                        <div class=" ">
                                                            <div class="btn-group">
                                                                <div style="">
                                                                    <div class="">
                                                                        <div class="btn-group btn-block">
                                                                            <a type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Consulter" data-toggle="modal" data-target="#consulter{{$value->id}}"><i class="fas fa-eye" style="font-size: 20px; color:#050034;"></i></a>
                                                                            <a type="button" class="btn btn-outline-warning" data-bs-toggle="tooltip" data-placement="bottom" title="Restorer" data-toggle="modal" data-target="#modifier{{$value->id}}"><i class="fas fa-recycle" style="font-size: 20px; color:#050034;"></i></a>
                                                                            <a type="button" class="btn btn-danger"  data-bs-toggle="tooltip" title="Supprimer" data-toggle="modal" data-target="#supprimer{{$value->id}}"><i class="fas fa-trash" style="font-size: 20px; color:#050034;"></i></a>
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
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-clipboard-list"></i></span>&ensp;Consulter l'habilitation' : {{$value->libelle}}</h4>
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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                                                                <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
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
                                                                <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-retweet"></i></span>&ensp;Restorer l'habilitation' : {{$value->libelle}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('recupHabilitation')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                    <div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                    <input type="text" class="form-control" value="{{$value->code}}" readonly id="consulter{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle :</label>
                                                                                    <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="consulter{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                    <input type="text" class="form-control" value="{{$value->description}}" readonly id="consulter{{$value->id}}" name="description" placeholder="Entrer la description">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                                        <button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-outline-danger btn-round"  data-dismiss="modal" style=" font-family: italic ;color:#D9B8F7;"><i class="fas fa-exclamation-triangle msicons"></i>&ensp;Fermer</button>
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
                                                        <div class="modal-header bgnav" style="background-image: url({{asset('glbal/theme/t2.jpg')}}) ;  background-size: cover; background-repeat: no-repeat;">
                                                            <h4 class="modal-title fw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-minus-square"></i></span>&ensp;Supprimer l'habilitation : {{$value->libelle}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" style="background: var(--c-color2);">
                                                            <form method="post" action="{{route('corbeilleHabilitation')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                    <!--corp du formulaire debut-->
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fa fa-code msicons" aria-hidden="true"></i>&ensp;Code</label>
                                                                                        <input type="text" class="form-control" value="{{$value->code}}" readonly id="" name="code" placeholder="Entrer la code">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="consulter{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                        <input type="text" class="form-control" value="{{$value->libelle}}" readonly id="" name="libelle" placeholder="Entrer le libellé">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                        <input type="text" class="form-control" value="{{$value->description}}" readonly id="description" name="description" placeholder="Entrer la description">
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
                                                                <h4 class="modal-titlefw-bold" style="font-size : 35px; font-weight: 900; color :#D9B8F7; "><span><i class="fas fa-minus-square"></i></span>&ensp;Supprimer l'habilitation : {{$value->libelle}}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #B460B5;">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background: var(--c-color2);">
                                                                <form method="post" action="{{route('supprimerHabilitation')}}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$value->id}}">
                                                                        <!--corp du formulaire debut-->
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="supprimer{{$value->id}}"><i class="fa fa-commenting msicons" aria-hidden="true"></i>&ensp;Code </label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->code}}" id="suprimer{{$value->id}}" name="code" placeholder="Entrer le code">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">

                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;" for="suprimer{{$value->id}}"><i class="fa fa-crosshairs msicons" aria-hidden="true"></i>&ensp;Libelle </label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->libelle}}" id="suprimer{{$value->id}}" name="libelle" placeholder="Entrer le libellé">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="d-flex" style=" color: var(--color-t); font-family: italic;"><i class="fas fa-comment-alt" aria-hidden="true"></i>&ensp;Description :</label>
                                                                                        <input type="text" class="form-control" readonly value="{{$value->description}}" id="suprimer{{$value->id}}" name="description" placeholder="Entrer la description">
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
                                                    <<div class="col" >
                                                        <a href="deleteAllhabilitation" data-bs-toggle="tooltip" title="Tout Vider" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-trash" style="font-size: 20px; color:#ff0000;"></i></a>&emsp;
                                                        <a href="recupAllhabilitation" data-bs-toggle="tooltip" title="Tout Restorer" data-placement="bottom" class="btn btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fas fa-sync-alt" style="font-size: 20px; color:#3300ff;"></i></a>&emsp;
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
