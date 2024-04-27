@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Kegiatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
                <li class="breadcrumb-item active">Edit Kegiatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit kegiatan</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('kegiatan.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Judul">Judul</label>
                    <input type="text" name="judulpost" class="form-control" id="judulpost" value="{{$editData->judulpost}}" required>
                </div>
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" name="tanggalpost" class="form-control" id="tanggalpost" value="{{$editData->tanggalpost}}" required>
                </div>
                <div class="form-group">
                    <label for="Photo">Photo Post</label>
                    <input type="file" name="photopost" class="form-control-file" id="photopost" value="{{$editData->photopost}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</main>