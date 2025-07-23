@extends('master.main')
@section('content')
    @component('components.country.country-list',['countries' => $countries])
    @endcomponent
@endsection
