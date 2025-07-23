@extends('master.main')
@section('content')
    @component('components.cars.car-list',['cars' => $cars])
    @endcomponent
@endsection
