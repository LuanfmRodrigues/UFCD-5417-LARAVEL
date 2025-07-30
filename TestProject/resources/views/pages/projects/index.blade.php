@extends('master.main')
@section('content')
    @component('components.projects.project-list',['projects' => $projects])
    @endcomponent
@endsection
