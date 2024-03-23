<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-fluid section-inner-bg ">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">Meilleurs Produits</h3>
                            <p>retrouvez nos meilleurs produits du moment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->
                                <!-- Start Product Default Single Item -->
                                @foreach ($produitaffiches as $key=>$prodaff)
                                    <div class="product-default-single-item product-color--pink swiper-slide">
                                        <div class="image-box">
                                            <a href="{{url('detailproduit',$prodaff->id)}}" class="image-link">
                                                <img src="{{asset($prodaff->le_profil1)}}" alt="" style="height: 390px;  weight : 300 px;">
                                                <img src="{{asset($prodaff->le_profil2)}}" alt="" style="height: 390px;  weight : 300 px;">
                                            </a>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <form action="{{url('ajouterpanier',$prodaff->id)}}" method="POST">
                                                        @csrf
                                                        {{-- <input type="hidden" name="id" value="{{$prodaff->id}}"> --}}
                                                        {{-- <button type="submit" class="btn">Ajouter Au Panier</button> --}}
                                                        <input type="submit"  value="Ajouter au Panier" class="option2" >
                                                    </form>

                                                </div>
                                                {{-- <form action="{{route('LikeProduit', $ptf->id))}}" method="POST" id="id">
                                                    @csrf
                                                    <input type="hidden" id="id" value="{{$ptf->id}}">
                                                    <button class="btn button " type="submit"><i class="icon-heart"></i></button>

                                                </form> --}}
                                                <div class="action-link-right">
                                                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a> --}}
                                                    <form action="{{route('LikeProduit', $prodaff->id)}}" method="POST" id="id">
                                                        @csrf
                                                        <input type="hidden" id="id" value="{{$prodaff->id}}">
                                                        <button class="btn button " type="submit"><i class="icon-heart" ></i></button>

                                                    </form>
                                                    {{-- <a href="wishlist.html"><i class="icon-heart"></i></a> --}}
                                                    {{-- <a href="compare.html"><i class="icon-shuffle"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="{{url('detailproduit',$prodaff->id)}}">{{$prodaff->nom}}</a></h6>
                                                @if($prodaff->parametre->id==2)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($prodaff->parametre->id==3)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($prodaff->parametre->id==4)
                                                    <ul class="review-star">
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="fill"><i class="ion-android-star"></i></li>
                                                        <li class="empty"><i class="ion-android-star"></i></li>
                                                    </ul>
                                                @elseif($prodaff->parametre->id==5)
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
                                                @if($prodaff->solde!=null)
                                                   <span class="price"><del>{{$prodaff->prix}} FCFA</del>{{$prodaff->solde}} FCFA</span>
                                                @else
                                                    <span class="price">{{$prodaff->prix}} FCFA</span>
                                                @endif
                                                {{-- <span class="price">$68</span> --}}
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
