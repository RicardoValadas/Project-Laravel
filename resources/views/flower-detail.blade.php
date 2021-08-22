@extends('layouts.mytemplate')

@section('flower-detail')
    <div style="text-align:center" class=" card" style="width: 18rem;">
        <img src="https://picsum.photos/1000" style="width: 966px;height:450px" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $flower->name }}</h5>
            <p class="card-text">The flower price is {{ $flower->price }}</p>
            {{-- @foreach ($comments as $comment)
                <p>Subject : {{ $comment->subject }}</p>
                <p>Message : {{ $comment->message }}</p>
            @endforeach --}}
        </div>
    </div>
    <div>
        <p>
            {{ $type->columns }}
        </p>
    </div>

@endsection
