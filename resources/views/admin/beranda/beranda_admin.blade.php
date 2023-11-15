@extends('admin.layouts.navbar_admin')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Selamat Datang di Admin Rujak </h1>

    <!-- DataTales Example -->
    <div class="sidebar-brand-icon">
        <div class="d-flex align-items-center">
            <img class="img-fluid pad" text-align: center; display: block; width="250" height="124" src="{{asset('admin_assets\assets\img\logo.jpeg')}}" style="align-content: center;justify-content:center" >
            {{-- <i class="fa fa-home" aria-hidden="true"></i> --}}
        </div>
    </div>


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website Rujak 2023</span>
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





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
