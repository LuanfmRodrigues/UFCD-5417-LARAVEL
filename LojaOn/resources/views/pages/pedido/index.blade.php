@extends('master.main')
@section('content')
    @component('components.pedido.pedido-list',['pedidos' => $pedidos])
    @endcomponent
@endsection
