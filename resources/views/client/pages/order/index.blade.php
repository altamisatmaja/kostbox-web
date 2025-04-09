@extends('client.order.order-layout')

@section('form-step')
    @if ($step == 1)
        @include('client.order.identity')
    @elseif ($step == 2)
        @include('client.order.choose-services')
    @elseif ($step == 3)
        @include('client.order.transportation-services')
    @elseif ($step == 4)
        @include('client.order.result')
    @endif
@endsection
