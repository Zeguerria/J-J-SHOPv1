@extends('sites.menus.menu')
@section('titre')
    Détail
@endsection
@section('header')
@endsection
@section('corps')
    <div>
         <!-- ...:::: Start Breadcrumb Section:::... -->
        <div class="breadcrumb-section breadcrumb-bg-color--golden">
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="breadcrumb-title"><b>D</b>etails</h3>
                            <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                                <nav aria-label="breadcrumb">
                                    <ul>
                                        <li><a href="{{url('./siteaccueils')}}">Home</a></li>
                                        <li><a href="{{url('./allmyproducts')}}">Produits</a></li>
                                        <li class="active" aria-current="page">Details du Produit</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ...:::: End Breadcrumb Section:::... -->

        <!-- Start Product Details Section -->
        <div class="product-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                            <!-- Start Large Image -->
                            <div class="product-large-image product-large-image-horaizontal swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                    <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                        <img src="{{asset($produits->le_profil1)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- End Large Image -->
                            <!-- Start Thumbnail Image -->

                                <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                                    <div class="swiper-wrapper">
                                        @foreach($produitmemecategorie as $key => $value)
                                        <div class="product-image-thumb-single swiper-slide">
                                            <img class="img-fluid" src="{{asset($value->le_profil1)}}"
                                            alt="" style="height: 90px; weight : 10px;">
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="gallery-thumb-arrow swiper-button-next"></div>
                                    <div class="gallery-thumb-arrow swiper-button-prev"></div>
                                </div>

                            <!-- End Thumbnail Image -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="product-details-content-area product-details--golden" data-aos="fade-up"
                            data-aos-delay="200">
                            <!-- Start  Product Details Text Area-->
                            <div class="product-details-text">
                                <h4 class="title">{{$produits->nom}}</h4>
                                <div class="d-flex align-items-center">
                                    <ul class="review-star">
                                        @if($produits->parametre->id==2)
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                        @elseif($produits->parametre->id==3)
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                        @elseif($produits->parametre->id==4)
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                        @elseif($produits->parametre->id==5)
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                        @else
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="fill"><i class="ion-android-star"></i></li>
                                            <li class="empty"><i class="ion-android-star"></i></li>
                                            <li class="empty"><i class="ion-android-star"></i></li>
                                            <li class="empty"><i class="ion-android-star"></i></li>
                                        @endif
                                    </ul>
                                    {{-- <a href="#" class="customer-review ml-2">(customer review )</a> --}}
                                </div>
                                <div class="price">
                                    @if($produits->solde!=null)
                                        <del>{{$produits->prix}} FCFA</del>&ensp;{{$produits->solde}} FCFA
                                     @else
                                        {{$produits->prix}} FCFA
                                    @endif
                                </div>
                                <p>{{$produits->description}}</p>
                            </div> <!-- End  Product Details Text Area-->
                            <!-- Start Product Variable Area -->
                            <div class="product-details-variable">
                                <h4 class="title">Options Possibles</h4>
                                <!-- Product Variable Single Item -->
                                <div class="variable-single-item">
                                    <div class="product-stock"> <span class="product-stock-in"><i class="ion-checkmark-circled"></i></span> &ensp;{{$produits->quantite}} EN STOCK</div>
                                </div>
                                <!-- Product Variable Single Item -->
                                <form action="{{url('ajouterpanier',$produits->id)}}" method="POST">
                                    @csrf
                                    <div class="d-flex align-items-center ">
                                        <div class="variable-single-item ">
                                            <span>Quantité</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" value="nombre" name="nombre" max="{{$produits->quantite}}" value="1" type="number">
                                            </div>
                                        </div>

                                        <div class="product-add-to-cart-btn">
                                            <input  class="btn btn-block btn-lg btn-black-default-hover"
                                            type="submit" value="+ Ajouter au Panier"/>
                                        </div>
                                    </div>
                                </form>
                                <!-- Start  Product Details Meta Area-->
                                <div class="product-details-meta mb-20">
                                    <form action="{{route('likeProduit', $produits->id)}}" method="POST">
                                        {{-- {{route('LikeProduit', $produits->id)}} --}}
                                        {{-- {{route('likeProduit')}} --}}
                                        @csrf
                                        {{-- @method('GET') --}}
                                            <input type="hidden" name="id" value="{{$produits->id}}">
                                            <button class="btn button " type="submit"><i class="icon-heart"></i>&ensp; Ajouter en favori</button>
                                    </form>
                                    {{-- <a href="compare.html" class="icon-space-right"><i class="icon-refresh"></i>Compare</a> --}}
                                </div>
                                <!-- End  Product Details Meta Area-->
                            </div> <!-- End Product Variable Area -->

                            <!-- Start  Product Details Catagories Area-->
                            <div class="product-details-catagory mb-2">
                                <span class="title">CATEGORIES:</span>
                                <ul>
                                        <li><a href="{{url('categorieproduit',$produits->id)}}">{{$produits->categorie->nom}}</a></li>
                                </ul>
                            </div> <!-- End  Product Details Catagories Area-->
                            <!-- Start  Product Details Social Area-->
                            {{-- <div class="product-details-social">
                                <span class="title">SHARE THIS PRODUCT:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- End  Product Details Social Area--> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Product Details Section -->

        {{-- <!-- Start Product Content Tab Section -->
        <div class="product-details-content-tab-section section-top-gap-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                            <!-- Start Product Details Tab Button -->
                            <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                                <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                        Description
                                    </a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                        Specification
                                    </a></li>
                                <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                        Reviews (1)
                                    </a></li>
                            </ul> <!-- End Product Details Tab Button -->

                            <!-- Start Product Details Tab Content -->
                            <div class="product-details-content-tab">
                                <div class="tab-content">
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane active show" id="description">
                                        <div class="single-tab-content-item">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                                nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                                ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                                adipiscing cursus eu, suscipit id nulla. </p>
                                            <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem,
                                                quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies
                                                massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero
                                                hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus
                                                nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus,
                                                consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in
                                                imperdiet ligula euismod eget</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="specification">
                                        <div class="single-tab-content-item">
                                            <table class="table table-bordered mb-20">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Compositions</th>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Styles</th>
                                                        <td>Girly</td>
                                                    <tr>
                                                        <th scope="row">Properties</th>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Fashion has been creating well-designed collections since 2010. The brand
                                                offers feminine designs delivering stylish separates and statement dresses
                                                which have since evolved into a full ready-to-wear collection in which every
                                                item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                                looks with youthful elegance and unmistakable signature style. All the
                                                beautiful pieces are made in Italy and manufactured with the greatest
                                                attention. Now Fashion extends to a range of accessories including shoes,
                                                hats, belts and more!</p>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                    <!-- Start Product Details Tab Content Singel -->
                                    <div class="tab-pane" id="review">
                                        <div class="single-tab-content-item">
                                            <!-- Start - Review Comment -->
                                            <ul class="comment">
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="assets/images/user/image-1.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Kaedyn Fraser</h6>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="empty"><i class="ion-android-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Tempora inventore dolorem a unde modi iste odio amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum eius
                                                                    laboriosam, maiores praesentium explicabo enim dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Start - Review Comment Reply-->
                                                    <ul class="comment-reply">
                                                        <li class="comment-reply-list">
                                                            <div class="comment-wrapper">
                                                                <div class="comment-img">
                                                                    <img src="assets/images/user/image-2.png" alt="">
                                                                </div>
                                                                <div class="comment-content">
                                                                    <div class="comment-content-top">
                                                                        <div class="comment-content-left">
                                                                            <h6 class="comment-name">Oaklee Odom</h6>
                                                                        </div>
                                                                        <div class="comment-content-right">
                                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="para-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Tempora inventore dolorem a
                                                                            unde modi iste odio amet, fugit fuga aliquam,
                                                                            voluptatem maiores animi dolor nulla magnam ea!
                                                                            Dignissimos aspernatur cumque nam quod sint
                                                                            provident modi alias culpa, inventore deserunt
                                                                            accusantium amet earum soluta consequatur quasi
                                                                            eum eius laboriosam, maiores praesentium
                                                                            explicabo enim dolores quaerat! Voluptas ad
                                                                            ullam quia odio sint sunt. Ipsam officia, saepe
                                                                            repellat. </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul> <!-- End - Review Comment Reply-->
                                                </li> <!-- End - Review Comment list-->
                                                <!-- Start - Review Comment list-->
                                                <li class="comment-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="assets/images/user/image-3.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Jaydin Jones</h6>
                                                                    <ul class="review-star">
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="fill"><i class="ion-android-star"></i>
                                                                        </li>
                                                                        <li class="empty"><i class="ion-android-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                    Tempora inventore dolorem a unde modi iste odio amet,
                                                                    fugit fuga aliquam, voluptatem maiores animi dolor nulla
                                                                    magnam ea! Dignissimos aspernatur cumque nam quod sint
                                                                    provident modi alias culpa, inventore deserunt
                                                                    accusantium amet earum soluta consequatur quasi eum eius
                                                                    laboriosam, maiores praesentium explicabo enim dolores
                                                                    quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam
                                                                    officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> <!-- End - Review Comment list-->
                                            </ul> <!-- End - Review Comment -->
                                            <div class="review-form">
                                                <div class="review-form-text-top">
                                                    <h5>ADD A REVIEW</h5>
                                                    <p>Your email address will not be published. Required fields are marked
                                                        *</p>
                                                </div>

                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="default-form-box">
                                                                <label for="comment-name">Your name <span>*</span></label>
                                                                <input id="comment-name" type="text"
                                                                    placeholder="Enter your name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="default-form-box">
                                                                <label for="comment-email">Your Email <span>*</span></label>
                                                                <input id="comment-email" type="email"
                                                                    placeholder="Enter your email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="default-form-box">
                                                                <label for="comment-review-text">Your review
                                                                    <span>*</span></label>
                                                                <textarea id="comment-review-text"
                                                                    placeholder="Write a review" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-md btn-black-default-hover"
                                                                type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- End Product Details Tab Content Singel -->
                                </div>
                            </div> <!-- End Product Details Tab Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Product Content Tab Section --> --}}

        <!-- Start Product Default Slider Section -->
        <div class="product-default-slider-section section-top-gap-100 section-fluid">
            <!-- Start Section Content Text Area -->
            <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-content-gap">
                                <div class="secton-content">
                                    <h3 class="section-title"><b>P</b>RODUITS <b>S</b>IMILAIRES</h3>
                                    <p>Produit ayant la meme catégorie que : {{$produits->nom}}</p>
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
                                        @foreach($produitmemecategorie as $key => $value)
                                            <div class="product-default-single-item product-color--golden swiper-slide">
                                                <div class="image-box">
                                                    <a href="{{url('detailproduit',$value->id)}}" class="image-link">
                                                        <img src="{{asset($value->le_profil1)}}"
                                                        alt="" style="height: 390px;  weight : 300 px;">
                                                        <img src="{{asset($value->le_profil2)}}"
                                                        alt="" style="height: 390px;  weight : 300 px;">
                                                    </a>
                                                    <div class="action-link">
                                                        <div class="action-link-left">
                                                            <form action="{{url('ajouterpanier',$value->id)}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" id="id" value="{{$value->id}}">

                                                                {{-- <a class="btn" type="submit">Ajouter au Panier</a> --}}
                                                                <input  class="btn"
                                                                type="submit" value="Ajouter au Panier"/>
                                                            </form>
                                                            
                                                        </div>
                                                        <div class="action-link-right">
                                                            {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a> --}}
                                                            <form action="{{route('LikeProduit', $value->id)}}" method="POST" id="id">
                                                                @csrf
                                                                <input type="hidden" id="id" value="{{$value->id}}">
                                                                <button class="btn button " type="submit"><i class="icon-heart"></i></button>
                                                                   
                                                            </form>
                                                            {{-- <a href="compare.html"><i class="icon-shuffle"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <div class="content-left">
                                                        <h6 class="title"><a href="{{url('detailproduit',$value->id)}}">{{$value->nom}}</a></h6>
                                                        @if($value->parametre->id==2)
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        @elseif($value->parametre->id==3)
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        @elseif($value->parametre->id==4)
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        @elseif($value->parametre->id==5)
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
                                                        @if($value->solde!=null)
                                                            <span class="price"><del>{{$value->prix}} FCFA</del>{{$value->solde}}</span>
                                                        @else
                                                            <span class="price">{{$value->prix}} FCFA</span>
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

    </div>
@endsection
@section('footer')
@endsection
