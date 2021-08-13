<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body style="background-color: grey">

    <h1 style="font-family: 'Style Script', cursive;color:yellow;text-align:center;font-size:80px">FLOWERS PAGE</h1>
    <hr>
    @if (count($flo) > 0)
        <p>We have some flowers :)</p>

        @foreach ($flo as $f)
            {{-- comment usar o @ para fazer coisas como no angular ngFor --}}
            <p>Name : {{ $f->name }} and Price : {{ $f->price }}</p>

        @endforeach

    @else
        <p>No flowers :(</p>
    @endif

    <hr>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt temporibus blanditiis et ad, debitis molestias
        aliquid nostrum, nihil, ratione voluptate animi alias quas dolore neque facere minus corporis sit odit?</p>

    <p style="font-family: 'Style Script', cursive;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt
        temporibus blanditiis et ad, debitis molestias
        aliquid nostrum, nihil, ratione voluptate animi alias quas dolore neque facere minus corporis sit odit?</p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt temporibus blanditiis et ad, debitis molestias
        aliquid nostrum, nihil, ratione voluptate animi alias quas dolore neque facere minus corporis sit odit?</p>
    <hr>
    <br>
</body>

</html>
