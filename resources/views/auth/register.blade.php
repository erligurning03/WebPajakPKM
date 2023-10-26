@extends('layouts.applogin')
@section('title','Login')

@section('content')
<div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Daftar</header>
        <div class="logo">
          <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        
            <input id="name" placeholder="Masukkan Nama" type="name" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror 

        <input id="email" placeholder="Masukkan Email" type="email" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


        <input id="password" type="password"
                            class="form-control input100 @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Masukkan Password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </span>
        
        <input id="password-confirm" type="password" class="form-control input100" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Konfirmasi Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>

        <input id="status" type="hidden" class="form-control" name="status" required autocomplete="status" value="pengguna">
        
        <input type="submit" class="button" value="{{ __('Daftar') }}">
        <div class="signup">
            <span ">Belum Punya Akun?
                <label for="check"><a href="/login">Masuk</a></label>
            </span>
        </div>
    </form>
    </div>
    </div>
@endsection


