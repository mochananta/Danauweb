@extends('admin.master')
@section('admin')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tabel Kegiatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Recent Post</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="co">
                <a href="{{ route('kegiatan.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>JudulPost</th>
                        <th>Tanggal</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="text-center">
                        <td>{{$item->judulkegiatan}}</td>
                        <td>{{$item->tanggalkegiatan}}</td>
                        <td><img src=" {{asset('storage/'.$item->photokegiatan)}}" width="100px" alt="photo" /></td>
                        <td>
                            <div class="row">
                                <a href="{{route('kegiatan.edit',$item->id)}}" class="col btn btn-success"
                                    style="margin:10px">Edit</a>
                                    <a href="{{route('kegiatan.delete',$item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</main><!-- End #main -->  
@endsection
