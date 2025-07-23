@extends('master.main')
@section('content')
    @component('components.instructor.instructor-list',['instructors' => $instructors])
    @endcomponent
@endsection
