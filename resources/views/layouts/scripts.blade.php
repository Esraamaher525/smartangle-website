<!-- JAVASCRIPT OF THEME
============================================= -->
<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    new WOW().init();
    // optional
    $('#clients .main_div').mouseover(function () {
        $(this).find('.client_social_media_div').css("z-index", "9999");
        $(this).find('.client_social_media_div').css('height','100%');

    });

    $('#clients .main_div').mouseout(function () {
        $(this).find('.client_social_media_div').css("z-index", "-1");
        $(this).find('.client_social_media_div').css('height','0%');
    });

    $('#media .media_main_div').mouseover(function () {
        $(this).find('.media_content_div').css("display","block");
        $(this).css({'border': '2px solid #03d1fe','height': '550px','border-radius': '10px'});
    });

    $('#media .media_main_div').mouseout(function () {
        $(this).find('.media_content_div').css("display","none");
        $(this).removeAttr("style");
        $(this).css({'height': '400px','transition': 'height 1s','cursor': 'pointer',
        'transition-timing-function': 'ease-in-out'});

    });

    $('#iraq_in_numbers .numbers-img-second').mouseover(function () {
        $(this).find('.black-div').css("z-index", "9999");
        $(this).find('.black-div').css('height','100%');

    });

    $('#iraq_in_numbers .numbers-img-second').mouseout(function () {
        $(this).find('.black-div').css("z-index", "-1");
        $(this).find('.black-div').css('height','0%');
    });

</script>
@yield('scripts')

@toastr_js
@toastr_render
