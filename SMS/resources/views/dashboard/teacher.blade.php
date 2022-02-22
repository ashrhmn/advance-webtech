@extends('layouts.app')

@section('content')
    <h1>Teacher</h1>
    <h2>
        Dashboard of {{ $user->name }}
    </h2>

    @foreach ($user->teachingCourses as $course)
        <h3>{{ $course->name }}</h3>
        <table class="table table-bordered">
            <thead>
                <th>Student Name</th>
                <th>CGPA</th>
                <th>Courses</th>
            </thead>
            <tbody>
                @foreach ($course->courseStudentMap as $map)
                    <tr>
                        <td>{{ $map->student->name }}</td>
                        <td>{{ $map->student->cgpa }}</td>
                        <td>
                            @foreach ($map->student->courseStudentMap as $key => $value)
                                {{ $value->course->name }}
                                @if (count($map->student->courseStudentMap) - 1 != $key)
                                    <span>,</span>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
@endsection
