<!-- ======= Iraq in numbers Section ======= -->
<section id="iraq_in_numbers" class="services" style="background-image: url('{{'/storage/'.setting('site.iraq_in_number_bg_image')}}');background-size: cover;">

    <div class="container">

        <div class="section-title">
            <h3 class="wow fadeInUp">{{__('keywords.iraq_in_numbers')}}</h3>
        </div>

        <div class="row">
            @forelse($numbers as $index => $number)
                <a href="/iraq-in-numbers/details/{{$number->id}}">
                    <div class="col-md-4">
                        <div class="numbers-img-first">
                            <div class="numbers-img-second">
                                <img src="{{'/storage/'.$number->image}}" class="img-responsive" alt="">
                                <div class="black-div">
                                    <a href="/iraq-in-numbers/details/{{$number->id}}">{{__('keywords.details')}}</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="iraq_in_numbers_h4"> <a class="wow fadeInUp" style="color: #fff;margin-top: 50px;">{{$number->getTranslatedAttribute('title')}}</a></h4>
                    </div>
                </a>
            @empty
            @endforelse
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="{{route('iraqInNumbersList')}}" class="btn btn-lg more_numbers_btn">
                    {{__('keywords.more')}}</a>
            </div>
        </div>


    </div>
</section><!-- End Services Section -->
