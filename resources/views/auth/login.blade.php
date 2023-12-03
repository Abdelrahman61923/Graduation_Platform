@extends('layouts.login')

@section('content')
    <div class="page">
        <h1>graduation platform</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <img src="images/loo.png" alt="grade">
            <div>
                <i class="fa-solid fa-user icon"></i>
                <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input id="password" type="password" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- <div class="check">
                <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div> -->
            <div class="admin">
                <a href="">  admin mode  </a>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">  forgot password?</a>
                @endif
            </div>
            <button type="submit" name="submit">login</button>
            <div class="link">
                <p>Don't have an account?</p>
                <a href="{{ route('register') }}">register</a>
            </div>
        </form>
    </div>
@endsection
