@extends('layouts.applogin')

@section('content')
<div class="containercss">
    <input type="checkbox" id="check">
    <div class="mt-4 login form ">
        <header>Daftar</header>
        <div class="logo">
            <img src="{{ asset('img/logoRujak5.jpeg') }}" alt="Logo Rujak">
        </div>
        <div class="row mx-auto my-4"  style="width: 90%">
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


            <input id="password" placeholder="Masukkan Password" type="password"class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            
            <input id="password" placeholder="Masukkan Password Kembali" type="password"class="form-control @error('password') is-invalid @enderror" name="re-password" required
                autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        
            <input type="submit" class="button" value="{{ __('Daftar') }}">
        
        </form>
        <div class="signup">
            <span ">Sudah punya akun?
                <label for="check"><a href="/">Masuk</a></label>
            </span>
        </div>
    </div>
    </div>
</div>
@endsection
