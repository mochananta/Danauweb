@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Recent Post</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Form Recent Post</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('recentpost.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" name="judulpost" class="form-control" id="judulpost" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggalpost" class="form-control" id="tanggalpost" required>
                </div>
                <div class="form-group">
                    <label for="Photo">Photo Post</label>
                    <input type="file" name="photopost" class="form-control-file" id="photopost" required>
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
