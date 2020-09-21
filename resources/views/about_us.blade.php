<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h3 class="wow fadeInUp">{{$aboutUs->getTranslatedAttribute('title')}}</h3>
        </div>
        <div class="row" >
            <div class="wow fadeInUp col-md-12">
                <div class="icon-box mt-5 mt-lg-0">
                    <p class="about_us_content">
                        {!! $aboutUs->getTranslatedAttribute('content') !!}
                    </p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

