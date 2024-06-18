@extends('user.master')
@section('user')		
        <!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{ asset('user/img/slider4.png')}}')"> 
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>PT. Danau Emas</span> Gadai Jatim -<span>Cabang Banyuwangi</span></h1>
									<p>Danau Emas, Sumber Solusi Finansialmu! </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->

				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('{{ asset('user/img/slider5.png')}}')"> 
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Kami <span>Siap</span> Memberikan Pelayanan Terbaik <span>Untuk Anda!</span></h1>
									<p>Kami hadir dengan pelayanan profesional yang siap memenuhi kebutuhan finansial Anda.
										Proses yang cepat, aman, dan mudah membuat Anda dapat dengan nyaman mengatasi berbagai kebutuhan finansial. </p>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Card -->
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-building-o"></i>
									</div>
									<div class="single-content">
										<h4>PT. DANAU EMAS GADAI JATIM</h4>
										<p>Danau Emas merupakan pegadaian dibawah naungan INKOPPOL dan OJK yang hadir 
											untuk membantu masyarakat dalam menghadapi masalah keuangan dengan cara mudah, aman dan cepat.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12 center-content">
							<!-- single-schedule -->
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>OPERASIONAL JAM</span>
										<h4>Jam Buka</h4>
										<ul class="time-sidual">
											<li class="day">Senin-Jum’at <span>8.00-17.00</span></li>
											<li class="day">Sabtu <span>8.00-13.00</span></li>
											<li class="day"><strong>Minggu & Hari Besar, Libur</strong></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- single-schedule -->
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-building-o"></i>
									</div>
									<div class="single-content">
										<h4>INKOPPOL</h4>
										<p>INKOPPOL /Induk Koperasi Kepolisian Negara Republik Indonesia merupakan Koperasi Sekunder Tingkat 
											Nasional yang bergerak dibidang perdagangan dan pengembangan jasa umum.
										</p>
										<a href="https://inkoppol.co.id">DETAIL<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/End Card -->

		<!-- Danau Emas facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">3</span>
								<p>Unit Cabang Banyuwangi</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Nasabah</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-cart"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Unit Gadai</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">0</span>
								<p>Pengalaman</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Danau emas facts -->

		<!-- Pengertian danau Emas -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							{{-- <h5>Layanan Tersedia</h5> --}}
							<h2>Butuh Dana Cepat Dengan Proses yang Aman dan Mudah ?</h2>
							<p>DEGJ solusinya, yuk kenalan dengan kami disini!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-pertama">
							<h3>Danau Emas</h3>
							<p>Danau Emas merupakan pegadaian yang berada dibawah naungan INKOPPOL dan OJK
								menjadikan pegadaian yang terpercaya dalam mengatasi masalah finansial. 
								Kami menyuguhkan proses gadai yang cepat, aman dan mudah sehingga Anda tidak perlu 
								khawatir dalam melakukan transaksi gadai dan masalah finansial Anda segera teratasi. 
								Berikut barang-barang yang kami terima dalam proses transaksi gadai : 
							</p>
							<div class="row">
								<div class="col-lg-6">
									<div class="flex-container">
										<div class="small-box">
											<img src="{{ asset('user/img/Group 139.png')}}" alt="Motorcycle Icon">
										</div>
										<div class="text-container">
											<p>GADAI PERHIASAN</p>
										</div>
									</div>
								</div>	
								<div class="col-lg-6">
									<div class="flex-container">
										<div class="small-box">
											<img src="{{ asset('user/img/Group 140.png')}}" alt="Motorcycle Icon">
										</div>
										<div class="text-container">
											<p>GADAI MOBIL & MOTOR</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="flex-container">
										<div class="small-box">
											<img src="{{ asset('user/img/Group 141.png')}}" alt="Motorcycle Icon">
										</div>
										<div class="text-container">
											<p>GADAI BARANG ELEKTRONIK</p>
										</div>
									</div>
								</div>											
							</div>
						</div>
						<!-- End Choose Left -->
					</div>					
					<div class="col-lg-6 col-12">
						<div class="choose-kedua">
							{{-- ganti foto BA --}}
							<img src="{{ asset('user/img/imm.png')}}" class="choose-right-img" alt="Deskripsi Gambar">
						</div>					
					</div>
				</div>
			</section>
		<!--/ End pengertian Danau Emas -->

		<!-- Start Artikel -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Artikel</h2>
							<p>Yuk ikuti informasi terbaru kami, melalui artikel di bawah ini!</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach ($beritas as $berita)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<a href="{{ route('user.detailberita', $berita->id) }}">
								<img src="{{ asset('storage/' . $berita->fotoberita) }}" alt="#">
								</a>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ $berita->tanggal }}</div>
									<h2><a href="{{ route('user.detailberita', $berita->id) }}">{{ $berita->judulberita }}</a></h2>
									<p class="text">{{ Str::limit($berita->deskripsi, 116) }}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Artikel -->

		<!-- Promo -->
		<section class="custom-pricing-table section">
			<div class="container">
				<div class="row">
					@foreach ($promos as $promo)
					<div class="col-md-6">
						<div class="promo-text">
							<h2>{{ $promo->temapromo }}</h2>
							<p>{{ $promo->despromo }}</p>
							<span class="link-text" onclick="window.location.href='https://www.instagram.com/danauemasid/'">Lihat Semua Promo</span>						
						</div>
					</div>
					<div class="col-md-6">
						<div class="image-container">
							<img src="{{ asset('storage/' . $promo->fotopromo) }}" alt="Right Image">
						</div>
					</div>	
					@endforeach
				</div>
			</div>  
		</section>		
		<!--/ End Pricing Table -->				
		<!--/ End Promo -->				
		
		<!-- Start testimoni 1 -->
		{{-- <section class="portfolio section" >
			<div class="container mt-3">
				<div class="row mt-3 text-center">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Aktivitas Kami Yang Dapat Anda Ketahui Secara Lengkap</h2>
							{{-- <img src="{{ asset('user/img/coins.png')}}" alt="#">  --}}
							{{-- <p>Simak video testimoni pelanggan Danau Emas Gadai Jatim yang kami suguhkan untuk Anda.</p>
							<div class="container mt-3">
								<div class="row mt-3 text-center">
									<iframe width=1000% height="500" src="https://www.youtube.com/embed/rICaYGVPMBY?si=AaRgwGB0c7qUe-s7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
									<div class="text-justify">
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							@foreach ($kegiatans as $kegiatan)
							<div class="single-pf">
								<img src="{{ asset('storage/' . $kegiatan->potokegiatan1) }}" alt="#"> 
								<a href="{{ route('user.detailkegiatan', $kegiatan->id) }}" class="btn">View Details</a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			
		</section> --}}
		<!--/ End testimoni 1 -->

		<!-- Start frame youtube -->
		<section class="why-choose section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Testimoni Pelanggan</h2>
							<p>Yuk simak apa pendapat mereka!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-pertama">
							<h3>Danau Emas Gadai Jatim</h3>
							<p>Selamat datang di YouTube resmi Danau Emas Gadai Jatim! Dalam video ini, kami menampilkan berbagai testimoni dari pelanggan setia kami yang telah merasakan manfaat dan pelayanan terbaik dari Danau Emas Gadai Jatim. Dengarkan langsung pengalaman pelanggan kami yang telah mendapatkan solusi keuangan dengan aman dan nyaman melalui layanan gadai kami. Mulai dari proses gadai yang cepat hingga penilaian yang adil, semua dikupas tuntas dalam video ini!</p>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<div class="choose-kedua">
							<!-- Ganti foto dengan link YouTube -->
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/72H3CF2ZxuI" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Youtube -->

		{{-- <!-- Start Unit -->
		<section class="unit-details section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kunjungi Kami Di Unit Terdekatmu.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel unit-slider owl-theme">
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit2.jpeg')}}" class="card-img-left" alt="Unit Tuban Gajahmada">
									<div class="card-body">
										<h3 class="card-title">Tuban Gajahmada</h3>
										<p class="card-text">Jl. Gajahmada No.25, Kebonsari, Tuban, Jawa Timur <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit3.jpeg')}}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Tambahrejo</h3>
										<p class="card-text">Jl. Tambah Rejo Blok B No.17, Tambakrejo, Simokerto, Surabaya <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit4.jpg')}}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Banyuwangi Kota</h3>
										<p class="card-text">Jl. Kolonel Sugiono, Kertosari, Tukangkayu, Banyuwangi, Jawa Timur 68462 <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit5.jpg')}}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Muncar</h3>
										<p class="card-text">Jl. Raya Muncar, Dusun Muncar, Tembokrejo, Muncar, Banyuwangi, Jawa Timur 68472 <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit6.jpg')}}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Rogojampi</h3>
										<p class="card-text">Jl. Ps. Ruko No.11, Pancoran Kulon, Rogojampi, Banyuwangi, Jawa Timur 68462 <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card">
									<img src="{{ asset('user/img/unit7.jpg')}}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Rogojampi</h3>
										<p class="card-text">Jl. Ps. Ruko No.11, Pancoran Kulon, Rogojampi, Banyuwangi, Jawa Timur 68462 <a href="https://www.example.com">Lihat Google Maps <i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Unit --> --}}

		<!-- Start unit -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kunjungi Kami</h2>
							<h2>di Unit Terdekatmu</h2>
							{{-- <img src="user/img/section-img.png" alt="#"> --}}
							<p>Yuk simak lokasi unit-unit DEGJ di Jawa Timur!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider owl-theme">
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg')}}" class="card-img-left" alt="Unit Penjaringan Sari">
									<div class="card-body">
										<h3 class="card-title">Penjaringan Sari</h3>
										<p class="card-text">Jl. Penjaringan Sari IID No.31, Rungkut, Surabaya, Jawa Timur <a href="https://maps.app.goo.gl/E4XjVtZ9LxAB62zD9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function(){
					$(".owl-carousel").owlCarousel({
						items: 1, // Atur jumlah item yang ditampilkan dalam satu waktu
						loop: true,
						nav: false, // Matikan navigasi bawaan owl-carousel
					});
				
					$(".carousel-control-prev").click(function() {
						$(".owl-carousel").trigger('prev.owl.carousel');
					});
				
					$(".carousel-control-next").click(function() {
						$(".owl-carousel").trigger('next.owl.carousel');
					});
				});
				</script>
		</section>
		<!-- End unit -->

		<!-- Start dokumentasi kegiatan -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Dokumentasi Kegiatan</h2>
							<h2>Danau Emas Gadai Jatim</h2>
							{{-- <img src="user/img/section-img.png" alt="#"> --}}
							<p>Kami menyajikan rangkaian momen berharga dari berbagai kegiatan dan program yang telah kami lakukan. Setiap foto adalah bukti nyata komitmen kami dalam memberikan layanan terbaik dan kontribusi positif bagi masyarakat Jawa Timur.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="user/img/img01.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img02.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img03.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img04.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img05.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img06.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img07.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img08.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img09.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img10.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img11.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
							<div class="single-pf">
								<img src="user/img/img12.jpg" alt="#">
								{{-- <a href="portfolio-details.html" class="btn">View Details</a> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End dokumentasi kegiatan -->

		<!-- Start unit -->
		{{-- <section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Unit Danau Emas Gadai Jatim</h2>
							{{-- <img src="img/section-img.png" alt="#"> --}}
							{{-- <p>Temukan unit terdekat kami untuk mendapatkan layanan gadai yang cepat, aman, dan terpercaya. Untuk informasi lebih lanjut, hubungi atau kunjungi unit layanan kami yang tertera pada setiap gambar di bawah ini!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
							<div class="single-pf">
								<img src="user/img/unitbanyuwangi.jpg" alt="#">
								<a href="unit.blade.php" class="btn">Unit Banyuwangi</a>
							</div>
							<div class="single-pf">
								<img src="user/img/unitrogojampi.jpg" alt="#">
								<a href="unit.blade.php" class="btn">Unit Rogojampi</a>
							</div>
							<div class="single-pf">
								<img src="user/img/unitmuncar.jpg" alt="#">
								<a href="unit.blade.php" class="btn">Unit Muncar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End unit -->

		<!-- Start Blog Area -->
		{{-- <section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div> --}}
				{{-- <div class="row">
					@foreach ($beritas as $berita)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<a href="{{ route('user.detailberita', $berita->id) }}">
								<img src="{{ asset('storage/' . $berita->fotoberita) }}" alt="#">
								</a>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ $berita->tanggal }}</div>
									<h2><a href="{{ route('user.detailberita', $berita->id) }}">{{ $berita->judulberita }}</a></h2>
									<p class="text">{{ Str::limit($berita->deskripsi, 116) }}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Blog Area --> --}}

		<!-- Start layanan -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Halaman layanan</h2>
							{{-- <img src="{{ asset('user/img/section-img.png')}}" alt="#"> --}}
							<p>Terdapat 3 layanan yang disediakan oleh Danau Emas Gadai Jatim.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-motor-biker"></i>
							<h4><a href="service-details.html">Jemput Gadai</a></h4>
							<p>Danau Emas Gadai Jatim kini hadir dengan Layanan Jemput Gadai! Tak perlu repot datang ke kantor, petugas kami siap menjemput barang gadai Anda di lokasi. Proses cepat, aman, dan transparan. Solusi praktis untuk kebutuhan dana cepat Anda. Hubungi DEGJ sekarang!</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-washing-machine"></i>
							<h4><a href="service-details.html">Cuci Emas Gratis</a></h4>
							<p>Kembalikan kilau emas Anda dengan Layanan Cuci Emas Gratis di Danau Emas Gadai Jatim! Nikmati perhiasan yang bersih dan berkilau tanpa biaya tambahan. Kunjungi DEGJ terdekat dan percayakan perawatan emas Anda pada ahlinya. Segera manfaatkan layanan ini untuk perhiasan yang selalu tampak baru!</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-gift"></i>
							<h4><a href="service-details.html">Hadiah Spesial</a></h4>
							<p>Nikmati hadiah menarik di Danau Emas Gadai Jatim! Gadaikan emas Anda dan menangkan barang elektronik, peralatan rumah tangga, dan uang tunai. Setiap transaksi berpeluang menang! Kunjungi sekarang dan dapatkan hadiahnya!</p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->
			
		
	
		<!-- Start Our Team Area -->
		{{-- <section class="our-team section" id="our-team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Tim Kami</h2>
							<p>Di Danau Emas Gadai Jatim, kami bangga memiliki tim yang berdedikasi dan profesional untuk melayani Anda dengan sepenuh hati.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Team Member -->
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/person.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h4>Name</h4>
								<p>CEO & Founder</p>
							</div>
						</div>
						<!-- End Single Team Member -->
					</div>
					<!-- Add more team members here -->
				</div>
			</div>
		</section> --}}

		<!-- Start Our Team Area -->
	<section class="our-team section" id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Tim Kami</h2>
						<p>Di Danau Emas Gadai Jatim, kami bangga memiliki tim yang berdedikasi dan profesional untuk melayani Anda dengan sepenuh hati!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- Slider Container -->
					<div class="slider-container">
						<div class="slider tim-kami">
							<!-- Single Team Member -->
							<div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Moh. Ananta</h4>
									<p>CEO & Founder</p>
								</div>
							</div>
							<!-- Repeat for other team members -->
							<div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Name 2</h4>
									<p>CTO</p>
								</div>
							</div>
							<div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Name 3</h4>
									<p>CTO</p>
								</div>
							</div>
							<!-- Add more team members as needed -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Our Team Area -->

	<!-- Include jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Custom Slider Script -->
	<script>
	$(document).ready(function(){
		const slider = $('.tim-kami');
		const members = $('.single-member');
		const memberCount = members.length;
		let currentIndex = 0;

		function showNextMember() {
			currentIndex = (currentIndex + 1) % memberCount;
			const translateXValue = -currentIndex * 100;
			slider.css('transform', `translateX(${translateXValue}%)`);
		}

		setInterval(showNextMember, 3000); // Change member every 3 seconds
	});
</script>

		<!-- End Our Team Area -->

		<!-- Start clients -->
		{{-- <div class="col-lg-12">
			<div class="section-title">
				<h2>Kegiatan Transaksi</h2>
				<p>Selamat datang di bagian Kegiatan Transaksi Danau Emas Gadai Jatim. Kami berkomitmen untuk memberikan layanan gadai yang aman, cepat, dan terpercaya. </p>
			</div>
		</div> --}}
		{{-- <div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-6 col-12">
						<div class="owl-carousel clients-slider">
							<div class="single-clients">
								<img src="{{ asset('user/img/client1.png')}}" alt="#"> 
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client2.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client3.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client4.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client5.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client1.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client2.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client3.png')}}" alt="#">
							</div>
							<div class="single-clients">
								<img src="{{ asset('user/img/client4.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!--/Ens clients -->
		
		<!-- Start Kotak Saran -->
		<section class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kami Siap Untuk Membantu Anda</h2>
							<p>Yuk beritahu kami keluhan anda melalui pesan di bawah ini!</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" method="POST" action="{{ route('contact.store') }}">
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="nama" type="text" placeholder="Nama">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="No.Telp">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="descontact" placeholder="Ketik Pesanmu Disini....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Kirim</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="{{asset('user/img/imm.png')}}" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Kotak Saran -->
		
		<!-- Start Newsletter Area -->
		 {{-- <section class="newsletter section">
			<div class="container">
				<div class="row ">
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-text ">
							<h6>Subscribe Sekarang</h6>
							<p class="">Dan Dapatkan Informasi Terbaru dari<br> Danau Emas Gadai Jatim.</p>
						</div>
						<!-- End Newsletter Form -->
					</div>
					<div class="col-lg-6  col-12">
						<!-- Start Newsletter Form -->
						<div class="subscribe-form ">
							@if(session('success'))
							<div>{{ session('success') }}</div>
							@endif
							<form action="{{ route('subscribe') }}" method="POST">
								@csrf
								<input type="email" id="email" name="email" placeholder="Email" class="common-input" required>
								<button type="submit" class="btn">Subscribe</button>
							</form>
						</div> --}}
						<!-- End Newsletter Form -->
					</div>
				</div>
			</div>
		</section>
		{{-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f1e7a459-985a-4cf7-8bfb-bcbf1bde08c6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> --}}

@endsection
{{-- KODE TIDAK DIPAKAI SEMENTARA --}}
<!-- Start Why choose -->
		{{-- <section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							<img src="{{ asset('user/img/section-img.png')}}" alt="#"> 
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Who We Are</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
										<li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
										<li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Why choose -->
		
		<!-- Start Call to action -->
		{{-- <section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec gravida.</p>
							<div class="button">
								<a href="#" class="btn">Contact Now</a>
								<a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!--/ End Call to action -->

		<!-- Pricing Table -->
		{{-- <section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src=" {{ asset('user/img/section-img.png')}}" alt="#">  
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-ui-cut"></i>
								</div>
								<h4 class="title">Plastic Suggery</h4>
								<div class="price">
									<p class="amount">$199<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont icofont-tooth"></i>
								</div>
								<h4 class="title">Teeth Whitening</h4>
								<div class="price">
									<p class="amount">$299<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="icofont-heart-beat"></i>
								</div>
								<h4 class="title">Heart Suggery</h4>
								<div class="price">
									<p class="amount">$399<span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li><i class="icofont icofont-ui-check"></i>Nullam interdum enim</li>
								<li><i class="icofont icofont-ui-check"></i>Donec ultricies metus</li>
								<li><i class="icofont icofont-ui-check"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn" href="#">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				</div>	
			</div>	
		</section>	 --}}
		<!--/ End Pricing Table -->