<!-- ======= Clients Section ======= -->
<section id="activities" class="testimonials">
    <div class="container">

        <div class="section-title">
            <h3>{{__('keywords.activities_6262')}}</h3>
        </div>

        <div class="row content ">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Indicators-->
                <ol class="carousel-indicators">
                    @for($i = 0 ; $i < count($activities) ; $i++)
                        <li data-target="#multi-item-example" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
                    @endfor
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    @for($i = 0 ; $i < count($activities) ; $i++)
                        <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                            <div class="row">
                                <div class="col-md-6 activities_content">
                                    <div class="mb-2">
                                        <h4>{{$activities[$i]->getTranslatedAttribute('title')}}</h4>
                                        <p style="padding: 25px;max-height: 350px;overflow-y: scroll;" class="activities-content">{{$activities[$i]->getTranslatedAttribute('text')}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-2">
                                        <img class="card-img-top img-responsive" src="{{'/storage/'.$activities[$i]->image}}" alt="Card image cap">
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor

                <!--/. slide-->
                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
        </div>

    </div>
</section><!-- End Clients Section -->
