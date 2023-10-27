@extends('layouts.applogin')
@section('title','Login')

@section('content')
<div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Reset Password</header>
        <div class="welcome">
          <p>Masukkan Email untuk reset password</p>
        </div>
        <div class="logo">
          <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

        <input id="email" placeholder="Masukkan Email" type="email" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

        <input type="submit" class="button" value="{{ __('Send Password Reset Link') }}">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
@endif
    </form>
    </div>
    </div>
@endsection

