@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1> Data Pesan Masuk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item active">Pesan Masuk</a></li>
        </nav>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="co">
                    <a href="{{route('contact.store')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        {{-- <span class="text">Tambah Data</span> --}}
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $item)
                        <tr class="text-center">
                            <td>{{$item->nama}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->descontact}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection