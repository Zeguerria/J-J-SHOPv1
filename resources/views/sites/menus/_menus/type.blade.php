 <!-- Start Offcanvas Addcart Section -->
 <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title"><b>M</b>on <b>P</b>anier</h4>
        <ul class="offcanvas-cart">
            @if (Route::has('login'))
            @auth

                @foreach($monpanierPrevisualisation as $key => $monpanier)


                    <li class="offcanvas-cart-item-single">
                        <div class="offcanvas-cart-item-block">
                            <a href="#" class="offcanvas-cart-item-image-link">
                                <img src="{{asset($monpanier->produit->le_profil1)}}" alt=""
                                    class="offcanvas-cart-image">
                            </a>
                            <div class="offcanvas-cart-item-content">
                                <a href="#" class="offcanvas-cart-item-link">{{$monpanier->produit->nom}}</a>
                                <div class="offcanvas-cart-item-details">
                                    <span class="offcanvas-cart-item-details-quantity">
                                        @if($monpanier->produit->solde !=null)
                                            {{$monpanier->produit->solde}} FCFA
                                        @else
                                        {{$monpanier->produit->prix}} FCFA 
                                        @endif
                                    </span>
                                    <span class="offcanvas-cart-item-details-price">&ensp;x {{$monpanier->nombre}} = {{$monpanier->prix}} FCFA</span>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-cart-item-delete text-right">
                            <a href="{{url('retirerpanierclients',$monpanier->id)}}" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                @endforeach
            @else
                <h5>Votre Panier est Vide</h5>
                @endauth
            @endif
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Total :</span>
            <span class="offcanvas-cart-total-price-value">
                @if (Route::has('login'))
                @auth
                    {{$lasum}}
                @else
                    0
                @endauth
                @endif

                 FCFA

                </span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li><a href="{{url('./clientcards')}}" class="btn btn-block btn-pink">Voir mon Panier</a></li>
            <li><a href="{{url('./clientpayements')}}" class=" btn btn-block btn-pink mt-5">Payement</a></li>
        </ul>
    </div> <!-- End  Offcanvas Addcart Wrapper -->

</div> <!-- End  Offcanvas Addcart Section -->

<!-- Start Offcanvas Mobile Menu Section -->
<div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- ENd Offcanvas Header -->

    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-wishlist-wrapper">
        <h4 class="offcanvas-title"><b>M</b>es <b>F</b>avoris</h4>
        <ul class="offcanvas-wishlist">
            {{-- prevu mesfavoriesPrevisualisation --}}
            @if (Route::has('login'))
                @auth
                    @foreach($mesfavoriesPrevisualisation as $key => $mesfavo)
                    <li class="offcanvas-wishlist-item-single">
                        <div class="offcanvas-wishlist-item-block">
                            <a href="{{url('detailproduit',$mesfavo->id)}}" class="offcanvas-wishlist-item-image-link">
                                <img src="{{asset($mesfavo->produit->le_profil1)}}" alt=""
                                    class="offcanvas-wishlist-image">
                            </a>
                            <div class="offcanvas-wishlist-item-content">
                                <a href="{{url('detailproduit',$mesfavo->id)}}" class="offcanvas-wishlist-item-link">{{$mesfavo->produit->nom}}</a>

                                <div class="offcanvas-wishlist-item-details">
                                    @if($mesfavo->produit->solde!=null)
                                        <div class="content-right">
                                            <span class="offcanvas-wishlist-item-details-price">{{$mesfavo->produit->solde}}</span>
                                        </div>
                                    @else
                                        <div class="content-right">
                                            <span class="offcanvas-wishlist-item-details-price">{{$mesfavo->produit->prix}}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas-wishlist-item-delete text-right">
                            <a  class="offcanvas-wishlist-item-delete" href="{{url('retirerfavoriclients',$mesfavo->id)}}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Retier ce produit"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </li>
                    @endforeach
                @else
                    <h5>Vous n'avez pas d produit favoris</h5>
                @endauth
            @endif
        </ul>
        <ul class="offcanvas-wishlist-action-button">
            <li><a href="{{url('./favoriduclient')}}" class="btn btn-block btn-pink">Voir tous mes favoris</a></li>
        </ul>
    </div> <!-- End Offcanvas Mobile Menu Wrapper -->

</div> <!-- End Offcanvas Mobile Menu Section -->

<!-- Start Offcanvas Search Bar Section -->
<div id="search" class="search-modal">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-lg btn-pink">Search</button>
    </form>
</div>
<!-- End Offcanvas Search Bar Section -->
