@extends('admin.master')
@section('admin')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tabel Update Staff/Karyawan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item">Update Data</li>
        <li class="breadcrumb-item active">Update Staff/Karyawan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="co">
                <a href="{{route('staff.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
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
                        <th>Nama</th>
                        <th>Foto Karyawan</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staff as $item)
                    <tr class="text-center">
                        <td>{{$item->name}}</td>
                        <td>
                            @if(file_exists(storage_path('app/public/'.$item->fotoberita)))
                            <img src="{{ asset('storage/'.$item->fotoberita) }}" width="100px" alt="photo" />
                            @else
                                <p>Gambar tidak ditemukan</p>
                            @endif
                        </td>
                        <td>{{$item->role_id}}</td>
                        <td>
                            <div class="row">
                                <a href="{{route('staff.edit', $item->id)}}" class="col btn btn-success" style="margin:10px">Edit</a>
                                <a href="{{route('staff.delete', $item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
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
