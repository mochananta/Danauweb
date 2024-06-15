@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Berita</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judulabout">Judul About</label>
                    <input type="text" name="judulabout" class="form-control" id="judulabout" required>
                </div>
                <div class="form-group">
                    <label for="desabout">Deskripsi</label>
                    <textarea name="desabout" class="form-control" id="desabout" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="potoabout">Foto About</label>
                    <input type="file" name="potoabout" class="form-control-file" id="potoabout" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</main>
@endsection
