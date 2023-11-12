@extends('layouts.navbar')
@section('container')
  <div class="container">
    <form action="/index">
        <button type="submit" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
        </form>
        <h1><b><br>Update Profile</b></h1>
        <hr size="5px" width="100%" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Profile</h5>
                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                 @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profil.update') }}"enctype="multipart/form-data">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <label for="foto_profil">Foto Profil</label> <br>
                            @if($user->foto_profil)
                            <img src="{{ asset('img/foto_profile/'.$user->foto_profil) }}" style="height: 200px;" alt="Foto Profil" class="img-thumbnail">
                            @else
                            <div class="alert alert-warning">Belum ada foto profil. Pilih gambar untuk mengunggah.</div>
                            @endif
                            <input type="file" name="foto_profil" id="foto_profil" class="form-control-file" accept=".jpg, .jpeg, .png, .gif, .img" >
                            @error('foto_profil')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus> --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Update Password</h5>
                </div>

                <div class="card-body">
                    <form action="{{route('profile.updatePw')}}" method="post">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Password Lama') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus> --}}
                                <input id="name" type="password" class="form-control @error('name') is-invalid @enderror" name="password_lama" value="" autocomplete="password" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Password Baru') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email"> --}}
                                <input id="email" type="password" class="form-control @error('email') is-invalid @enderror" name="password" value="" autocomplete="password">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password Baru') }}</label>

                            <div class="col-md-6">
                                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email"> --}}
                                <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
