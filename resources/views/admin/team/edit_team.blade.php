@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Tim Kami</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Team</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('team.update', $editData->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$editData->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="posisi">Jabatan</label>
                    <input type="text" name="posisi" class="form-control" id="posisi" rows="5" value="{{$editData->posisi}}">
                </div>
                <div class="form-group">
                    <label for="poto">Foto</label>
                    <input type="file" name="poto" class="form-control-file" id="poto" value="{{$editData->poto}}" required>
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
                    nama: {
                        required: true,
                    },
                    posisi: {
                        required: true,
                    },
                    poto: {
                        required: true,
                    },
                },
                messages: {
                    nama: {
                        required: "Nama tim harus diisi.",
                    },
                    posisi: {
                        required: "Jabatan tim harus diisi.",
                    },
                    poto: {
                        required: "Foto tim harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
