@extends('user.master')
@section('user')
		<!-- Breadcrumbs -->
		{{-- <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>About</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Breadcrumbs -->
		@foreach ($abouts as $about)
		<div class="container mt-3">
			<div class="row mt-3 text-center">
				<iframe width=1000% height="500" src="https://www.youtube.com/embed/{{$about->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<div class="text-justify">
				</div>
			</div>
		</div>
	
		<!-- Start Portfolio Details Area -->

		{{-- Kode baru --}}
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="gambar">
								<img src="{{ asset('storage/' . $about->foto) }}" alt="#">
							</div>
							<div class="body-text">
								<h3>{{ $about->judul }}</h3>
								<p>{{ $about->deskripsi }}</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach
		<!-- End Portfolio Details Area -->
@endsection	
