<!-- ======= Counts Section ======= -->
<section id="counts" class="counts" style="background-image: url({{'/storage/'.setting('site.count_bg_image')}});">
    <div class="container">

        <div class="text-center title">
            <h3 class="wow fadeInUp">{{__('keywords.count_msg')}}</h3>
        </div>

        <div class="row counters">
            <div class="col-md-4 col-xs-4 text-center">
                <span data-toggle="counter-up" class="wow bounceOut">{{count($customers)}}</span>
                <p class="wow fadeIn ">{{__('keywords.customers')}}</p>
            </div>
            <div class="col-md-4 col-xs-4 text-center">
                <span data-toggle="counter-up" class="wow bounceOut">{{count($activities)}}</span>
                <p class="wow fadeIn">{{__('keywords.activities')}}</p>
            </div>
            <div class="col-md-4 col-xs-4 text-center">
                <span data-toggle="counter-up" class="wow bounceOut">{{count($numbers)}}</span>
                <p class="wow fadeIn">{{__('keywords.numbers')}}</p>
            </div>
        </div>

    </div>
</section><!-- End Counts Section -->
