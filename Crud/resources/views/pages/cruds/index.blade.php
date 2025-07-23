@extends('master.main')

@section('content')
    @component('components.cruds.cruds-list',['cruds'=> $cruds])
    @endcomponent

@endsection
