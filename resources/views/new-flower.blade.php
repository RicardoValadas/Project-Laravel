@extends('layouts.mytemplate')

@section('title', 'Add Flower')
@section('form')
    <style>
        p {
            color: red;
        }

    </style>
    <form method="POST">
        @csrf
        @if ($errors)
            <p>{{ $errors->error->first('name') }}</p>
            <p>{{ $errors->error->first('price') }}</p>

        @endif
        <div class="mb-3">
            <label for="flower" class="form-label">Flower Name</label>
            <input type="text" name="flower" class="form-control" id="flower" placeholder="Flower name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
    </form>
@endsection
