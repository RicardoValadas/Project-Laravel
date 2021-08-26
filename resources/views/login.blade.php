@extends('layouts.mytemplate')

@section('login')
    <form id="registerForm" method="POST">
        @csrf

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                value="{{ old('username') }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
    </form>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
