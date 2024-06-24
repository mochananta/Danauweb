@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit About</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">About</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit About</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('about.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
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
                    judul: {
                        required: true,
                    },
                    deskripsi: {
                        required: true,
                    },
                    foto: {
                        required: true,
                    },
                },
                messages: {
                    judul: {
                        required: "Judul about harus diisi.",
                    },
                    deskripsi: {
                        required: "Deskripsi about harus diisi.",
                    },
                    foto: {
                        required: "Foto about harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
