@extends('layouts.mytemplate')
@section('css')
    <link rel="stylesheet" href="/css/flower.css">
@endsection()
@section('flowers')
    <h1 class="display-1">FLOWERS PAGE</h1>
    <hr>
    @if (count($flowers) > 0)
        <h1 class="display-6">We have some flowers :)</h1>

        @if ($message = Session::get('success'))
            <p style="color:green">{{ $message }}</p>
        @endif
        @foreach ($flowers as $f)
            {{-- comment usar o @ para fazer coisas como no angular ngFor --}}
            <p>Name : {{ $f->name }} and Price : {{ $f->priceFormatted }} <a
                    href="{{ route('update.flower', [$f->id]) }}">Edit</a>
                <a href="{{ route('delete.flower', [$f->id]) }}">Delete</a>
                <a href="{{ route('flower.detail', [$f->id]) }}">Detail</a>
            </p>


        @endforeach

    @else
        <p>No flowers :(</p>
    @endif

    <hr>

@endsection
