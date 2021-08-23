@extends('layouts.mytemplate')

@section('title', 'Add Flower')
@section('form')
    <style>
        p {
            color: red;
        }

    </style>
    <form id="registerFlower" method="POST" enctype="multipart/form-data">
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
        <div class="mb-3">
            <label class="form-label" for="myFile">Upload a file : </label>
            <input type="file" name="file" id="myFile">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
        <div id="display-ajax">

        </div>
    </form>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('#registerFlower').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        //url: 'ajax-answer',
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false
                    })
                    .done(function(result) {
                        // If AJAX call worked
                        console.log(result);
                        $('#display-ajax').html('<p style="color: white">Very good it worked</p>');
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                        $('#display-ajax').html('<p style="color: white">Very Bad didnt work</p>');
                    })
            });
        });
    </script>
@endsection
