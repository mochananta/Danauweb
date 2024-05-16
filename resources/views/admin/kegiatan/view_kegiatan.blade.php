@extends('admin.master')
@section('admin')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tabel Kegiatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Tables</li>
<<<<<<< HEAD
        <li class="breadcrumb-item active">Recent Post</li>
=======
        <li class="breadcrumb-item active">Kegiatan</li>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="co">
<<<<<<< HEAD
                <a href="{{ route('kegiatan.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
=======
                <a href="{{route('kegiatan.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
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
<<<<<<< HEAD
                        <th>JudulPost</th>
                        <th>Tanggal</th>
                        <th>Photo</th>
=======
                        <th>Topik Kegiatan</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Photo</th>
                        <th>Photo Tambahan</th>
                        <th>Deskripsi</th>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
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
=======
                    @foreach ($kegiatans as $kegiatan)
                    <tr class="text-center">
                        <td>{{$kegiatan->topik}}</td>
                        <td>{{$kegiatan->judulkegiatan}}</td>
                        <td>{{$kegiatan->tanggalkegiatan}}</td>
                        <td><img src=" {{asset('storage/'.$kegiatan->potokegiatan1)}}" width="100px" alt="photo" /></td>
                        <td><img src=" {{asset('storage/'.$kegiatan->potokegiatan2)}}" width="100px" alt="photo" /></td>
                        <td>{{$kegiatan->deskegiatan}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('kegiatan.edit',$kegiatan->id)}}" class="col btn btn-success"
                                    style="margin: 0 10px">Edit</a>
                                    <a href="{{route('kegiatan.delete',$kegiatan->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
>>>>>>> cfb2683c6d86f8993c9fe9cc0d6310284931e9a7
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
