@extends('layouts.app')

@section('content')
    <section class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center">
                <h1 class="text-center">Registration</h1>
                <p class="lead">Sign up for new user</p>
            </div>
            <form action="{{ route('regSubmit') }}" method="post">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password2">Confirm Password</label>
                    <input class="form-control" type="password" name="password2" id="">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="name" name="name" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="role">Role</label>
                    <select name="role" class="form-select mb-3" id="">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
