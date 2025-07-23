@extends('master.main')
@section('content')
    @component('components.persons.person-list',['people' => $persons])
    @endcomponent
@endsection
