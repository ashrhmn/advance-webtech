<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>

<body class="text-xl">
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact-us') }}">Contact Us</a>
        <a href="{{ route('login') }}">Login</a>
    </nav>
    <nav>
        This is from admin Layout
    </nav>

    <div class="mt-10">
        @yield('content')
    </div>
</body>

</html>
