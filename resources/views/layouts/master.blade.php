<!doctype html>
<html lang="en" dir="{{app()->getLocale() == "en" ? 'ltr' : 'rtl'}}">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{setting('site.logo')}}">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>@yield('title')</title>
        @include('layouts.style')
    </head>
    <body>
        @include('layouts.loading')
        @include('layouts.top-bar')
        @if(isset($slides) && count($slides) > 0)
            @include('slider')
        @endif
        <main id="main" style="min-height: 428px; !important;">
            @yield('content')
        </main>
        @include('layouts.footer')
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        @include('layouts.scripts')
    </body>
</html>
