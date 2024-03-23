@extends('sites.menus.menu')
@section('titre')
    Favori
@endsection
@section('header')
@endsection
@section('corps')
    <div class="ct">
        <div>
            <div class="esp pb-4">
                 <!-- ...:::: Start Breadcrumb Section:::... -->
                <div class="breadcrumb-section breadcrumb-bg-color--golden ">
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="breadcrumb-title"><b>F</b>avori</h3>
                                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                                        <nav aria-label="breadcrumb">
                                            <ul>
                                                <li><a href="{{url('./siteaccueils')}}">Home</a></li>
                                                <li><a href="{{url('./leprofilclient')}}">Compte</a></li>
                                                <li class="active" aria-current="page">Mes Favoris</li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- ...:::: End Breadcrumb Section:::... -->

                <!-- ...:::: Start Wishlist Section:::... -->
                <div class="wishlist-section">
                    <!-- Start Cart Table -->
                    <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table_desc">
                                        <div class="table_page table-responsive">
                                            <table>
                                                <!-- Start Wishlist Table Head -->
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Delete</th>
                                                        <th class="product_thumb">Image</th>
                                                        <th class="product_name">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product_stock">Stock Status</th>
                                                        <th class="product_addcart">Add To Cart</th>
                                                    </tr>
                                                </thead> <!-- End Cart Table Head -->
                                                <tbody>
                                                    <!-- Start Wishlist Single Item-->

                                                    @if (Route::has('login'))
                                                        @auth
                                                            @foreach($mesfavoriesPrevisualisation as $key => $mesfavo)
                                                                <tr>
                                                                    <td class="product_remove"><a href="{{url('retirerfavoriclients',$mesfavo->id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Retier ce produit"><i class="fa fa-trash-o"></i></a></td>
                                                                    <td class="product_thumb"><a href="{{url('detailproduit',$mesfavo->id)}}"><img
                                                                                src="{{asset($mesfavo->produit->le_profil1)}}"
                                                                                alt="" class="img-thumbnail"></a></td>
                                                                    <td class="product_name"><a href="{{url('detailproduit',$mesfavo->id)}}">{{$mesfavo->produit->nom}}</a></td>
                                                                    <td class="product-price">
                                                                        @if($mesfavo->produit->solde!=null)
                                                                            {{$mesfavo->produit->solde}}
                                                                        @else
                                                                            {{$mesfavo->produit->prix}}
                                                                        @endif
                                                                    </td>
                                                                    <td class="product_stock">
                                                                        @if($mesfavo->produit->quanite !=null)
                                                                            Disponible
                                                                        @else
                                                                            Epuisé
                                                                        @endif
                                                                    </td>
                                                                    <td class="product_addcart">
                                                                        <form action="{{url('ajouterpanier',$mesfavo->id)}}" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" id="id" value="{{$mesfavo->id}}">
                                                                            <input  class=" btn btn-md btn-golden"
                                                                            type="submit" value="Ajouter au Panier"/>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                    @else
                                                    <td class=" text-center">
                                                        Vous n'avez pas de produit favori
                                                    </td>

                                                    @endauth
                                                    @endif


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Cart Table -->
                </div> <!-- ...:::: End Wishlist Section:::... -->

            </div>
        </div>

    </div>
@endsection
@section('footer')
@endsection

