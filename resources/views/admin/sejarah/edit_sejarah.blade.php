@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Data Sejarah</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Sejarah</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('sejarah.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" value="{{$editData->deskripsi}}" required></textarea>
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
                    deskripsi: {
                        required: true,
                    },
                },
                messages: {
                    deskripsi: {
                        required: "Deskripsi berita harus diisi.",
                    },
                },
            });
        });
    </script>
@endpush
