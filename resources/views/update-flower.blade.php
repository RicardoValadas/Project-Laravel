@extends('layouts.mytemplate')

@section('form')
    <h1>Update Flowers</h1>
    <form method="POST">
        @csrf
        <div class="mb-3">
            <label for="flower" class="form-label">Flower Name</label>
            <input type="text" name="flower" class="form-control" id="flower" placeholder="Flower name"
                value="{{ $flower->name }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price"
                value="{{ $flower->price }}">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
    </form>
@endsection
