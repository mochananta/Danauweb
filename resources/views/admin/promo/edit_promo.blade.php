@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tabel Edit Promo</h1>
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
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('promo.update',$editData->id)}}" enctype="multipart/form-data">
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
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</main>