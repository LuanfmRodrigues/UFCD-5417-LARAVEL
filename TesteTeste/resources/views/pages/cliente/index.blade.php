@extends('master.main')
@section('content')
    @component('components.cliente.cliente-list',['clientes' => $clientes])
    @endcomponent
@endsection
