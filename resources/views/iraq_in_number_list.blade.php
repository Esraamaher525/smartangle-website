@extends('layouts.master')
@section('title')
    {{__('keywords.iraq_in_numbers')}}
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
                    top: 96px;
                    padding: 1px 0;
                }
            }
        @endif
    </style>
@endsection
@section('content')
    @include('layouts.header')
    <!-- ======= Iraq in numbers Section ======= -->
    <section id="iraq_in_numbers" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h3 class="wow fadeInUp">{{__('keywords.iraq_in_numbers')}}</h3>
            </div>

            <div class="row">
                @forelse($numbers as $index => $number)
                    <div class="col-md-4">
                        <div class="numbers-img-first">
                            <div class="numbers-img-second">
                                <img src="{{'/storage/'.$number->image}}" class="img-responsive" alt="">
                                <div class="black-div">
                                    <a href="/iraq-in-numbers/details/{{$number->id}}" class="iraq_in_numbers_list">{{__('keywords.details')}}</a>
                                </div>
                            </div>
                        </div>
                        <h4 style="margin-top: 50px;text-align: center;"><a class="wow heartBeat" style="color: #fff;margin-top: 50px;">{{$number->getTranslatedAttribute('title')}}</a></h4>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section><!-- End Services Section -->

@endsection
@section('scripts')
@endsection
