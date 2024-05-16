@extends('admin.master')
<<<<<<< HEAD

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
                <li class="breadcrumb-item active">Edit Kegiatan</li>
=======
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Kegiatan</a></li>
                <li class="breadcrumb-item active">Edit</li>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
<<<<<<< HEAD
            <h6 class="m-0 font-weight-bold text-primary">Form Edit kegiatan</h6>
=======
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kegiatan</h6>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('kegiatan.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
<<<<<<< HEAD
                    <label for="Judul">Judul</label>
                    <input type="text" name="judulkegiatan" class="form-control" value="{{$editData->judulkegiatan}}" required>
                </div>
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" name="tanggalkegiatan" class="form-control"  value="{{$editData->tanggalkegiatan}}" required>
                </div>
                <div class="form-group">
                    <label for="Photo">Photo Post</label>
                    <input type="file" name="photokegiatan" class="form-control-file" value="{{$editData->photokegiatan}}" required>
=======
                    <label for="topik">Topik Kegiatan</label>
                    <select name="topik" id="topik" class="form-control" required>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Budaya">Budaya</option>
                        <option value="Olahraga">Olahraga</option>
                    </select>
                </div>                
                <div class="form-group">
                    <label for="judulkegiatan">Judul</label>
                    <input type="text" name="judulkegiatan" class="form-control" id="judulkegiatan" required>
                </div>
                <div class="form-group">
                    <label for="tanggalkegiatan">Tanggal</label>
                    <input type="date" name="tanggalkegiatan" class="form-control" id="tanggalkegiatan" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskegiatan" class="form-control" id="deskegiatan" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="potokegiatan1">Foto Kegiatan</label>
                    <input type="file" name="potokegiatan1" class="form-control-file" id="potokegiatan1" required>
                </div>
                <div class="form-group">
                    <label for="potokegiatan2">Foto Tambahan</label>
                    <input type="file" name="potokegiatan2" class="form-control-file" id="potokegiatan2" required>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
<<<<<<< HEAD
</main>
=======
</main>
@endsection

@push('js')
@endpush
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
