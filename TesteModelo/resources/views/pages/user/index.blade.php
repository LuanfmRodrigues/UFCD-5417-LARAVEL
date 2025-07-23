@extends('master.main')
@section('content')
    @component('components.user.user-list',['users' => $users])
    @endcomponent
@endsection
