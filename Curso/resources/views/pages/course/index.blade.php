
@extends('master.main')
@section('content')
    @component('components.course.course-list',['courses' => $courses])
    @endcomponent
@endsection
