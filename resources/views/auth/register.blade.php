@extends('layouts.login')

@section('content')
<div class="page">
        <h1>graduation platform</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <img src="images/loo.png" alt="grade">
            <div>
                <i class="fa-solid fa-user icon"></i>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <i class="fa-solid fa-envelope icon"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input id="password_confirmation" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </form>
    </div>
@endsection
