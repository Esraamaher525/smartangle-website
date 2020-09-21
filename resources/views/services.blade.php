<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg" style="background-image: url('{{'/storage/'.setting('site.services_bg_image')}}');background-size: cover;">
    <div class="container">

        <div class="section-title">
            <h3 class="wow fadeIn">{{__('keywords.our_services')}}</h3>
        </div>

        <div class="row">
            @forelse($services as $index => $service)
                <div class="col-md-1"></div>
                <div class="col-md-4 services-div">
                    <div class="icon-box">
                        <img src="{{'/storage/'.$service->image}}" alt="" class="img-responsive">
                        <h4>{{$service->getTranslatedAttribute('title')}}</h4>
                        <p class="some_content">{{substr($service->getTranslatedAttribute('content'),0,100)}}...</p>
                        <p class="all_content" style="display: none;">{{$service->getTranslatedAttribute('content')}}</p>
                    </div>
                </div>
                <div class="col-md-1"></div>

            @empty
            @endforelse
        </div>

    </div>
</section><!-- End Services Section -->
