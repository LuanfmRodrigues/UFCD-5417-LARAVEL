@extends('master.main')
@section('content')
    @component('components.enrollment.enrollment-list',['enrollments' => $enrollments])
    @endcomponent
@endsection
