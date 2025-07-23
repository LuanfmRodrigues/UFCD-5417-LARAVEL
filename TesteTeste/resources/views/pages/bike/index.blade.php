@extends('master.main')
@section('content')
    @component('components.bike.bike-list',['bikes' => $bikes])
    @endcomponent
@endsection
