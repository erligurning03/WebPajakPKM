@extends('layouts.navbar')
@section('container')

<script src="https://cdn.tiny.cloud/1/skn5d7tfh0j3z5py3pp7vv86xlb3ew171p6rw7oui9nm82y6/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      max_height: 300,
      min_height: 200,
    });
</script>

<div class="container mt-4">
  <form action="/index/tontonan">
    <button type="submit" class="btn btn-warning" style="text-align: center; width:110px; height:35px;";><i class="fa-solid fa-arrow-left"></i> Kembali</button>
    </form>
  <div class="row">
    @foreach ($listKonten as $konten)
    <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9 mt-3">
          <img src="{{$konten->cover_konten}}" class="card-img-top img-fluid" alt="..."  style="border: 5px solid rgb(70, 70, 70); display:block; ">
            {{-- <video class="embed-responsive-item" width= "50%"controls>
                <source src="{{ asset('video/dumping.MP4') }}" type="video/mp4">
            </video> --}}
            <div class="audio-component">
              <figure>
                {{-- <figcaption>
                  <b>Judul podcast</b>
                </figcaption> --}}
                <audio controls>
                  <source src="{{$konten->url_konten,'id'}}" type="audio/mpeg">
                </audio>
              </figure>
            </div>
        </div>
        <hr size="5px" width="100%" align="center">
        <div class="row">
            <div class="col-6 col-md-6" style="text-align:left">
                @if ($liked)
                <a href="/index/podcast/{{$id}}/dislike">
                    <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>
                </a>
                @else
                <a href="/index/podcast/{{$id}}/like">
                    <i class="far fa-heart fa-xl love-icon action-icon"></i>
                </a>
                @endif
                <b>100</b>
            </div>
            <div class="col-6 col-md-6" style="text-align: right">
                {{-- <i class="fa-regular fa-share-from-square"></i> --}}
                <i class="fa-solid fa-share-from-square"></i>
                <b>78</b>
            </div>
        </div>
        </div>

        <h2>{{ Str::title($konten->judul_konten) }}</h2>
        <p>{{$konten->deskripsi_konten}}</p>
        <div class="container border">


            {{-- buat komentar --}}
            <form id="isi_komentar" action="/index/podcast/{{$id}}/proses" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <label class="h4" for="isi_komentar">Tambahkan Komentar</label>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <textarea id="isi_komentar" name="isi_komentar" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

            <div class="h2">Komentar</div>

            @forelse ($komentar as $komentars)
            <div class="card mb-5">
                @if ($user = $komentars->userKomen)
                <div class="card-head h5 p-1">{{$user->name}}</div>
                @else
                <div>not found</div>
                @endif
                <div class="card-body">{!!$komentars->isi_komentar!!}</div>
            </div>
            @empty
            <div class="h5">tidak ada komentar</div>
            @endforelse
        </div>
    </div>
    @endforeach
</div>

</div>
{{-- end of search --}}

@endsection
