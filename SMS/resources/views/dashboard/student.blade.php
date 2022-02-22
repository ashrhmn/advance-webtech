@extends('layouts.app')

@section('content')
    <h1>Student</h1>
    <h2>
        Dashboard of {{ $user->name }}
    </h2>

    <h3>Courses</h3>
    <table class="table table-bordered">
        <thead>
            <th>Course</th>
            <th>Teacher</th>
        </thead>
        <tbody>
            @foreach ($user->courseStudentMap as $map)
                <tr>
                    <td>
                        <a>{{ $map->course->name }}</a>

                    </td>
                    <td>
                        <a>{{ $map->course->teacher->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
