<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <nav>
        <a href="{{ route('login') }}">Login</a>
        <a href="/register">Register</a>
        <a href="/student/create">Create Student</a>
        <a href="/student">Get Student</a>
        <a href="/student/edit">Edit Student</a>

        <a href="{{ route('getProducts') }}">Get Products</a>
        <a href="{{ route('createProduct') }}">Create Product</a>
    </nav>


    @yield('content')

    {{-- <div>Copyright 2022, All rights reserved</div> --}}
</body>

</html>
