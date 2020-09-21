<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope top-nav-env"></i>
            <a href="mailto:{{setting('site.email')}}" target="_blank" class="site-email">{{setting('site.email')}}</a>
            <i class="icofont-phone phone-icon top-nav-phone"></i>
            <span>{{setting('site.phone')}}</span>
        </div>
        @if($socialMedia)
            <div class="social-links mt-3 topbar-social-links">
                @if($socialMedia->twitter)
                    <a href="{{$socialMedia->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                @endif
                @if($socialMedia->facebook)
                    <a href="{{$socialMedia->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                @endif
                @if($socialMedia->instagram)
                    <a href="{{$socialMedia->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                @endif
                @if($socialMedia->youtube)
                    <a href="{{$socialMedia->youtube}}" class="youtube"><i class="bx bxl-youtube"></i></a>
                @endif
            </div>
        @endif
    </div>
</section>
