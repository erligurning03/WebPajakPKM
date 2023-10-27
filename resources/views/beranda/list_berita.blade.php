@extends('layouts.navbar')
@section('container')

<div class="container">
    <div class="row">
        <div class="input-group mb-4 mt-3">
            <span class="input-group-text" id="basic-addon1" style="cursor: pointer;" onclick="#"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Mau baca apa hari ini ?..." aria-label="Cari" aria-describedby="basic-addon1" id="search-input" style="width:60px;">
        </div>
        <div class="col-sm-4 col-md-4 ">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/img2.png')}}" class="d-block w-100 img-fluid" alt="..." >
                    </div>
                    <div class="col-md-6">
                        <b>tata cara bayar pajak motor</b>
                        <li>13/4/2023, 23.00 WIB</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 ">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/img2.png')}}" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="col-md-6">
                        <b>mari bayar pajak</b>
                        <li>13/4/2023, 23.00 WIB</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 ">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/img2.png')}}" class="d-block w-100 img-fluid" alt="..." >
                    </div>
                    <div class="col-md-6">
                        <b>Pajak bumi dan bangunan</b>
                        <li>13/4/2023, 23.00 WIB</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 ">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('img/img2.png')}}" class="d-block w-100 img-fluid" alt="..." >
                    </div>
                    <div class="col-md-6">
                        <b>pajak kendaraan mewah</b>
                        <li>13/4/2023, 23.00 WIB</li>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection