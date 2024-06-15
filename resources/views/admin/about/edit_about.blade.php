@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('about.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judulabout">Judul About</label>
                    <input type="text" name="judulabout" class="form-control" id="judulabout" value="{{$editData->judulabout}}" required>
                </div>
                <div class="form-group">
                    <label for="desabout">Deskripsi</label>
                    <textarea name="desabout" class="form-control" id="desabout" rows="5" value="{{$editData->desabout}}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="potoabout">Foto Berita</label>
                    <input type="file" name="potoabout" class="form-control-file" id="potoabout" value="{{$editData->potoabout}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
