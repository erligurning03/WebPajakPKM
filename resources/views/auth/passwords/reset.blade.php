@extends('layouts.applogin')
@section('title','Reset Password')

@section('content')
<div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Reset Password</header>
        <div class="welcome">
          <p>Masukkan Password Terbaru</p>
        </div>
        <div class="logo">
          <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <br>
                <div>
                    <input id="email" placeholder="Masukkan Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div>
                    <input id="password" placeholder="Masukkan Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div>
                    <input id="password-confirm" placeholder="Masukkan Password Kembali" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>


                    <input type="submit" class="button" value="{{ __('Reset Password') }}">

        </form>
    </div>
    </div>
@endsection

