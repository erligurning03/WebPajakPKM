@extends('layouts.navbar')
@section('css')
<link rel="stylesheet" href="{{ asset('css/qna_style.css') }}">
@endsection
@section('container')

<div class="container">
  {{-- tombol tambah komentar --}}
  <div class="box mt-3" style="width: 100%; height: 50px;">
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <span>Ingin bertanya tentang pajak kepada forum?</span>
      <i class="fa-solid fa-plus"></i>         
    </a>
  </div>
  {{-- end tombol komentar --}}
  {{-- tombol search --}}
  <div class="box mt-3" style="width: 100%;justify-content: space-between;">
    <input type="text" placeholder="Cari postingan..." id="searchInput" oninput="#" style="width: 90%;">
    <i class="fa-solid fa-magnifying-glass"></i>
  </div>
  {{-- end of search --}}

  {{-- button search --}}
  {{-- <div class="input-group">
    <span class="input-group-text border border-dark" id="basic-addon1" style="cursor: pointer;" onclick="#"><i class="bi bi-search"></i></span>
    <input type="text" class="form-control border border-dark" placeholder="mau cari pertanyaan apa ?" aria-label="Cari" aria-describedby="basic-addon1" id="search-input" style="width:40%;">
  </div> --}}
  {{-- end of button search --}}

  {{-- tombol trending dan terbaru  --}}
  <div class="d-flex justify-content-center mt-3">
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic radio toggle button group" style="font-family: 'Courier New', Courier, monospace;  width:60%; height: 40px;">
      <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
      <label class="btn btn-outline-warning btn-lg" for="btnradio1"><b>TRENDING</b></label>
    
      <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
      <label class="btn btn-outline-warning btn-lg" for="btnradio2"><B>TERBARU</B></label>
    </div>
  </div>

  {{-- end of trending dan terbaru --}}

    {{-- card pertanyaan 1--}}
    {{-- @foreach ($questions as $question) --}}
    <div class="card mt-5">
        <div class="card-header">
            <img src="{{asset('img/podcast2.jpg')}}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
            <span>martin</span>
            {{-- <span class="float-right">{{ $question->created_at->format('Y-m-d H:i:s') }}</span> --}}
            <span class="float-right">| 5 hari lalu</span>
        </div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, illum magnam dolores quo aliquid delectu</p>
        </div>
        <div class="card-footer">
          <i class="fa-regular fa-comment"></i>
          <i class="far fa-heart fa-xl love-icon action-icon"></i>
          <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>            
          <b>100</b>
          <i class="fa-solid fa-share-from-square"></i>
          <b>78</b>
        </div>
    </div>
    {{-- end of card pertanyaan --}}
    {{-- @endforeach --}}

    {{-- card pertanyaan selebihnya --}}
    <div class="card mt-5">
      <div class="card-header">
          <img src="{{asset('img/podcast2.jpg')}}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
          <span>lngshe</span>
          {{-- <span class="float-right">{{ $question->created_at->format('Y-m-d H:i:s') }}</span> --}}
          <span class="float-right">| 2 hari lalu</span>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, illum magnam dolores quo aliquid delectu. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus facilis, aliquid sapiente soluta dolores quis fuga esse ad ratione? Quod reprehenderit omnis vitae minima ratione, voluptatum ab suscipit aspernatur impedit?</p>
      </div>
      <div class="card-footer">
        <i class="fa-regular fa-comment"></i>
        <i class="far fa-heart fa-xl love-icon action-icon"></i>
        <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>            
        <b>100</b>
        <i class="fa-solid fa-share-from-square"></i>
        <b>78</b>
      </div>
    </div>

  <div class="card mt-5">
    <div class="card-header">
        <img src="{{asset('img/podcast2.jpg')}}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
        <span>megantropus</span>
        {{-- <span class="float-right">{{ $question->created_at->format('Y-m-d H:i:s') }}</span> --}}
        <span class="float-right">| 3 hari lalu</span>
    </div>
    <div class="card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, illum magnam dolores quo aliquid delectu</p>
    </div>
    <div class="card-footer">
      <i class="fa-regular fa-comment"></i>
      <i class="far fa-heart fa-xl love-icon action-icon"></i>
      <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>            
      <b>100</b>
      <i class="fa-solid fa-share-from-square"></i>
      <b>78</b>
    </div>
  </div>
{{-- end of card pertanyaan --}}

<!-- Modal Tambahkan pertanyaan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l">
    <div class="modal-content">
      <div class="modal-header">
        <div id="notification1" style="text-align: center;"></div>
        <h5 class="modal-title" id="exampleModalLabel">Berikan Pertanyaan kepada Forum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="#"></button>
      </div>
      <div class="modal-body">
        <form id="postForm" method="POST" action="#" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <p style="color:red;  font-size: 12px;">pertanyaan tidak boleh mengandung unsur sara dan pornografi</p>
            <label for="judul" class="form-label">Input Pertanyaan</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul pertanyaan" required>
          </div>
          <hr class="modal-divider">
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- enf of pertanyaan --}}
<!-- Modal Komentar -->
<!-- Modal -->
{{-- <div class="modal fade" id="modalKomentar{{ $post->id }}" tabindex="-1" aria-labelledby="modalKomentarLabel{{ $post->id }}" aria-hidden="true"> --}}
<div class="modal fade" id="modalKomentar" tabindex="-1" aria-labelledby="modalKomentarLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKomentarLabel">Input Komentar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 50vh; overflow-y: auto;">
        {{-- @if ($post->komentarPosts && count($post->komentarPosts) > 0) --}}
        <div class="comments-section">
          {{-- @foreach($post->komentarPosts->where('id_post', $post->id)->sortByDesc('created_at') as $comment) --}}
          <div class="mb-3">
            <div class="d-flex align-items-start">
              {{-- <img src="{{ asset('img/foto_profile/'.$comment->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black;"> --}}
              <img src="{{asset('img/podcast2.jpg')}}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black;">
              <div class="ms-2">
                <b><span>paulus</span></b>
                <span class="ms-2 text-muted">5 detik yang lalu</span>
                <p style="margin-top: 5px;">saya juga ga tau, mungkin bisa baca buku dulu</p>
              </div>
              {{-- @if(Auth::check())
              @if ($comment->user->nik == Auth::user()->nik) --}}
              <div class="ms-auto mt-2">
                {{-- <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}"> --}}
                  <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <p>No comments available.</p>
      </div>
      {{-- @if(Auth::check()) --}}
      <div class="modal-footer">
        <form action="#" method="POST" class="w-100">
          @csrf
          <input type="hidden" name="id_post" value="#">
          <div class="input-group mb-3">
            <textarea class="form-control" id="isi_komentar" name="isi_komentar" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- @if(Auth::check()) --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Komentar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus komentar ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="#" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- end of all about komentar --}}

</div>


@endsection