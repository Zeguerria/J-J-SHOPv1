@extends('sites.menus.menu')
@section('titre')
    Panier
@endsection
@section('header')

@endsection
@section('corps')
<div class="div">
    <div class="breadcrumb-section breadcrumb-bg-color--golden ">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title"><b>M</b>on <b>p</b>anier</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{url('./siteaccueils')}}">Home</a></li>
                                    <li><a href="{{url('./leprofilclient')}}">Compte</a></li>
                                    <li class="active" aria-current="page">Panier</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- ...:::: Start Cart Section:::... -->
     <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Retirer</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Produit</th>
                                            <th class="product-price">Prix</th>
                                            <th class="product_quantity">Quantitée</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_total">Mettre à Jour</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <!-- Start Cart Single Item-->
                                            @foreach($monpanier as $key => $monpan)
                                                <tr>
                                                    <td class="product_remove">
                                                        <a href="{{url('retirerpanierclients',$monpan->id)}}"><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                    <td class="product_thumb">
                                                        <a href="{{url('detailproduit',$monpan->id)}}"><img src="{{asset($monpan->produit->le_profil1)}}" alt=""></a>
                                                    </td>
                                                    <td class="product_name">
                                                        <a href="{{url('detailproduit',$monpan->id)}}">{{$monpan->produit->nom}}</a>
                                                    </td>
                                                    <td class="product-price">
                                                        @if($monpan->produit->solde !=null)
                                                            {{$monpan->produit->solde}} FCFA
                                                        @else
                                                            {{$monpan->produit->prix}} FCFA

                                                        @endif
                                                    </td>
                                                    {{-- <td class="product_quantity">
                                                       <input min="1" max="100"  type="number" name="nombre" value="{{$monpan->nombre}}">
                                                    </td> --}}
                                                    <form action="{{route('modifierpanier')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$monpan->id}}">
                                                        <td class="product_quantity">
                                                            <input min="1" max="100"   type="number" name="nombre" value="{{$monpan->nombre}}">
                                                        </td>
                                                        <td class="product_total">{{$monpan->prix}}</td>
                                                        <td class="product_total">
                                                            <button type="submit" class="btn btn-md btn-golden">Mettre à Jour</button>
                                                        </td>
                                                    </form>



                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="cart_submit">
                                <button class="btn btn-md btn-golden" type="submit">update cart</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        {{-- <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Total du Panier</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    
                                        <p>Nom Produit :</p>
                                        <p>ntée :</p>
                                        <p>Quantitée :</p>
                                        <p>Prix :</p>
                                        {{-- <p class="cart_amount">$215.00</p> --}}
                                   
                                </div>
                                    @if (Route::has('login'))
                                    @auth
                                
                                        @foreach($monpanier as $key => $monpan)
                                        <div class="cart_subtotal text-center">
                                            <p>{{$monpan->produit->nom}} </p>
                                            <p class="text-center">
                                                @if($monpan->produit->solde !=null)
                                                    {{$monpan->produit->solde}} FCFA
                                                @else
                                                    {{$monpan->produit->prix}} FCFA

                                                @endif
                                            </p>
                                            <p class="text-center">{{$monpan->nombre}} </p>

                                            <p class="cart_amount text-center">{{$monpan->prix}} FCFA</p>
                                        </div>
                                        @endforeach
                                     @else
                                        <div class="cart_subtotal text-center">
                                            <p>Aucun </p>
                                            <p class="text-center">
                                                0
                                            </p>
                                            <p class="text-center">0 </p>

                                            <p class="cart_amount text-center">0 FCFA</p>
                                        </div>
                                 @endauth
                                 @endif
                                <a href="#">Calcul du Panier</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">
                                        @if (Route::has('login'))
                                        @auth
                                            {{$lasum}}
                                        @else
                                            0
                                        @endauth
                                        @endif
                                        FCFA
                                    </p>
                                </div>
                                <div class="checkout_btn">
                                    {{-- fare 1 cndt emcher la validation d'1 trc vde  --}}
                                    <a href="#" class="btn btn-md btn-golden">Procèder au Payement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

</div>
@endsection
@section('footer')
@endsection
