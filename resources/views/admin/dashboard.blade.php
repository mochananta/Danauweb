@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav> --}}
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-boc-content">
              <span class="info-box-text">Jumlah Artikel</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!--.info-box-content-->
          </div>
          <!--.info-box-->

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon"></span>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->
@endsection