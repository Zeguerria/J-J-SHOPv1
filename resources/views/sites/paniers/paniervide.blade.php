@extends('sites.menus.menu')
@section('titre')
    Panier
@endsection
@section('header')
@endsection
@section('corps')
    <div class="class">
            <!-- ...:::: Start Breadcrumb Section:::... -->
        <div class="breadcrumb-section breadcrumb-bg-color--golden">
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="breadcrumb-title">Mon panier</h3>
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
        </div> <!-- ...:::: End Breadcrumb Section:::... -->

        <!-- ...::::Start About Us Center Section:::... -->
        <div class="empty-cart-section section-fluid">
            <div class="emptycart-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                            <div class="emptycart-content text-center">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset('sites/assets/images/emprt-cart/empty-cart.png')}}" alt="">
                                </div>
                                <h4 class="title">Oups !!!</h4>
                                <h6 class="sub-title">Désolé ! Nous n'avons pas pu retrouver les produits de votre panier ... Essayez de vous connecter, d'ajouter au moins un produit ou de nous contacter !</h6>
                                <a href="{{url('./allmyproducts')}}" class="btn btn-lg btn-golden">Voir les produits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ...::::End  About Us Center Section:::... -->
    </div>
@endsection
@section('footer')
@endsection
