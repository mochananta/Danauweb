@extends('admin.master')
@section('admin')
<main id="main" class="main">

<<<<<<< HEAD
  <div class="pagetitle">
    <h1>Tabel About</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item">Konten</li>
        <li class="breadcrumb-item active">About</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="co">
                <a href="{{route('about.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
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
                        <th>Photo</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="text-center">
                        <td><img src=" {{asset('storage/'.$item->potoabout)}}" width="100px" alt="photo" /></td>
                        <td>{{$item->judulabout}}</td>
                        <td>{{$item->desabout}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('about.edit',$item->id)}}" class="col btn btn-success" style="margin:10px">Edit</a>
                                    <a href="{{route('about.delete',$item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
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
=======
    <div class="pagetitle">
        <h1>Tabel About</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item"><a href="{{ route('about.view') }}">About</a></li>
        </nav>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="co">
                    <a href="{{route('about.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Judul</th>
                            <th>Id Video YouTube</th>
                            <th>Deskripsi</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="text-center">
                            <td>{{$item->judul}}</td>
                            <td>{{$item->link}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td><img src="{{asset('storage/'.$item->foto)}}" width="100px" alt="photo"></td>
                            <td>
                                <div class="row">
                                    <a href="{{route('about.edit', $item->id)}}" class="col btn btn-success" style="margin:10px">Edit</a>
                                    <a href="{{route('about.delete', $item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
>>>>>>> 83680d2b7cf331d9d71c6d2b7f9e2bd4c5677b39
