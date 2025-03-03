 <!-- Start Hero Slider Section-->
 <div class="hero-slider-section">
    <!-- Slider main container -->
    <div class="hero-slider-active swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Start Hero Single Slider Item -->
            @foreach ($produitteteaffiches as $key =>$tete)
             <div class="hero-single-slider-item swiper-slide">
                 <!-- Hero Slider Image -->
                 <div class="hero-slider-bg">
                     <img src="{{asset($tete->le_profil1)}}" alt="">
                 </div>
                 <!-- Hero Slider Content -->
                 <div class="hero-slider-wrapper">
                     <div class="container">
                         <div class="row">
                             <div class="col-auto">
                                 <div class="hero-slider-content">
                                     <h4 class="subtitle">Découvez notre produit</h4>
                                     <h1 class="title">{{$tete->nom}} </h1>
                                     <a href="{{url('detailproduit',$tete->id)}}" class="btn btn-lg btn-pink">Consulter Maintenant </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
            @endforeach
            {{-- <!-- End Hero Single Slider Item -->
            <!-- Start Hero Single Slider Item -->
            <div class="hero-single-slider-item swiper-slide">
                <!-- Hero Slider Image -->
                <div class="hero-slider-bg">
                    <img src="assets/images/hero-slider/home-3/hero-slider-2.jpg" alt="">
                </div>
                <!-- Hero Slider Content -->
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">
                                    <h4 class="subtitle">New collection</h4>
                                    <h1 class="title">Best Of HiFi <br> Loud Speaker</h1>
                                    <a href="product-details-default.html" class="btn btn-lg btn-pink">shop now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Single Slider Item --> --}}
        </div>

        <!-- If we need pagination -->
        <div class="swiper-pagination active-color-pink"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev d-none d-lg-block"></div>
        <div class="swiper-button-next d-none d-lg-block"></div>
    </div>
</div>
<!-- End Hero Slider Section-->
