@extends('master.main')
@section('content')
    @component('components.bicycle.bicycle-list',['bicycles' => $bicycles])
    @endcomponent
@endsection
