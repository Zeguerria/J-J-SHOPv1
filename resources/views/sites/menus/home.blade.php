@extends('sites.menus.menu')
@section('titre')
    Acceuil
@endsection
@section('header')
@endsection
@section('corps')
<div>

   {{-- EN TETE D'AFFICHE DEUX MAX DEBUT --}}
        @include('sites.menus._homes.tete')
   {{-- EN TETE D'AFFICHE DEUX MAX FIN --}}
   <!-- Start Service Section -->
   <div class="service-promo-section section-top-gap-100">
       <div class="service-wrapper">
           <div class="container">
               <div class="row">
                   <!-- Start Service Promo Single Item -->
                   <div class="col-lg-3 col-sm-6 col-12">
                       <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                           <div class="image">
                               <img src="{{asset('sites/assets/images/icons/service-promo-5.png')}}" alt="">
                           </div>
                           <div class="content">
                               <h6 class="title">FREE SHIPPING</h6>
                               <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                           </div>
                       </div>
                   </div>
                   <!-- End Service Promo Single Item -->
                   <!-- Start Service Promo Single Item -->
                   <div class="col-lg-3 col-sm-6 col-12">
                       <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                           <div class="image">
                               <img src="{{asset('sites/assets/images/icons/service-promo-6.png')}}" alt="">
                           </div>
                           <div class="content">
                               <h6 class="title">30 DAYS MONEY BACK</h6>
                               <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                           </div>
                       </div>
                   </div>
                   <!-- End Service Promo Single Item -->
                   <!-- Start Service Promo Single Item -->
                   <div class="col-lg-3 col-sm-6 col-12">
                       <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                           <div class="image">
                               <img src="{{asset('sites/assets/images/icons/service-promo-7.png')}}" alt="">
                           </div>
                           <div class="content">
                               <h6 class="title">SAFE PAYMENT</h6>
                               <p>Pay with the world’s most popular and secure payment methods.</p>
                           </div>
                       </div>
                   </div>
                   <!-- End Service Promo Single Item -->
                   <!-- Start Service Promo Single Item -->
                   <div class="col-lg-3 col-sm-6 col-12">
                       <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                           <div class="image">
                               <img src="{{asset('sites/assets/images/icons/service-promo-8.png')}}" alt="">
                           </div>
                           <div class="content">
                               <h6 class="title">LOYALTY CUSTOMER</h6>
                               <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                           </div>
                       </div>
                   </div>
                   <!-- End Service Promo Single Item -->
               </div>
           </div>
       </div>
   </div>
   <!-- End Service Section -->
   {{-- BOUTIQUES A L'AFFICHE DEBUT  --}}
        @include('sites.menus._homes.affichecategorie')
   {{-- BOUTIQUES A L'AFFICHE FIN  --}}
   {{-- NOUVEAUX PRODUITS DEBUT  --}}
        @include('sites.menus._homes.arrivage')
   {{-- NOUVEAUX PRODUITS FIN  --}}

   <!-- Start Banner Section -->
   <div class="banner-section section-top-gap-100">
       <div class="banner-wrapper clearfix">
           <!-- Start Banner Single Item -->
           <a href="product-details-default.html">
               <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                   data-aos="fade-up" data-aos-delay="0">
                   <div class="image">
                       <img class="img-fluid" src="assets/images/banner/banner-style-8-img-1.jpg" alt="">
                   </div>
               </div>
           </a>
           <!-- End Banner Single Item -->
           <!-- Start Banner Single Item -->
           <a href="product-details-default.html">
               <div class="banner-single-item banner-style-8 banner-animation banner-color--green float-left"
                   data-aos="fade-up" data-aos-delay="200">
                   <div class="image">
                       <img class="img-fluid" src="assets/images/banner/banner-style-8-img-2.jpg" alt="">
                   </div>
               </div>
           </a>
           <!-- End Banner Single Item -->
       </div>
   </div>
   <!-- End Banner Section -->
   {{-- AFFICHE PRODUIT DEBUT --}}
        @include('sites.menus._homes.afficheproduit')
   {{-- AFFICHE PRODUIT FIN --}}


   <!-- Start Blog Slider Section -->
   <div class="blog-default-slider-section section-top-gap-100 section-fluid">
       <!-- Start Section Content Text Area -->
       <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="section-content-gap">
                           <div class="secton-content">
                               <h3 class="section-title">THE LATEST BLOGS</h3>
                               <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Start Section Content Text Area -->
       <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="blog-default-slider default-slider-nav-arrow">
                           <!-- Slider main container -->
                           <div class="swiper-container blog-slider">
                               <!-- Additional required wrapper -->
                               <div class="swiper-wrapper">
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-1.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post One</a>
                                           </h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="blog-single-sidebar-left.html"
                                                   class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="#" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-2.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Two</a>
                                           </h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="#" class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="blog-single-sidebar-left.html" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-3.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post
                                                   Three</a></h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="blog-single-sidebar-left.html"
                                                   class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="#" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-4.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Four</a>
                                           </h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="blog-single-sidebar-left.html"
                                                   class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="#" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-5.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Five</a>
                                           </h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="blog-single-sidebar-left.html"
                                                   class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="#" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
                                   <!-- Start Product Default Single Item -->
                                   <div class="blog-default-single-item blog-color--pink swiper-slide">
                                       <div class="image-box">
                                           <a href="blog-single-sidebar-left.html" class="image-link">
                                               <img class="img-fluid"
                                                   src="assets/images/blog/blog-grid-home-1-img-6.jpg" alt="">
                                           </a>
                                       </div>
                                       <div class="content">
                                           <h6 class="title"><a href="blog-single-sidebar-left.html">Blog Post Six</a>
                                           </h6>
                                           <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex.
                                               Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                           <div class="inner">
                                               <a href="blog-single-sidebar-left.html"
                                                   class="read-more-btn icon-space-left">Read More <span><i
                                                           class="ion-ios-arrow-thin-right"></i></span></a>
                                               <div class="post-meta">
                                                   <a href="#" class="date">24 Apr</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- End Product Default Single Item -->
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
   <!-- End Blog Slider Section -->

   <!-- Start Company Logo Section -->
   <div class="company-logo-section section-top-gap-100 section-fluid">
       <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="company-logo-slider default-slider-nav-arrow">
                           <!-- Slider main container -->
                           <div class="swiper-container company-logo-slider">
                               <!-- Additional required wrapper -->
                               <div class="swiper-wrapper">
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-1.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-2.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-3.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-4.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-5.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-6.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-7.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                                   <!-- Start Company Logo Single Item -->
                                   <div class="company-logo-single-item swiper-slide">
                                       <div class="image"><img class="img-fluid"
                                               src="assets/images/company-logo/company-logo-8.png" alt=""></div>
                                   </div>
                                   <!-- End Company Logo Single Item -->
                               </div>
                           </div>
                           <!-- If we need navigation buttons -->
                           <div class="swiper-button-prev d-none d-md-block"></div>
                           <div class="swiper-button-next d-none d-md-block"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- End Company Logo Section -->

</div>
@endsection
@section('footer')
@endsection
