@extends('user.master')
@section('user')
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Kegiatan Detail</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Kegiatan Detail</li>
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
									<img src="{{ asset('storage/' . $kegiatan->potokegiatan1) }}" alt="#">
                                    <img src="{{ asset('storage/' . $kegiatan->potokegiatan2) }}" alt="#">
								</div>
							</div>
							<div class="date">
								<ul>
									<li><span>Topik :</span> {{$kegiatan->topik}}</li>
									<li><span>Tanggal :</span> {{$kegiatan->tanggalkegiatan}}</li>
								</ul>
							</div>
							<div class="body-text">
								<h3>{{$kegiatan->judulkegiatan}}</h3>
								{!! nl2br($kegiatan->deskegiatan) !!}
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