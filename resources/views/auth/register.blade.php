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


            <div class="wrap-input100 validate-input" data-validate="Password diperlukan">

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

                    </div>



            <div class="wrap-input100 validate-input" data-validate="Password diperlukan">

                        <input id="password-confirm" type="password" class="form-control input100" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Konfirmasi Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>


                        </span>

                    </div>
                    <label for="exampleInputEmail1">Gambar</label>
                            <input type="file" name="image" placeholder="Choose image" id="image">
                        @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
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
