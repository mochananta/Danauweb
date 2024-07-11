@extends('user.master')
@section('user')		
        <!-- Slider Area Banner-->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider 1 -->
				<div class="single-slider" style="background-image:url('{{ asset('user/img/Slider website user-01.jpg')}}')"> 
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text" style="padding-top: 20px;">
									<h1>PT. Danau Emas</span> Gadai Jatim</span></h1>
									<p >Danau Emas, Sumber Solusi Finansialmu! </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider 1 -->

				<!-- Start Single Slider 2 -->
				<div class="single-slider" style="background-image:url('{{ asset('user/img/Slider website user-02.jpg')}}')"> 
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text" style="padding-top: 20px;">
									<h1>Kami <span>Siap</span> Memberikan Pelayanan Terbaik <span>Untuk Anda!</span></h1>
									<p>Kami hadir dengan pelayanan profesional yang siap memenuhi kebutuhan finansial Anda.
										Proses yang cepat, aman, dan mudah membuat Anda dapat dengan nyaman mengatasi berbagai kebutuhan finansial. </p>
								</div>
							</div>
						</div>
					</div>
				</div> 
				<!-- End Single Slider 2 -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Card Schedule-->
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
		<!--/End Card Schedule-->

		<!-- Start About Singkat DEGJ -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
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
		<!--/ End About singkat DEGJ -->

		<!-- Start Artikel Area -->
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
<!-- End Artikel Area-->


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
		<!--/ End Promo -->				

		<!-- Start Video Testimoni -->
		{{-- <section class="why-choose section">
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
		</section> --}}
		<!-- End Youtube -->


		<!-- Start unit -->
		<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Kunjungi Kami di Unit Terdekatmu</h2>
							<p>Yuk simak lokasi unit-unit Danau Emas Gadai Jatim di Jawa Timur!</p>
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
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{ asset('user/img/unit1.jpeg') }}" class="card-img-left" alt="Unit Tuban Gajahmada">
									<div class="card-body">
										<h3 class="card-title">Tuban Gajahmada</h3>
										<p class="card-text">Jl. Gajahmada No.25, Kebonsari, Tuban, Jawa Timur <a href="https://www.example.com" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{  asset('user/img/unit3.jpeg') }}" class="card-img-left" alt="Unit Tambahrejo">
									<div class="card-body">
										<h3 class="card-title">Tambahrejo</h3>
										<p class="card-text">Jl. Tambah Rejo Blok B No.17, Tambakrejo, Simokerto, Surabaya <a href="https://www.example.com" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>							
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{asset('user/img/unit8.jpeg')}}" class="card-img-left" alt="Unit Ronggolawe">
									<div class="card-body">
										<h3 class="card-title">Ronggolawe</h3>
										<p class="card-text">Jl. Ronggolawe No.34, Sidomulyo, Kec. Tuban, Kabupaten Tuban, Jawa Timur 62312 <a href="https://maps.app.goo.gl/QyM4RSzo5YPtcjFb9" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>								
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{asset('user/img/unit5.jpg')}}" class="card-img-left" alt="Unit Banyuwangi">
									<div class="card-body">
										<h3 class="card-title">Banyuwangi Kota</h3>
										<p class="card-text">Jl. Kolonel Sugiono, Kertosari, Tukangkayu, Banyuwangi, Jawa Timur 68462  <a href="https://maps.app.goo.gl/DUqfpWMNxdJGQJ637" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>							
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{asset('user/img/unit7.jpg')}}" class="card-img-left" alt="Unit Rogojampi">
									<div class="card-body">
										<h3 class="card-title">Rogojampi</h3>
										<p class="card-text">Jl. Ps. Ruko No.11, Pancoran Kulon, Rogojampi, Banyuwangi, Jawa Timur 68462 <a href="https://maps.app.goo.gl/S1ZBWbuGCrqMRYtx5" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>							
							</div>
							<div class="unit">
								<div class="card-unit">
									<img src="{{asset('user/img/unit6.jpg')}}" class="card-img-left" alt="Unit Muncar">
									<div class="card-body">
										<h3 class="card-title">Muncar</h3>
										<p class="card-text">Jl. Raya Muncar, Dusun Muncar, Tembokrejo, Muncar, Banyuwangi, Jawa Timur 68472 <a href="https://maps.app.goo.gl/px6Q7KWFjP2xFKW5A" class="btn">Lihat Google Maps<i class="fas fa-map-marker-alt"></i></a></p>
									</div>
								</div>							
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
		<section class="portfolio section">
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
							@foreach ($kegiatans as $kegiatan)
							<div class="single-pf">
								<img src="{{ asset('storage/' . $kegiatan->potokegiatan1) }}" alt="#">
								{{-- <div class="btn-container"> --}}
									<a href="{{ route('user.detailkegiatan', $kegiatan->id) }}" class="btn">Lihat Detail</a>
								{{-- </div> --}}
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End dokumentasi kegiatan -->




		<!-- Start layanan -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Layanan Tambahan</h2>
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
							<h4><a href="#">Jemput Gadai</a></h4>
							<p>Danau Emas Gadai Jatim kini hadir dengan Layanan Jemput Gadai! Tak perlu repot 
								datang ke kantor, petugas kami siap menjemput barang gadai Anda di lokasi. 
								Proses cepat, aman, dan transparan. Solusi praktis untuk kebutuhan dana cepat 
								Anda. Hubungi DEGJ sekarang!
							</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-washing-machine"></i>
							<h4><a href="#">Cuci Emas Gratis</a></h4>
							<p>Kembalikan kilau emas Anda dengan Layanan Cuci Emas Gratis di Danau Emas Gadai Jatim! 
								Nikmati perhiasan yang bersih dan berkilau tanpa biaya tambahan. Kunjungi DEGJ terdekat 
								dan percayakan perawatan emas Anda pada ahlinya. Segera manfaatkan layanan ini untuk 
								perhiasan yang selalu tampak baru!
							</p>	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="icofont-gift"></i>
							<h4><a href="#">Hadiah Spesial</a></h4>
							<p>Nikmati hadiah menarik di Danau Emas Gadai Jatim! Gadaikan emas Anda 
								dan menangkan barang elektronik, peralatan rumah tangga, dan uang tunai. 
								Setiap transaksi berpeluang menang! Kunjungi sekarang dan dapatkan hadiahnya!
							</p>	
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Layanan -->
	<!-- End Our Team Area -->
	<!-- Include jQuery Our Team Area-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
		
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

@endsection