@extends('admin.layouts.navbar_admin')
@section('container')

<script>
    tinymce.init({ 
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      min_height: 70,
    });
  </script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Kuis</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-3">

        <form method="POST" action="{{ route('kuis.update', $id) }}">
            @csrf
            @method('PUT')
            <!-- Use the PUT method for updates -->

            <!-- Kuis Level -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h2>Kuis Level</h2>
            <div class="form-group">
                <label for="nama_kuis">Nama Kuis:</label>
                <input type="text" id="nama_kuis" name="nama_kuis" value="{{ $nama_kuis }}" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <label for="waktu_kuis">Waktu Kuis (minutes):</label>
                <input type="number" id="waktu_kuis" name="waktu_kuis" value="{{ $waktu_kuis }}" class="form-control"
                    required>
            </div>

            <!-- Kuis Soal -->
            <h2>Kuis Soal</h2>
            @foreach($kuisSoals as $kuisSoal)
            <div class="form-group">
                <h4>Soal Nomor {{ $kuisSoal->no_soal }} :</h4>
                <label for="isi_soal_{{ $kuisSoal->id }}">Isi pertanyaan :</label>
                <input type="text" id="isi_soal_{{ $kuisSoal->id }}" name="isi_soal_{{ $kuisSoal->id }}"
                    value="{{ $kuisSoal->isi_soal }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jawaban_soal_{{ $kuisSoal->id }}">Jawaban Soal:</label>
                <div class="form-check">
                    <input type="radio" id="jawaban_soal_{{ $kuisSoal->id }}_a" name="jawaban_soal_{{ $kuisSoal->id }}"
                        value="A" class="form-check-input" required {{ $kuisSoal->jawaban_soal === 'A' ? 'checked' : ''
                    }}>
                    <label class="form-check-label" for="jawaban_soal_{{ $kuisSoal->id }}_a">A</label>
                </div>

                <div class="form-check">
                    <input type="radio" id="jawaban_soal_{{ $kuisSoal->id }}_b" name="jawaban_soal_{{ $kuisSoal->id }}"
                        value="B" class="form-check-input" required {{ $kuisSoal->jawaban_soal === 'B' ? 'checked' : ''
                    }}>
                    <label class="form-check-label" for="jawaban_soal_{{ $kuisSoal->id }}_b">B</label>
                </div>

                <div class="form-check">
                    <input type="radio" id="jawaban_soal_{{ $kuisSoal->id }}_c" name="jawaban_soal_{{ $kuisSoal->id }}"
                        value="C" class="form-check-input" required {{ $kuisSoal->jawaban_soal === 'C' ? 'checked' : ''
                    }}>
                    <label class="form-check-label" for="jawaban_soal_{{ $kuisSoal->id }}_c">C</label>
                </div>

                <div class="form-check">
                    <input type="radio" id="jawaban_soal_{{ $kuisSoal->id }}_d" name="jawaban_soal_{{ $kuisSoal->id }}"
                        value="D" class="form-check-input" required {{ $kuisSoal->jawaban_soal === 'D' ? 'checked' : ''
                    }}>
                    <label class="form-check-label" for="jawaban_soal_{{ $kuisSoal->id }}_d">D</label>
                </div>
            </div>

            <div class="form-group">
                <label for="pembahasan_soal_{{ $kuisSoal->id }}">Pembahasan Soal:</label>
                <textarea id="pembahasan_soal_{{ $kuisSoal->id }}" name="pembahasan_soal_{{ $kuisSoal->id }}"
                    class="form-control" required>{{ $kuisSoal->pembahasan_soal }}</textarea>
            </div>

            <!-- Kuis Jawaban -->

            @foreach($kuisSoal->kuisJawaban as $kuisJawaban)
            <div class="form-group">
                <label for="opsi_jawaban_{{ $kuisJawaban->id_soal }}">Opsi Jawaban {{ $kuisJawaban->opsi_jawaban
                    }}:</label>
                {{-- <input type="hidden" id="opsi_jawaban_{{ $kuisJawaban->id_soal }}"
                    name="opsi_jawaban_{{ $kuisJawaban->id_soal }}" value="{{ $kuisJawaban->opsi_jawaban }}"
                    class="form-control" required> --}}
                <textarea id="isi_jawaban_{{ $kuisJawaban->id_soal }}" name="isi_jawaban_{{ $kuisJawaban->id_soal }}_{{ $kuisJawaban->opsi_jawaban }}"
                    class="form-control" required>{{ $kuisJawaban->isi_jawaban }}</textarea>
            </div>

            {{-- <div class="form-group">
                <label for="isi_jawaban_{{ $kuisJawaban->id_soal }}">Isi Jawaban:</label>
                <textarea id="isi_jawaban_{{ $kuisJawaban->id_soal }}" name="isi_jawaban_{{ $kuisJawaban->id_soal }}"
                    class="form-control" required>{{ $kuisJawaban->isi_jawaban }}</textarea>
            </div> --}}
            @endforeach
            @endforeach

            <button type="submit" class="btn btn-success">Update Kuis</button>
        </form>




        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Website Desa Nagori NagoriTongah 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

{{--
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div> --}}



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection
