@extends('layouts.home')

@section('content')
    <input type="text" placeholder="username" name="" id="">
    <input type="text" placeholder="Password" name="" id="">
    <a class="bg-blue-600 text-white rounded p-1" href="{{ route('admin-dashboard') }}">Admin</a>
    <a class="bg-green-600 text-white rounded p-1" href="{{ route('student-dashboard') }}">Student</a>
@endsection
