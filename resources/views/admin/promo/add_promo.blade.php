@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Tambah Promo</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Promo</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Recent Post</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('promo.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Judul">Tema Promo</label>
                    <input type="text" name="temapromo" class="form-control" id="temapromo" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Deskripsi</label>
                    <textarea name="despromo" class="form-control" id="despromo" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="Photo">Photo Promo</label>
                    <input type="file" name="fotopromo" class="form-control-file" id="fotopromo" required>
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
                    judulpost: {
                        required: true,
                    },
                    tanggalpost: {
                        required: true,
                    },
                    photopost: {
                        required: true,
                    },
                },
                messages: {
                    judulpost: {
                        required: "Judul harus diisi.",
                    },
                    tanggalpost: {
                        required: "Tanggal harus diisi.",
                    },
                    photopost: {
                        required: "Photo harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
