@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Visi & Misi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Visi & Misi Perusahaan</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Update Data</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('visimisi.store') }}" enctype="multipart/form-data">
                @csrf                
                <div class="form-group">
                    <label for="desvisimisi">Visi & Misi</label>
                    <textarea name="desvisimisi" class="form-control" id="desvisimisi" rows="5" required></textarea>
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
                    desvisimisi: {
                        required: true,
                    },
                },
                messages: {
                    desvisimisi: {
                        required: "Visi & Misi harus diisi.",
                    },
                },
            });
        });
    </script>
@endpush
