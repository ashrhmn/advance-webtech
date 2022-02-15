@extends('layouts.home')

@section('content')

    <h1>Some of the offered courses :</h1>

    @foreach ($courses as $course)
        <a class="hover:text-blue-600 p-1"
            href="{{ route('course.details', ['id' => $course->id,'name' => $course->name,'instructor' => $course->instructor,'duration' => $course->duration]) }}"
            class="p-3">
            <h2>Course Name : {{ $course->name }}</h2>
            <h2>Course Instructor : {{ $course->instructor }}</h2>
            <h2>Course Duration : {{ $course->duration }}</h2>
        </a>
    @endforeach
@endsection
