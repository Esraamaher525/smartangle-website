<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-xs-12">
                    <div class="footer-info">
                        <h3>6262</h3>
                        <p>
                            <b>{{__('keywords.address')}}</b> :
                            @if(app()->getLocale() == "en")
                                {{setting('site.address')}}
                            @else
                                {{setting('site.address_ar')}}
                            @endif
                        </p>
                        <p><b>{{__('keywords.phone')}}</b> : {{setting('site.phone')}}</p>
                        <p><b>{{__('keywords.email')}}</b> : {{setting('site.email')}}</p>

                        @if($socialMedia)
                            <div class="social-links mt-3">
                                @if($socialMedia->twitter)
                                    <a href="{{$socialMedia->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                @endif
                                @if($socialMedia->facebook)
                                    <a href="{{$socialMedia->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                @endif
                                @if($socialMedia->instagram)
                                    <a href="{{$socialMedia->instagram}}" class="instagram "><i class="bx bxl-instagram"></i></a>
                                @endif
                                @if($socialMedia->youtube)
                                    <a href="{{$socialMedia->youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-md-4 col-xs-6 footer-links">
                    <h4>{{__('keywords.useful_links')}}</h4>
                    <ul>
                        <li><a href="/">{{__('keywords.home')}}</a></li>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#about' : '/#about'}}">{{__('keywords.about_us')}}</a></li>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#services' : '/#services'}}" >{{__('keywords.services')}}</a></li>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#activities' : '/#activities'}}">{{__('keywords.activities')}}</a></li>
                        <li><a href="{{route('iraqInNumbersList')}}" class="iraq_in_numbers">{{__('keywords.iraq_in_numbers')}}</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-xs-6 footer-links">
                    <h4>{{__('keywords.more_info')}}</h4>
                    <ul>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#marketing' : '/#marketing'}}">{{__('keywords.marketing_6262')}}</a></li>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#clients' : '/#clients'}}">{{__('keywords.clients')}}</a></li>
                        <li><a href="{{Route::currentRouteName() == 'index' ? '#media' : '/#media'}}">{{__('keywords.media')}}</a></li>
                        <li><a href="/join-form">{{__('keywords.join')}}</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; {{__('keywords.copyright')}} <strong><span>6262</span></strong>. {{__('keywords.rights_reserved')}}
        </div>
        <div class="credits">
            {{__('keywords.powered_by')}} <a href="http://www.codi-iq.net/" target="_blank">Codi</a>
        </div>
    </div>
</footer><!-- End Footer -->
