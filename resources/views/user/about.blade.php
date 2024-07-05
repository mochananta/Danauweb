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
				<iframe width=800% height="500" src="https://www.youtube.com/embed/{{$about->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<div class="text-justify">
				</div>
			</div>
		</div>
		@endforeach
		<!-- Start Portfolio Details Area -->

		{{-- Kode baru --}}
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							@foreach ($abouts as $about)
							<div c>
								<div>
									<img src="{{ asset('storage/' . $about->foto) }}" alt="#" > 
									
								</div>
							</div>
							{{--<div class="image-slider">
								<div class="pf-details-slider">
									<img src="{{ asset('storage/' . $about->foto) }}" alt="#"> 
									<img src="{{ asset('storage/' . $about->foto) }}" alt="#"> 
								</div>
							</div>--}}
							{{-- <div class="date">
								<ul>
									<li><span>Category :</span> Heart Surgery</li>
									<li><span>Date :</span> April 20, 2019</li>
									<li><span>Client :</span> Suke Agency</li>
									<li><span>Ags :</span> Typo</li>
								</ul>
							</div> --}}
							<div class="body-text">
								<h3>{{ $about->judul }}</h3>
								<p>{{ $about->deskripsi }}</p>
								<div class="share">
									<h4>Share Now -</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

