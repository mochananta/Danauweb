@extends('user.master')

@section('user')
<div class="hero page-inner">
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>About Detail</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">About Detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
	
		<!-- Start Portfolio Details Area -->
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							<div class="image-slider">
								<div class="pf-details-slider">
									<img src="{{ asset('user/img/danauemas.png')}}" alt="#">  
									<img src="{{ asset('user/img/Gajian-Emas.jpeg')}}" alt="#">
								</div>
							</div>
							<div class="date">
								{{-- <ul>
									<li><span>Category :</span> Heart Surgery</li>
									<li><span>Date :</span> April 20, 2019</li>
									<li><span>Client :</span> Suke Agency</li>
									<li><span>Ags :</span> Typo</li>
								</ul> --}}
							</div>
							<div class="body-text">
								<h3>Sejarah berdirinya PT. Danau Emas Gadai Jatim.</h3>
								@php
								$sejarah = $sejarahs->first(); // Mengambil elemen pertama
								@endphp
								@if($sejarah)
									<p>{{ $sejarah->deskripsi }}</p>
								@else
									<p>Data tidak ditemukan.</p>
								@endif
								<div class="share">
									<h4>Share Now -</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio Details Area -->
@endsection

