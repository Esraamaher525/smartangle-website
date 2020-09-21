<!-- ======= Clients Section ======= -->
<section id="clients" class="testimonials">
    <div class="container">

        <div class="section-title">
            <h3>{{__('keywords.clients_6262')}}</h3>
        </div>

        <div class="row content ">
            <!--Carousel Wrapper-->
            <div id="clients-item" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Indicators-->
                <ol class="carousel-indicators">
                    @if($agent->isMobile())
                        @for($i = 0 ; $i < count($clients) ; $i++)
                            <li data-target="#clients-item" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
                        @endfor
                    @else
                        @for($i = 0 ; $i < ceil(count($clients) / 4) ; $i++)
                            <li data-target="#clients-item" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
                        @endfor
                    @endif
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">


                    @if($agent->isMobile())
                        @for($i = 0 ; $i < count($clients) ; $i++)
                            <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                                <div class="row">
                                    <div class="col-md-3 col-xs-12 main_div">
                                        <div class="card mb-2 client_content_div">
                                            <a><img class="card-img-top" src="{{'/storage/'.$clients[$i]->image}}" style="height: 181px;" alt="Card image cap"></a>
                                            <div class="client_social_media_div">
                                                <ul style="list-style: none" class="data_list">
                                                    <li><a class="social_icon" href="{{$clients[$i]->facebook}}" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                                    <li><a class="social_icon" href="{{$clients[$i]->instagram}}" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                                    <li>{{$clients[$i]->phone}}</li>
                                                    <li>{{$clients[$i]->address}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @else
                        @for($i = 0 ; $i < ceil(count($clients) / 4) ; $i++)
                            <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                                <div class="row">
                                    @for($j = $i * 4 ; $j < 4 * ($i+1) ; $j++)
                                        @if($j == count($clients))
                                            @break
                                        @endif
                                        <div class="col-md-3 col-xs-12 main_div">
                                            <div class="card mb-2 client_content_div">
                                                <a><img class="card-img-top" src="{{'/storage/'.$clients[$j]->image}}" style="height: 181px;" alt="Card image cap"></a>
                                                <div class="client_social_media_div">
                                                    <ul style="list-style: none" class="data_list">
                                                        <li><a class="social_icon" href="{{$clients[$j]->facebook}}" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                                        <li><a class="social_icon" href="{{$clients[$j]->instagram}}" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                                        <li>{{$clients[$j]->phone}}</li>
                                                        <li>{{$clients[$j]->address}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    @endif

                <!--/. slide-->
                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
        </div>

    </div>
</section><!-- End Clients Section -->
