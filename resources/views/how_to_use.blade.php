<!-- ======= How to use Section ======= -->
<section id="how_to_use" class="about-list" style="margin-top: 80px;">
    <div class="container">
        <div class="section-title">
            <span class="wow wobble">{{__('keywords.how_to_use')}}</span>
            <h2 class="wow tada">{{__('keywords.how_to_use')}}</h2>
        </div>

        <div class="row" >
            @forelse($usingSteps as $index => $step)
                <div class="col-md-6">
                    <div class="icon-box mt-5 mt-lg-0">
                        <h4 class="wow flash">#{{$index + 1}}</h4>
                        <p>{{$step->getTranslatedAttribute('text')}}</p>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

    </div>
</section><!-- End How to use  Section -->
