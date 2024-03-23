
<div class="banner-section section-top-gap-100">
        @foreach($categorieaffiches as $key => $cataff)
            <a href="product-details-default.html">
                <div class="banner-single-item banner-style-7 banner-animation banner-color--green float-left"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="image">
                        <img class="img-fluid" src="{{asset($cataff->le_profil)}}" alt="" style="height: 500 px; weight : 500px;">
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
