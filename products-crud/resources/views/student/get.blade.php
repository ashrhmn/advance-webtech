@extends('layouts.app')

@section('content')
    <h1>Get Student</h1>
    <table>

        @foreach ($students as $student)
            {{-- <h1>Name : {{ $student->name }}</h1>
        <h1>ID : {{ $student->id }}</h1>
        <h1>DOB : {{ $student->dob }}</h1> --}}
            <tr>
                <td>
                    {{ $student->id }}
                </td>
                <td>
                    {{ $student->name }}
                </td>
                <td>
                    {{ $student->description }}
                </td>
                <td>
                    <a href="/student/getOne/{{ encrypt($student->id) }}">Details</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
