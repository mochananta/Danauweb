@extends('admin.master')
@section('admin')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tabel Promo</h1>
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
        <div class="row">
            <div class="co">
                <a href="{{ route('promo.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
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
                        <th>TemaPromo</th>
                        <th>Deskripsi</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr class="text-center">
                        <td>{{$item->temapromo}}</td>
                        <td>{{$item->despromo}}</td>
                        <td><img src=" {{asset('storage/'.$item->fotopromo)}}" width="100px" alt="photo" /></td>
                        <td>
                            <div class="row">
                                <a href="{{route('promo.edit',$item->id)}}" class="col btn btn-success"
                                    style="margin:10px">Edit</a>
                                    <a href="{{route('promo.delete',$item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
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
