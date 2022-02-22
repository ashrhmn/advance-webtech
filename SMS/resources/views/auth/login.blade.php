@extends('layouts.app')

@section('content')
    <form class="container" action="{{ route('loginSubmit') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
