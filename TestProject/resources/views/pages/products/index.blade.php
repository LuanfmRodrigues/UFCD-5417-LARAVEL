@extends('master.main')
@section('content')
    @component('components.products.product-list',['products' => $products])
    @endcomponent
@endsection
