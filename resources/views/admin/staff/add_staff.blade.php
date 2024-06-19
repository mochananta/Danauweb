@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Update Staff/Karyawan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item">Update Data</li>
                <li class="breadcrumb-item active">Update Staff/Karyawan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Berita</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="satff">Nama Karyawan</label>
                    <input type="text" name="staff" class="form-control" id="staff" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto Karyawan</label>
                    <input type="file" name="foto" class="form-control-file" id="foto" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="topik" id="topik" class="form-control" required>
                        <option value="Pendidikan">Pemimpin</option>
                        <option value="Budaya">Staff</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ">Tambah</button>
            </form>
        </div>
    </div>
</main>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#validate").validate({
                rules: {
                    judulberita: {
                        required: true,
                    },
                    tanggal: {
                        required: true,
                    },
                    deskripsi: {
                        required: true,
                    },
                    fotoberita: {
                        required: true,
                    },
                },
                messages: {
                    judulberita: {
                        required: "Judul berita harus diisi.",
                    },
                    tanggal: {
                        required: "Tanggal harus diisi.",
                    },
                    deskripsi: {
                        required: "Deskripsi berita harus diisi.",
                    },
                    fotoberita: {
                        required: "Foto berita harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
