<!-- ======= Services Section ======= -->
<section id="info_about_6262" class="info_about_6262 section-bg">
    <div class="container">

        <div class="section-title">
            <span class="wow bounceInDown">{{__('keywords.info_about_6262')}}</span>
            <h2 class="wow bounceInUp">{{__('keywords.info_about_6262')}}</h2>
        </div>

        <div class="row">
            @forelse($info as $index => $value)
            <div class="col-md-6">
                <div class="icon-box">
                    <h4><a class="wow heartBeat">#{{$index + 1}}</a></h4>
                    <p class="wow zoomInDown">{{$value->getTranslatedAttribute('text')}}</p>
                </div>
            </div>
            @empty
            @endforelse
        </div>

    </div>
</section><!-- End Services Section -->
