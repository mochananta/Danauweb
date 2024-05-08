@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Kegiatan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Tambah Recent Post</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Kegiatan</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('kegiatan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judulkegiatan">Judul</label>
                    <input type="text" name="judulkegiatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tanggalkegiatan">Tanggal</label>
                    <input type="date" name="tanggalkegiatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="photokegiatan">Photo Post</label>
                    <input type="file" name="photokegiatan" class="form-control-file" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
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
                    judulkegiatan: {
                        required: true,
                    },
                    tanggalkegiatan: {
                        required: true,
                    },
                    photokegiatan: {
                        required: true,
                    },
                },
                messages: {
                    judulkegiatan: {
                        required: "Judul harus diisi.",
                    },
                    tanggalkegiatan: {
                        required: "Tanggal harus diisi.",
                    },
                    photokegiatan: {
                        required: "Photo harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
