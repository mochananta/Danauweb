@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Kegiatan</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kegiatan</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('kegiatan.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
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
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</main>
@endsection

@push('js')
@endpush