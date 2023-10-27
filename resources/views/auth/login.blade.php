@extends('layouts.applogin')


@section('content')
<div class="containercss">
    <input type="checkbox" id="check">
    <div class="mt-4 login form ">
        <header>Masuk</header>
        <div class="welcome">
            <p>Selamat Datang Sobat Rujak!</p>
        </div>
        <div class="logo">
            <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>
        <div class="row mx-auto my-4"  style="width: 90%">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
            <input id="email" placeholder="Masukkan Email" type="email" class="form-control @error('email') is-invalid @enderror"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


            <input id="password" placeholder="Masukkan Password" type="password"class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        
            
            <a href="{{ route('lupa-password') }}">Lupa password?</a>
            <input type="submit" class="button" value="{{ __('Login') }}">
        
        </form>
        <div class="signup">
            <span ">Belum Punya Akun?
                <label for="check"><a href="/register">Daftar</a></label>
            </span>
        </div>
    </div>
    </div>
    
</div>
@endsection
