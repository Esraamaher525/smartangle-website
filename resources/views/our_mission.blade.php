<!-- ======= About Section ======= -->
<section id="mission" class="about">
    <div class="container">
        @foreach($visionTarget as $index => $target)
            @if($index % 2 == 0)
                <div class="row content mission">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 pt-4 pt-lg-0 mission_content">
                        <h3 class="wow fadeInUp">{{$target->getTranslatedAttribute('title')}}</h3>
                        <p class="wow fadeInUp">
                            {{$target->getTranslatedAttribute('content')}}
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 ">
                        <div class="vision-img-third">
                            <div class="vision-img-fourth">
                                <img src="{{'/storage/'.$target->image}}" class="img-responsive" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            @else
                <div class="row content mission">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 col-xs-12 first-second-parent">
                        <div class="vision-img-first">
                            <div class="vision-img-second">
                                <img src="{{'/storage/'.$target->image}}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4 col-xs-12 pt-4 pt-sm-0 mission_content">
                        <h3 class="wow fadeInUp">{{$target->getTranslatedAttribute('title')}}</h3>
                        <p class="wow fadeInUp">
                            {{$target->getTranslatedAttribute('content')}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section><!-- End About Section -->

