@extends('layouts.master')
@section('title')
    {{__('keywords.home')}}
@endsection
@section('style')
@endsection
@section('content')
    @if(!is_null($aboutUs))
        @include('about_us')
    @endif
    @if(count($services) > 0)
        @include('services')
    @endif
    @if(count($visionTarget) > 0)
        @include('our_mission')
    @endif
    @include('counts')
    @if(count($activities) > 0)
        @include('activities')
    @endif
    @if(count($marketing) > 0)
        @include('marketing')
    @endif

    @if(count($numbers) > 0)
        @include('iraq_in_numbers')
    @endif

    @if(count($clients) > 0)
        @include('clients')
    @endif

    @if(count($media) > 0)
        @include('media')
    @endif

    @include('join')
@endsection
@section('scripts')
@endsection
