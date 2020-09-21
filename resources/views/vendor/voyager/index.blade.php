@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')
        @include('voyager::dimmers')
        <h1 style="text-align: center;margin: 20%;">{{ __('keywords.welcome_to_6262')  }}</h1>
    </div>
@stop

@section('javascript')
@stop
