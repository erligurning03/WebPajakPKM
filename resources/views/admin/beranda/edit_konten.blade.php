@extends('admin.layouts.navbar_admin')
@section('container')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Edit Konten</h1>

                    <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Update Konten</h6>
                            </div>

                        <div class="container">
                            <div class="row justify-content-center">

                                        <div class="card-body">
                                            <form action="{{ route('konten.update',$dataKonten->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                {{-- <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="cover_konten">Cover Konten</label>
                                                    <input type="text" class="form-control" id="cover_konten" name="cover_konten" value ="{{ old('cover_konten', $dataKonten->cover_konten) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul_konten">Judul Konten</label>
                                                    <input type="text" class="form-control" id="judul_konten" name="judul_konten" value ="{{ old('judul_konten', $dataKonten->judul_konten) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="url_konten">URL Konten</label>
                                                    <input type="text" class="form-control" id="url_konten" name="url_konten" value="{{ old('url_konten', $dataKonten->url_konten) }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="isi_konten">Deskripsi Konten</label>
                                                    <textarea class="form-control quill-editor" name="deskripsi_konten" id="deskripsi_konten">
                                                        {{ old('deskripsi_konten', $dataKonten->deskripsi_konten) }}
                                                    </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tipe_konten">Jenis Konten</label>
                                                    <select class="form-select @error('tipe_konten') is-invalid @enderror" name="tipe_konten" id="tipe_konten">
                                                        <option disabled selected>Pilih Jenis Konten...</option>
                                                        @foreach ($jenisKonten as $jenisKonten)
                                                        @if (old('tipe_konten', $dataKonten->tipe_konten_id) == $jenisKonten->id)
                                                            <option value="{{ $jenisKonten->id }}" selected>{{ ucwords($jenisKonten->tipe_konten) }}</option>
                                                        @else
                                                            <option value="{{ $jenisKonten->id }}">{{ ucwords($jenisKonten->tipe_konten) }}</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    @error('tipe_konten')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label for="tipe_konten_id">Jenis Konten</label>
                                                    <input type="text" class="form-control" id="tipe_konten_id" name="tipe_konten_id" required>
                                                </div> --}}
                                                {{-- <div class="form-group">
                                                    <label for="foto">Gambar:</label>
                                                    <input type="file" name="image" id="image" class="form-control">
                                                    @error('image')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                                </div> --}}
                                                <button type="submit" style="font-weight:bold;" class="btn btn-primary float-right" >Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

    @endsection
