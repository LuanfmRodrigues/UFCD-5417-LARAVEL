@extends('master.main')
@section('content')
    @component('components.categoria.categoria-list',['categorias' => $categorias])
    @endcomponent
@endsection
