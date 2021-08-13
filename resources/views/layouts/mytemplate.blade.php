<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body style="background-color: black;color:white">
    <nav>
        <li><a style="color:white" href="{{ url('test') }}">Home Page</a></li>
        <li><a style="color:white" href="{{ url('contact') }}">Contact Page</a></li>

        <div style="font-family: 'Style Script', cursive;font-size:40px" class=" content">
            @yield('content')
        </div>

        <footer>
            <p>This is my footer</p>
        </footer>
    </nav>

</body>

</html>
