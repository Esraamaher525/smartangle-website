@extends('layouts.master')
@section('title')
    {{__('keywords.iraq_in_numbers')}}
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

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="section-title">
{{--                <span>{{$number->getTranslatedAttribute('title')}}</span>--}}
                <h2 style="">{{$number->getTranslatedAttribute('title')}}</h2>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <img src="{{asset('/storage/'.$number->image)}}" style="width: 1200px;height: 450px">
                </div>
            </div>

            <div class="portfolio-description">
                <p>
                    {{$number->getTranslatedAttribute('text')}}
                </p>
            </div>
            <a href="/iraq-in-numbers/download-file/{{$number->id}}" target="_blank" class="btn btn-success download-btn">{{__('keywords.download_file')}}</a>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
@section('scripts')
@endsection
