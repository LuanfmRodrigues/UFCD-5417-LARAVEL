@extends('master.main')
@section('content')
    @component('components.student.student-list',['students' => $students])
    @endcomponent
@endsection
