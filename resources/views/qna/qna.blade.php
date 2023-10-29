@extends('layouts.navbar')
@section('container')


<!-- fitur search -->
<div class="box mt-3" style="width: 100%;justify-content: space-between;">
    <input type="text" placeholder="Cari postingan..." id="searchInput" oninput="searchPosts()">
    <i class="fa-solid fa-magnifying-glass"></i>
  </div>
  <div class="box mt-3" style="width: 100%; height: 50px;" onclick="openNav()">
    <a href="#">
      <span>Cari Berdasarkan:</span>
    </a>
  </div>
  @else
  @endif
  @foreach($posts->sortByDesc('created_at') as $post)
  <div class="box2 mt-5" id="post-{{ $post->id }}" data-judul="{{ $post->judul }}" data-isi="{{ $post->isi_post }}" data-penulis="{{ $post->user->nama_lengkap }}" data-tanggal="{{ $post->created_at->toDateString() }}">
    <div class="post-header">
      <div class="profile-picture">
        <img src="{{ asset('img/foto_profile/'.$post->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
      </div>
      <div class="post-info">
        <span style="font-weight: bold;">{{ $post->user->nama_lengkap }}</span>
        <span style="font-weight: normal;">{{ $post->created_at->diffForHumans() }}</span>
      </div>
      @if(Auth::check())
      @if(Auth::user()->nik == $post->user->nik)
      <div class="delete-button" style="margin-left: auto;">
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePostModal-{{ $post->id }}">
          <i class="far fa-trash-alt"></i>
        </button>
      </div>
      @endif
      @else
      @endif
      <!-- Modal Konfirmasi Hapus -->
      <div class="modal fade" id="deletePostModal-{{ $post->id }}" tabindex="-1" aria-labelledby="deletePostModalLabel-{{ $post->id }}" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deletePostModalLabel-{{ $post->id }}">Konfirmasi Hapus</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda ingin menghapus postingan ini?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <form action="{{ route('post.delete', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="post-content">
      <h4>{{ $post->judul }}</h4>
      <p>{{ $post->isi_post }}</p>
      @php
      $fotoPosts = \App\Models\FotoPost::where('id_post', $post->id)->get();
      @endphp

      @if($fotoPosts && $fotoPosts->count() > 0)
      <div class="post-image-container">
        <div class="post-image-wrapper">
          @foreach($fotoPosts as $index => $fotoPost)
          <img src="{{ asset('gambar/'.$fotoPost->foto) }}" alt="Foto Post" class="card-image @if($index === 0) active @endif">
          @endforeach
        </div>
        @if($fotoPosts->count() > 1)
        <div class="next-arrow" onclick="nextImage(this)">
          <i class="fas fa-chevron-right"></i>
        </div>
        @endif
      </div>
      @endif
    </div>

    <div class="post-actions" style="justify-content: space-between;">
      <div>
        <!-- Tombol Like -->
        @if(Auth::check())
        <a href="{{ route('toggle.like', $post->id) }}" data-post-id="{{ $post->id }}">
          @if ($post->isLikedByUser())
          <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>
          @else
          <i class="far fa-heart fa-xl love-icon action-icon"></i>
          @endif
        </a>
        <b id="like-count">{{ $post->jumlah_like }}</b>
        @else
        <b id="like-count"><i class="far fa-solid fa-heart fa-xl" style="color: #bcbdbd;"></i> {{ $post->jumlah_like }}</b>
        @endif

        <i class="far fa-comment fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalKomentar{{ $post->id }}" data-post-id="{{ $post->id }}"></i>
        <b id="like-count">{{ $post->jumlah_komentar }}</b>
        @if(Auth::check())
        @if(Auth::user()->nik != $post->user->nik)
        <i class="far fa-flag fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalLaporan{{ $post->id }}" data-post-id="{{ $post->id }}"></i>
        @endif
        @else
        @endif
      </div>
      <p>{{ $post->created_at->isoFormat('dddd, D MMMM YYYY') }}</p>
    </div>
    @if(session("comment_success_{$post->id}"))
    <div class="alert alert-success mt-2" role="alert">
      {{ session("comment_success_{$post->id}") }}
    </div>
    @endif
    @if(session('comment_error_{$post->id}'))
    <div class="alert alert-danger" role="alert">
      {{ session('comment_error_{$post->id}') }}
    </div>
    @endif
  </div>
  @endforeach
</div>
</div>
</div>
</div>


<!-- Modal Tambahkan Postingan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
      <div class="modal-content">
        <div class="modal-header">
          <div id="notification1" style="text-align: center;"></div>
          <h5 class="modal-title" id="exampleModalLabel">Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="checkFormChanges()"></button>
        </div>
        <div class="modal-body">
          <form id="postForm" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <p style="color:red;  font-size: 12px;">Postingan tidak boleh mengandung unsur sara dan pornografi</p>
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Postingan" required>
            </div>
            <div class="mb-3">
              <label for="isi_post" class="form-label">Isi Post</label>
              <textarea class="form-control" id="isi_post" name="isi_post" rows="3" placeholder="Apa yang Anda pikirkan?" required></textarea>
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <div id="imagePreview"></div>
              <div>
                <button type="button" class="btn btn-primary" onclick="addPhotoInput()">Tambahkan Foto</button>
                <button type="button" class="btn btn-danger" onclick="removeAllPhotos()">Hapus Semua Foto</button>
              </div>
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
  <script>
    var formChanged = false;
  



<!-- Modal Komentar -->
<!-- Modal -->
@foreach($posts as $post)
<div class="modal fade" id="modalKomentar{{ $post->id }}" tabindex="-1" aria-labelledby="modalKomentarLabel{{ $post->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKomentarLabel{{ $post->id }}">Add Comment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 50vh; overflow-y: auto;">
        @if ($post->komentarPosts && count($post->komentarPosts) > 0)
        <div class="comments-section">
          @foreach($post->komentarPosts->where('id_post', $post->id)->sortByDesc('created_at') as $comment)
          <div class="mb-3">
            <div class="d-flex align-items-start">
              <img src="{{ asset('img/foto_profile/'.$comment->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black;">
              <div class="ms-2">
                <b><span>{{ $comment->user->nama_lengkap }}</span></b>
                <span class="ms-2 text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                <p style="margin-top: 5px;">{{ $comment->isi_komentar }}</p>
              </div>
              @if(Auth::check())
              @if ($comment->user->nik == Auth::user()->nik)
              <div class="ms-auto mt-2">
                <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
              @endif
              @else
              @endif
            </div>
          </div>
          @endforeach
        </div>
        @else
        <p>No comments available.</p>
        @endif
      </div>
      @if(Auth::check())
      <div class="modal-footer">
        <form action="{{ route('add.comment') }}#post-{{ $post->id }}" method="POST" class="w-100">
          @csrf
          <input type="hidden" name="id_post" value="{{ $post->id }}">
          <div class="input-group mb-3">
            <textarea class="form-control" id="isi_komentar" name="isi_komentar" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      @else
      @endif
    </div>
  </div>
</div>

@if(Auth::check())
@foreach($post->komentarPosts as $comment)
@if ($comment->user->nik == Auth::user()->nik)
<div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $comment->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel{{ $comment->id }}">Konfirmasi Hapus Komentar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus komentar ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action="{{ route('delete.comment', ['id' => $comment->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach
@else
@endif
@endforeach


@endsection