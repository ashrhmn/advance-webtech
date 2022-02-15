@extends('layouts.app')

@section('content')
    <h1>Get Student</h1>
    <table class="border-2">
        <tr>
            <td>
                {{ $student->id }}
            </td>
            <td>
                {{ $student->name }}
            </td>
            <td>
                {{ $student->department->name }}
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Course</th>
            <th>Department</th>
        </tr>
        @foreach ($student->courseStudentMap as $map)
            <tr>
                <td>{{ $map->course->name }}</td>
                <td>{{ $map->course->department->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection
