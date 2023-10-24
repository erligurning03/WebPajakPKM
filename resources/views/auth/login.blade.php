@extends('layouts.app')

@section('css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        width: 100%;
        background: #053B50;
    }

    .containercss {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 430px;
        width: 100%;
        background: #fff;
        border-radius: 7px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .container .registration {
        display: none;
    }

    .container .form {
        padding: 2rem;
    }

    .form header {
        font-size: 2rem;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .form .welcome {
        font-size: 1.5rem;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1rem;
        color: #020202e3;
    }

    .form .logo {
        text-align: center;
        margin-top: 1rem;
    }

    .form .logo img {
        max-width: 100px;
        height: auto;
    }

    .form input {
        height: 60px;
        width: 100%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
    }

    .form input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
    }

    .form a {
        font-size: 16px;
        color: #009579;
        text-decoration: none;
    }

    .form a:hover {
        text-decoration: underline;
    }

    .form input.button {
        color: #fff;
        background: #E9B824;
        font-size: 1.2rem;
        font-weight: 500;
        letter-spacing: 1px;
        margin-top: 1.7rem;
        cursor: pointer;
        transition: 0.4s;
    }

    .form input.button:hover {
        background: #006653;
    }

    .signup {
        font-size: 17px;
        text-align: center;
    }

    .signup label {
        color: #E9B824;
        cursor: pointer;
    }

    .signup label:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
<div class="containercss">
    <div class="login form mt-4">
        <header>Masuk</header>
        <div class="welcome">
            <p>Selamat Datang Sobat Rujak!</p>
        </div>
        <div class="logo mb-4">
            <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <div class="row mx-auto" style="width: 93%">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <div class="row mx-auto" style="width: 93%">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 mx-auto" style="width:93%">
                    <div class=" col-2 form-check">
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember')
                            ? 'checked' : '' }}>
                    </div>
                    <div class="col-10">
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="row mx-auto" style="width:80%">
                        <input type="submit" class="button" value="{{ __('Login') }}">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa password?') }}
                        </a>
                        @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
