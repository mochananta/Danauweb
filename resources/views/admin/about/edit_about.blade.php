@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
<<<<<<< HEAD
        <h1>Edit Data Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
=======
        <h1>Edit About</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">About</a></li>
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
<<<<<<< HEAD
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
=======
            <h6 class="m-0 font-weight-bold text-primary">Form Edit About</h6>
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('about.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
<<<<<<< HEAD
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
=======
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{$editData->judul}}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" value="{{$editData->deskripsi}}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="foto" value="{{$editData->foto}}" required>
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
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
<<<<<<< HEAD
                    judulberita: {
                        required: true,
                    },
                    tanggal: {
=======
                    judul: {
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
                        required: true,
                    },
                    deskripsi: {
                        required: true,
                    },
<<<<<<< HEAD
                    fotoberita: {
=======
                    foto: {
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
                        required: true,
                    },
                },
                messages: {
<<<<<<< HEAD
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
=======
                    judul: {
                        required: "Judul about harus diisi.",
                    },
                    deskripsi: {
                        required: "Deskripsi about harus diisi.",
                    },
                    foto: {
                        required: "Foto about harus diunggah.",
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
                    },
                },
            });
        });
    </script>
@endpush
