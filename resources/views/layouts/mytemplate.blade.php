<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/sass/app.css">
    @yield('css')

    <title>@yield('title')</title>
</head>


<body class="p-3 mb-2 text-dark">
    @include('layouts.nav')
    @yield('register')
    @yield('flower-detail')
    @yield('flowers')
    @yield('form')

    <div style="font-family: 'Style Script', cursive;font-size:40px" class=" content">
        @yield('content')
    </div>


    @yield('script')
</body>

</html>
