@extends('layouts.master')
@section('title')
    {{__('keywords.join_with_6262')}}
@endsection
@section('style')
    <style>
        .nav-menu a {
            color: #000 !important;
        }
        #header-sticky-wrapper {
            height: 70px !important;
        }
        @if(app()->getLocale() == "en")
            @media only screen and (max-width: 768px) {
                .mobile-nav-toggle {
                    top: 25px;
                }
            }
        @else
            @media only screen and (max-width: 768px){
            .mobile-nav-toggle {
                top: 55px !important;
            }
            .mobile-nav {
                top: 90px;
                padding: 1px 0;
            }
        }
        @endif

    </style>
@endsection
@section('content')
    @include('layouts.header')
    <!-- ======= Contact Section ======= -->
    <section id="join" class="contact" style="background-image: url({{'/storage/'.setting('site.join_bg_image')}});background-size: contain;background-repeat: no-repeat;">
        <div class="container">
            <div class="section-title" style="margin-bottom: 55px;">
                <h3 class="wow fadeInUp" style="color: #fff;font-weight: bold">{{__('keywords.join_with_6262')}}</h3>
                <h4 style="position: relative;top: 35px;color: #fff;font-weight: bold;margin-bottom: 20px;">{{__('keywords.leave_your_information')}}</h4>
            </div>
        </div>

        <div class="container">

            <form action="{{route('store-joining')}}" method="post" role="form" id="join-form" data-parsley-validate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <label for="name" class="required" title="{{__('keywords.field_is_required')}}">{{__('keywords.name')}}</label>
                        <input type="text" name="name" class="form-control wow fadeInUp" id="name" placeholder="{{__('keywords.name')}}"
                               value="{{old('name')}}" data-parsley-required-message="{{__('keywords.field_is_required')}}" required data-msg="{{__('keywords.field_is_required')}}" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">{{__('keywords.email')}}</label>
                        <input type="email" class="form-control wow fadeInDown" name="email" id="email" placeholder="{{__('keywords.email')}}"
                               value="{{old('email')}}" data-parsley-type="email"
                               data-parsley-required-message="{{__('keywords.not_valid_email')}}"/>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="phone" class="required" title="{{__('keywords.field_is_required')}}">{{__('keywords.phone')}}</label>
                        <input type="text" name="phone" class="form-control wow fadeInUp" id="phone" placeholder="{{__('keywords.phone').' '.__('keywords.ex')}} +964123456789"
                               value="{{old('phone')}}" data-parsley-required-message="{{__('keywords.field_is_required')}}" required data-msg="{{__('keywords.field_is_required')}}" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="activity_name">{{__('keywords.activity_name')}}</label>
                        <input type="text" name="activity_name" class="form-control wow fadeInDown" id="activity_name" placeholder="{{__('keywords.activity_name')}}"
                               value="{{old('activity_name')}}" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="activity" class="required" title="{{__('keywords.field_is_required')}}">{{__('keywords.activity')}}</label>
                        <input type="text" name="activity" class="form-control wow fadeInUp" id="activity" placeholder="{{__('keywords.activity')}}"
                               value="{{old('activity')}}" data-parsley-required-message="{{__('keywords.field_is_required')}}" required data-msg="{{__('keywords.field_is_required')}}" />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="address" class="required" title="{{__('keywords.field_is_required')}}">{{__('keywords.work_address')}}</label>
                        <input type="text" name="address" class="form-control wow fadeInUp" id="address" placeholder="{{__('keywords.work_address')}}"
                               value="{{old('address')}}" data-parsley-required-message="{{__('keywords.field_is_required')}}" required />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 form-group">
                        <label for="profile_link">{{__('keywords.profile_link')}}</label>
                        <input type="text" name="profile_link" class="form-control wow fadeInDown" id="profile_link" placeholder="{{__('keywords.profile_link')}}"
                               value="{{old('profile_link')}}" />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <label for="map">{{__('keywords.address')}}</label>
                    <div class="col-md-12 form-group" id="map" style="min-height: 300px;">
                    </div>
                </div>
                <input type="hidden" name="long" id="long" value="44.361488">
                <input type="hidden" name="lat" id="lat" value="33.312805">
                <div class="text-center">
                    <button type="submit" class="wow fadeInDown">{{__('keywords.join')}}</button>
                </div>
            </form>

        </div>
    </section><!-- End Contact Section -->
@endsection
@section('scripts')
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUnuoNrueD2T25dcsXG7Qxls-1JdOSoFg&callback=initMap"></script>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(33.312805, 44.361488),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var myMarker = new google.maps.Marker({
                position: new google.maps.LatLng(33.312805, 44.361488),
                draggable: true
            });

            google.maps.event.addListener(myMarker, 'dragend', function (evt) {
                $("#lat").val(evt.latLng.lat().toFixed(5));
                $("#long").val(evt.latLng.lng().toFixed(5));
            });

            google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
                document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
            });

            map.setCenter(myMarker.position);
            myMarker.setMap(map);
        }
    </script>
@endsection
