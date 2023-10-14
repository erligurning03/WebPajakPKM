@extends('layouts.navbar')
@section('container')

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-6 border border-5 bg-warning">
          <h2><a href="#"><strong>LEVEL</strong></a></h2>
        </div>
        <div class="col-6 border border-5 bg-warning">
            <h2><a href=""><strong>PEMENANG</strong></a></h2>
        </div>
        <a href="#" class="card-link" style="color: black;">
            <div class="card mt-4" style="">
                <div class="card-body">
                    <b>LEVEL DASAR</b>
                </div>
            </div>
        </a>
        <a href="#" class="card-link" style="color: black;">
            <div class="card mt-4" style="">
                <div class="card-body">     
                  <b>LEVEL MENENGAH</b>
                </div>
            </div>
        </a>
        <a href="#" class="card-link" style="color: black;">
            <div class="card mt-4" style="">
                <div class="card-body">
                  <b>LEVEL AHLI</b>
                </div>
            </div>
        </a>
        

    </div>
</div>



@endsection