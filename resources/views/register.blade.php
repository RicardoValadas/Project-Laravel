@extends('layouts.mytemplate')
@section('register')
    <form id="registerForm" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your name"
                value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                value="{{ old('username') }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email </label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                placeholder="Email">
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password </label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>

        <div class="mb-3">
            <label class="form-label" for="password_confirm">Password </label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirm"
                placeholder="password">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </div>
    </form>
    @if ($message = Session::get('success'))
        <p style="color:white">{{ $message }}</p>
    @endif
    @error('name')
        <p class="font-mono ...">
            {{ $message }}
        </p>
    @enderror
    <br>
    @error('username')
        <p class="font-mono ...">
            {{ $message }}
        </p>
    @enderror
    <br>
    @error('email')
        <p class="font-mono ...">
            {{ $message }}
        </p>
    @enderror
    <br>
    @error('password')
        <p class="font-mono ...">
            {{ $message }}
        </p>
    @enderror
    <br>
    @error('password_confirmation')
        <p class="font-mono ...">
            {{ $message }}
        </p>
    @enderror

@endsection
