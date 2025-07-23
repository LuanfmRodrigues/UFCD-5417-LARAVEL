@extends('master.main')
@section('content')
    @component('components.brands.brand-list',['brands' => $brands])
    @endcomponent
@endsection
