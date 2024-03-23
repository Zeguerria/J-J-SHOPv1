<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid pt-3">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title pt-3">Nos Nouveaux Produits</h3>
                            <p>Soyez les premiers a découvrir nos nouveaux produits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-2rows default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-2row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product Default Single Item -->
                                @foreach($produitnews as $key =>$new)
                                    <div class="product-default-single-item product-color--pink swiper-slide">
                                        <div class="image-box">
                                            <a href="{{url('detailproduit',$new->id)}}" class="image-link">
                                                <img src="{{asset($new->le_profil1)}}" alt="" style="height: 390px;  weight : 300 px;">
                                                <img src="{{asset($new->le_profil2)}}" alt="" style="height: 390px;  weight : 300 px;">
                                            </a>
                                            <div class="tag">
                                                @if($new->quantite!=null)
                                                    <span>Disponible</span>
                                                @elseif($new->quantite==0)
                                                    <span>Ecoulé</span>

                                                @else
                                                    <span>Ecoulé</span>
                                                @endif

                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <form action="{{url('ajouterpanier',$new->id)}}" method="POST">
                                                        @csrf
                                                        {{-- <input type="hidden" name="id" value="{{$prodaff->id}}"> --}}
                                                        {{-- <button type="submit" class="btn">Ajouter Au Panier</button> --}}
                                                        <input type="submit"  value="Ajouter au Panier" class="option2"  >
                                                    </form>
                                                </div>
                                                <div class="action-link-right">
                                                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a> --}}
                                                    {{-- <a href="wishlist.html"><i class="icon-heart"></i></a> --}}
                                                    <form action="{{route('LikeProduit', $new->id)}}" method="POST" id="id">
                                                        @csrf
                                                        <input type="hidden" id="id" value="{{$new->id}}">
                                                        <button class="btn button " type="submit"><i class="icon-heart"></i></button>

                                                    </form>
                                                    {{-- <a href="compare.html"><i class="icon-shuffle"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="{{url('detailproduit',$new->id)}}">{{$new->nom}}</a></h6>
                                                @if($new->parametre->id==2)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($new->parametre->id==3)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($new->parametre->id==4)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($new->parametre->id==5)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @else
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @endif
                                            </div>
                                            <div class="content-right">
                                                @if($new->solde!=null)
                                                    <span class="price"><del>{{$new->prix}} FCFA</del>{{$new->solde}} FCFA</span>
                                                @else
                                                    <span class="price">{{$new->prix}} FCFA</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->
