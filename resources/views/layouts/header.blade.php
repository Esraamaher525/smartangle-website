<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo mr-auto">
             <a href="/"><img src="{{'/storage/'.setting('site.logo')}}" alt="" class="img-fluid" style="width: 100px"></a>
        </div>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">{{__('keywords.home')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#about' : '/#about'}}">{{__('keywords.about_us')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#services' : '/#services'}}" >{{__('keywords.services')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#activities' : '/#activities'}}">{{__('keywords.activities')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#marketing' : '/#marketing'}}">{{__('keywords.marketing_6262')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#clients' : '/#clients'}}">{{__('keywords.clients')}}</a></li>
                <li><a href="{{Route::currentRouteName() == 'index' ? '#media' : '/#media'}}">{{__('keywords.media')}}</a></li>
                <li><a href="{{route('iraqInNumbersList')}}" class="iraq_in_numbers">{{__('keywords.iraq_in_numbers')}}</a></li>
                <li><a href="/join-form">{{__('keywords.join')}}</a></li>
                <li class="lang-li">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="user-text font-medium lang_span">
                            {{LaravelLocalization::setLocale()}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY lang-div">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if($localeCode != LaravelLocalization::setLocale())
                                <a class="dropdown-item text-right" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
