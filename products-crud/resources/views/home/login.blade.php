@extends('layouts.app')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" placeholder="username" value="{{ old('username') }}" name="username" id="">
        @error('username')
            <span> {{ $message }} </span>
        @enderror
        <input type="text" placeholder="Password" value="{{ old('password') }}" name="password" id="">
        @error('password')
            <span> {{ $message }} </span>
        @enderror
        <input type="submit" name="submit" value="Login">
    </form>
@endsection
