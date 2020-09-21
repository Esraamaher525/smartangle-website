@extends('layouts.master')
@section('title')
    {{__('keywords.media')}}
@endsection
@section('style')
    <style>
        .nav-menu a {
            color: #000 !important;
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

    <!-- ======= Media Section ======= -->
    <section id="media" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h3>{{__('keywords.media_6262')}}</h3>
            </div>

            <div class="row content">
                @forelse($media as $index => $value)
                    <div class="col-md-4 col-xs-12" style="min-height: 600px;">
                        <a href="{{'/storage/'.json_decode($value->video)[0]->download_link}}" target="_blank" class="media-video-btn">
                            <div class="media_main_div" style="height: 400px;transition: height 1s;cursor: pointer;transition-timing-function: ease-in-out;">
                                <div style="border-radius:7px;height: 400px;background-image: url({{'/storage/'.$value->thumbnail_preview}});background-size:cover;">
                                    <img src="{{asset('images/play-button.png')}}" alt="play-button" class="media-play-button-image">
                                    <div style="display: none;color: black;position: relative;top: 95%;right: 10px;" class="media_content_div">
                                        <h5 style="text-align: center">{{$value->title}}</h5>
                                        <p style="text-align: center">
                                            <span style="margin: 30px;"><i class="icofont-phone phone-icon top-nav-phone" style="color: #01b1d7 !important;"></i>
                                                {{$value->phone}}
                                            </span>
                                            <span>{{$value->address}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section><!-- End Clients Section -->

@endsection
@section('scripts')
@endsection
