@extends('layouts.home')

@section('content')

    <div class="p-3">
        <h2>Course Name : {{ $course->name }}</h2>
        <h2>Course Instructor : {{ $course->instructor }}</h2>
        <h2>Course Duration : {{ $course->duration }}</h2>
    </div>
@endsection
