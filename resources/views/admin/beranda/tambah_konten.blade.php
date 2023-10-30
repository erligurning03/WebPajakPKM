@extends('admin.layouts.navbar_admin')
@section('container')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tambah Konten</h1>

                    <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambahkan Konten</h6>
                            </div>

                        <div class="container">
                            <div class="row justify-content-center">

                                        <div class="card-body">
                                            <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{-- <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="cover_konten">Cover Konten</label>
                                                    <input type="text" class="form-control" id="cover_konten" name="cover_konten" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul_konten">Judul Konten</label>
                                                    <input type="text" class="form-control" id="judul_konten" name="judul_konten" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="url_konten">URL Konten</label>
                                                    <input type="text" class="form-control" id="url_konten" name="url_konten" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi_konten">Isi Konten</label>
                                                    <input type="text" class="form-control" id="deskripsi_konten" name="deskripsi_konten" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tipe_konten_id">Jenis Konten</label>
                                                    <input type="text" class="form-control" id="tipe_konten_id" name="tipe_konten_id" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="diupload_oleh">Diupload oleh</label>
                                                    <input type="text" class="form-control" id="diupload_oleh" name="diupload_oleh" required>
                                                </div>
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
