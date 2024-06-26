@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data About</h1>
        <nav>
            {{-- Kode uji coba --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">About</a></li>
                <li class="breadcrumb-item"><a href="">Tambah</a></li>
            </ol>

            {{-- Kode Asli --}}
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item"><a href="{{ route('about.view') }}">About</a></li>
            </ol> --}}
        </nav>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah About</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" required>
                </div>
                <div class="form-group">
                    <label for="link">
                        Id Video Youtube
                        (contoh : https://youtu.be/<span class="bg-warning">fSkTpAOXtys?si=--O0Or_xLyGAUugT</span>)
                    </label>
                    <input type="text" name="link" class="form-control" id="link" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control-file" id="foto" required>
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
                    required: "Judul harus diisi",
                },
                deskripsi: {
                    required: "Description harus diisi",
                },
                foto: {
                    required: "Foto harus diunggah",
                },
            },
        });
    });
    </script>
@endpush
