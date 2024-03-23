@extends('sites.menus.menu')
@section('titre')
    Produits
@endsection
@section('header')
@endsection
@section('corps')
    <div>
        <main data-barba="containerBarba" data-barba-namespace="page">
            <!-- ...:::: Start Breadcrumb Section:::... style="background: linear-gradient(to bottom,#fff 0.1%,#A757C4 1%, #220D45 100% , #BA84ED 50%);"-->
            <div class="breadcrumb-section breadcrumb-bg-color--golden" >
                <div class="breadcrumb-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="breadcrumb-title"><b>P</b>roduits</h3>
                                <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                                    <nav aria-label="breadcrumb">
                                        <ul>
                                            <li><a href="{{url('./siteaccueils')}}">Home</a></li>
                                            <li><a href="{{url('./allmyproducts')}}">Produits</a></li>
                                            <li class="active" aria-current="page">Liste de Produits</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ...:::: End Breadcrumb Section:::... -->

            <!-- ...:::: Start Shop Section:::... -->
            <div class="shop-section">
                <div class="container">
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-3">
                            <!-- Start Sidebar Area -->
                            <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                                <!-- Start Single Sidebar Widget -->
                                <div class="sidebar-single-widget">
                                    <h6 class="sidebar-title"> <b>C</b>ATEGORIES</h6>
                                    <div class="sidebar-content">
                                        <ul class="sidebar-menu">
                                            {{-- /categorieproduit/{{$cat->id}}  --}}
                                            @foreach($categories as $key => $cat)
                                                <li><a href="{{url('categorieproduit',$cat->id)}}">{{$cat->nom}}</a></li>
                                            @endforeach
                                            <li><a href="{{url('./allmyproducts')}}">Tous les produits</a></li>

                                        </ul>
                                    </div>
                                </div> <!-- End Single Sidebar Widget -->

                                <!-- Start Single Sidebar Widget -->
                                <div class="sidebar-single-widget">
                                    <h6 class="sidebar-title"><b >F</b>ILTRE Par PRIX</h6>
                                    <div class="sidebar-content">
                                        <div id="slider-range"></div>
                                        <div class="filter-type-price">
                                            <label for="amount">Price range:</label>
                                            <input type="text" id="amount">
                                        </div>
                                    </div>
                                </div> <!-- End Single Sidebar Widget -->

                                <div class="sidebar-single-widget">
                                    @foreach($produits as $key => $produit)
                                    <h6 class="sidebar-title"><b >D</b>eCouvrez : {{$produit->nom}}</h6>
                                        <div class="sidebar-content">
                                            <a href="{{url('detailproduit',$produit->id)}}" class="sidebar-banner img-hover-zoom">
                                                <img class="img-fluid" src="{{asset($produit->le_profil1)}}" alt="">
                                            </a>
                                        </div>
                                    @endforeach
                                </div> <!-- End Single Sidebar Widget -->

                            </div> <!-- End Sidebar Area -->
                        </div>
                        <div class="col-lg-9">
                            <!-- Start Shop Product Sorting Section -->
                            <div class="shop-sort-section">
                                <div class="container">
                                    <div class="row">
                                        <!-- Start Sort Wrapper Box -->
                                        <div class="sort-box d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column"
                                            data-aos="fade-up" data-aos-delay="0">
                                            <!-- Start Sort tab Button -->
                                            <div class="sort-tablist d-flex align-items-center">
                                                <ul class="tablist nav sort-tab-btn">
                                                    <li><a class="nav-link" data-bs-toggle="tab" href="#layout-3-grid"><img src="{{asset('sites/assets/images/icons/bkg_grid.png')}}" alt=""></a></li>
                                                    <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-list"><img src="{{asset('sites/assets/images/icons/bkg_list.png')}}" alt=""></a></li>
                                                </ul>

                                                <!-- Start Page Amount -->

                                                <div class="page-amount ml-2">
                                                    <span>
                                                        <label for="">
                                                            Showing
                                                            {{$produits->currentPage()}}
                                                        </label> –
                                                        {{-- {{$produits->url($page)}} --}}
                                                        of
                                                            <label>
                                                                {{$produits->total()}}

                                                            </label>
                                                        results
                                                    </span>
                                                </div> <!-- End Page Amount -->
                                            </div> <!-- End Sort tab Button -->

                                            <!-- Start Sort Select Option -->
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <label class="mr-2"> <b style="Color: #FF365D;">A</b>fficher Par :</label>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item sort-font" href="{{ URL::current()."?sort=Default" }}">Default </a></li>
                                                        <li><a class="dropdown-item sort-font" href="{{ URL::current().'?sort=Prix_Croissant' }}">Prix Croissant </a></li>
                                                        <li><a class="dropdown-item sort-font" href="{{ URL::current().'?sort=Prix_Decroissant' }}">Prix Decroissant</a></li>
                                                        <li><a class="dropdown-item sort-font" href="{{ URL::current().'?sort=Nouveauté' }}">Nouveauté</a></li>
                                                        <li><a class="dropdown-item sort-font"href="{{ URL::current().'?sort=Etat' }}">Etat</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> <!-- Start Sort Wrapper Box -->
                                    </div>
                                </div>
                            </div> <!-- End Section Content -->

                            <!-- Start Tab Wrapper -->
                            <div class="sort-product-tab-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="tab-content tab-animate-zoom">
                                                <!-- Start Grid View Product -->
                                                <div class="tab-pane sort-layout-single" id="layout-3-grid">
                                                    <div class="row">
                                                        @foreach($produits as $key => $prod)
                                                            <div class="col-xl-4 col-sm-6 col-12">
                                                                <!-- Start Product Default Single Item -->
                                                                <div class="product-default-single-item product-color--golden">
                                                                    <div class="image-box">
                                                                        <a href="{{url('detailproduit',$prod->id)}}" class="image-link">
                                                                            <img src="{{asset($prod->le_profil1)}}" alt="" style="height: 390px;  weight : 300 px;">
                                                                            <img src="{{asset($prod->le_profil2)}}" alt="" style="height: 390px;  weight : 300 px;">
                                                                        </a>
                                                                        <div class="action-link">
                                                                            <div class="action-link-left">
                                                                                <a href="#" data-bs-toggle="modal"
                                                                                    data-bs-target="#modalAddcart">Ajouter Au Panier</a>
                                                                            </div>
                                                                            <div class="action-link-right">
                                                                                {{-- <a href="#" data-bs-toggle="modal"
                                                                                    data-bs-target="#modalQuickview"><i
                                                                                        class="icon-magnifier"></i></a> --}}
                                                                                {{-- <a href="wishlist.html"><i
                                                                                        class="icon-heart"></i></a> --}}
                                                                                        <form action="{{route('LikeProduit', $prod->id)}}" method="POST" id="id">
                                                                                            @csrf
                                                                                            <input type="hidden" id="id" value="{{$prod->id}}">
                                                                                            <button class="btn button " type="submit"><i class="icon-heart" style="color: aliceblue;"></i></button>

                                                                                        </form>
                                                                                {{-- <a href="compare.html"><i
                                                                                        class="icon-shuffle"></i></a> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="content-left">
                                                                            <h6 class="title"><a href="{{url('detailproduit',$prod->id)}}">{{$prod->nom}}</a></h6>
                                                                            @if($prod->parametre->id==2)
                                                                                <ul class="review-star">
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                </ul>
                                                                            @elseif($prod->parametre->id==3)
                                                                                <ul class="review-star">
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                </ul>
                                                                            @elseif($prod->parametre->id==4)
                                                                                <ul class="review-star">
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="fill"><i class="ion-android-star"></i></li>
                                                                                    <li class="empty"><i class="ion-android-star"></i></li>
                                                                                </ul>
                                                                            @elseif($prod->parametre->id==5)
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
                                                                            @if($prod->solde!=null)
                                                                                <span class="price"><del>{{$prod->prix}} FCFA</del>&ensp;{{$prod->solde}} FCFA</span>
                                                                            @else
                                                                                <span class="price">{{$prod->prix}} FCFA</span>
                                                                            @endif
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- End Product Default Single Item -->
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div> <!-- End Grid View Product -->
                                                <!-- Start List View Product -->
                                                <div class="tab-pane active show sort-layout-single" id="layout-list">
                                                    <div class="row">
                                                        @foreach($produits as $key => $prod)
                                                            <div class="col-12">
                                                                <!-- Start Product Defautlt Single -->
                                                                <div class="product-list-single product-color--golden"
                                                                    data-aos="fade-up" data-aos-delay="0">
                                                                    <a href="{{url('detailproduit',$prod->id)}}" class="product-list-img-link">
                                                                        <img class="img-fluid"
                                                                            src="{{asset($prod->le_profil1)}}" alt="" style="height: 100px;  " >
                                                                        <img class="img-fluid"
                                                                            src="{{asset($prod->le_profil2)}}" alt="" style="height: 100px;" >
                                                                    </a>
                                                                    <div class="product-list-content">
                                                                        <h5 class="product-list-link"><a href="{{url('detailproduit',$prod->id)}}">{{$prod->nom}}</a></h5>
                                                                        @if($prod->parametre->id==2)
                                                                            <ul class="review-star">
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                            </ul>
                                                                        @elseif($prod->parametre->id==3)
                                                                            <ul class="review-star">
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                            </ul>
                                                                        @elseif($prod->parametre->id==4)
                                                                            <ul class="review-star">
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                                            </ul>
                                                                        @elseif($prod->parametre->id==5)
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
                                                                        @if($prod->solde!=null)
                                                                            <span class="price"><del>{{$prod->prix}} FCFA</del>&ensp;{{$prod->solde}} FCFA</span>
                                                                        @else
                                                                            <span class="price">{{$prod->prix}} FCFA</span>
                                                                        @endif
                                                                        <p>{{$prod->description}}</p>
                                                                        <div class="product-action-icon-link-list">
                                                                            <div class="contener-fluid">
                                                                                <div class="row">
                                                                                    <div class="col-md-9 col-9 col-lg-9">
                                                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Ajouter Au Panier</a>

                                                                                    </div>
                                                                                    <div class="col-md-3 col-3 col-lg-3">
                                                                                        {{-- <a href="#" data-bs-toggle="modal"  data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a> --}}
                                                                                        <div class="tab">
                                                                                            <form action="{{route('LikeProduit', $prod->id)}}" method="POST" id="id">
                                                                                                @csrf
                                                                                                <input type="hidden" id="id" value="{{$prod->id}}">
                                                                                                <button class="btn btn-lg btn-black-default-hover " type="submit"><i class="icon-heart" style="color: aliceblue;"></i></button>

                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>

                                                                            {{-- <a href="wishlist.html"
                                                                                class="btn btn-lg btn-black-default-hover"><i
                                                                                    class="icon-heart"></i></a> --}}
                                                                            {{-- <a href="compare.html"
                                                                                class="btn btn-lg btn-black-default-hover"><i
                                                                                    class="icon-shuffle"></i></a> --}}
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- End Product Defautlt Single -->
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div> <!-- End List View Product -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Tab Wrapper -->

                            <!-- Start Pagination -->
                            <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                                <ul>
                                    @if($produits->onFirstPage())
                                        <li><a class="disabled" href="#">1</a></li>
                                    @else
                                        <li><a href="{{$produits->previousPageUrl()}}"><i class="ion-ios-skipbackward"></i></a></li>
                                    @endif
                                    @foreach($produits as $value)
                                        <li><a href="{{url('',$value->id)}}">{{$value->id}}</a></li>
                                    @endforeach
                                    @if($produits->hasMorePages())
                                        <li><a href="{{$produits->nextPageUrl()}}" rel="next"><i class="ion-ios-skipforward"></i></a></li>
                                    @else
                                        <li><a href="#" class="disabled"><i class="ion-ios-skipforward"></i></a></li>
                                    @endif

                                </ul>
                            </div>

                            <!-- End Pagination -->
                        </div> <!-- End Shop Product Sorting Section  -->
                    </div>
                </div>
            </div> <!-- ...:::: End Shop Section:::... -->
        </main>
    </div>
@endsection
@section('footer')
@endsection
