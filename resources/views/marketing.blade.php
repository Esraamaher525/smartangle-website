<!-- ======= Marketing Section ======= -->
<section id="marketing" class="testimonials">
    <div class="container">

        <div class="section-title">
            <h3 class="wow fadeInUp">{{__('keywords.marketing_in_6262')}}</h3>
        </div>

        <div class="row content">
            <div class="col-lg-4 col-md-5 col-sm-12 pt-4 pt-sm-0 marketing-image" style="border: 1px solid rgb(1, 177, 215);margin: 5px; background-image: url({{'/storage/'.setting('site.marketing_section_image')}});background-repeat:round">
                <h2 class="marketing-heading">{{__('keywords.why_choose_us')}}</h2>
                <a href="{{'/storage/'.json_decode(setting('site.marketing_section_video'))[0]->download_link}}" class="video-btn" target="_blank">
                    <img src="{{asset('images/play-button.png')}}" alt="play-button" style="width: 60px;">
                    <span>{{__('keywords.watch')}}</span>
                </a>
            </div>
            @foreach($marketing as $index => $market)
                <div class="col-lg-2 col-md-4 col-sm-12 pt-4 pt-sm-0 marketing-div" style="border: 1px solid rgb(1, 177, 215);margin: 5px;">
                    <h2 style="color: #fff;margin-bottom: 20px;">.{{ str_pad($index +1, 2, "0", STR_PAD_LEFT)}}</h2>
                    <p class="wow fadeInUp marketing-paragraph" style="color: #fff">
                        {{$market->getTranslatedAttribute('text')}}
                    </p>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Testimonials Section -->
