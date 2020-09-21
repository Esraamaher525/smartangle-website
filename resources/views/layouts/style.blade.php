<!-- CSS OF THEME
============================================= -->
<!-- Favicons -->
<link href="{{asset('logo.jpg')}}" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@if(LaravelLocalization::setLocale() != "en")
    <link href="{{asset('css/style-ar.css')}}" rel="stylesheet">
@endif
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
@if(LaravelLocalization::setLocale() != "en")
    <link href="{{asset('css/responsive-ar.css')}}" rel="stylesheet">
@endif
@yield('style')
@toastr_css
