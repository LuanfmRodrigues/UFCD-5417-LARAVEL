@extends('master.main')
@section('content')
    @component('components.produto.produto-list',['produtos' => $produtos])
    @endcomponent
@endsection
