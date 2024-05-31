@extends('user.master')
@section('user')
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Berita Detail</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Berita Detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Single News -->
		<section class="news-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="row">
							<div class="col-12">
								<div class="single-main">
									<!-- News Head -->
									<div class="news-head">
										<img src="{{ asset('storage/' . $berita->fotoberita) }}" alt="#">
									</div>
									<!-- News Title -->
									<h1 class="news-title"><a href="#">{{$berita->judulberita}}</a></h1>
									<!-- Meta -->
									<div class="meta">
										<div class="meta-left">
											<span class="author"><a href="#"><img src="{{ asset('user/img/profile.png')}}" alt="#">Virgianita</a></span>
											<span class="date"><i class="fa fa-clock-o"></i>{{$berita->tanggal}}</span>
										</div>
										<div class="meta-right">
											<span class="comments"><a href="#"><i class="fa fa-comments"></i>05 Comments</a></span>
											<span class="views"><i class="fa fa-eye"></i>{{ $berita->views }} Views</span>
										</div>
									</div>
									<!-- News Text -->
									<div class="news-text">
										{!! nl2br($berita->deskripsi) !!}
									</div>									
									<div class="blog-bottom">
										<!-- Social Share -->
										<ul class="social-share">
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
										<!-- Next Prev -->
										<ul class="prev-next">
											<li class="prev">
												@if ($previousBerita)
													<a href="{{ route('user.detailberita', $previousBerita->id) }}"><i class="fa fa-angle-double-left"></i></a>
												@endif
											</li>
											<li class="next">
												@if ($nextBerita)
													<a href="{{ route('user.detailberita', $nextBerita->id) }}"><i class="fa fa-angle-double-right"></i></a>
												@endif
											</li>
										</ul>
										<!--/ End Next Prev -->
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="blog-comments">
									<h2>All Comments</h2>
									<div class="comments-body">
										@foreach($komentars as $komentar)
										<!-- Single Comment -->
										<div class="single-comments">
											<div class="main">
												<div class="head">
													<img src="{{ asset('user/img/user.png')}}" alt="#"/>
												</div>
												<div class="body">
													<h4>{{ $komentar->nama }}</h4>
													<div class="comment-meta">
														<span class="meta"><i class="fa fa-calendar"></i>{{ $komentar->created_at->format('F d, Y') }}</span>
														<span class="meta"><i class="fa fa-clock-o"></i>{{ $komentar->created_at->format('H:i') }}</span>
													</div>
													<p>{{ $komentar->teks }}</p>
													<a href="#"><i class="fa fa-reply"></i>replay</a>
												</div>
											</div>
										</div>      
										<!--/ End Single Comment -->
										@endforeach
									</div>
								</div>
							</div>

							<div class="col-12">
								<div class="comments-form">
									<h2>Leave Comments</h2>
									<!-- Form Komentar -->
									<form class="form" method="post" action="{{ route('komentar.store') }}">
										@csrf
										<input type="hidden" name="berita_id" value="{{ $berita->id }}">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-user"></i>
													<input type="text" name="nama" placeholder="Nama" required="required">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-12">
												<div class="form-group">
													<i class="fa fa-envelope"></i>
													<input type="email" name="email" placeholder="Email" required="required">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group message">
													<i class="fa fa-pencil"></i>
													<textarea name="teks" rows="7" placeholder="Tulis Komentar Anda" required></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group button">    
													<button type="submit" class="btn primary"><a href=" pt.danauemasgadaijatim@gmail.com"></a><i class="fa fa-send"></i>Submit Comment</button>
												</div>
											</div>
										</div>
									</form>
									<!--/ End Form Komentar -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							{{-- <div class="single-widget search">
								<input type="text" name="keyword" placeholder="Search Here...">
								<button type="submit" class="button"><i class="fa fa-search"></i></button>
							</div>							 --}}
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							{{-- <div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Men's Apparel</a></li>
									<li><a href="#">Women's Apparel</a></li>
									<li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li>
								</ul>
							</div> --}}
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								@foreach ($recentPosts as $post)
								<div class="single-post">
									<div class="image">
										<img src="{{ asset('storage/' . $post->photopost) }}" alt="#"> 
									</div>
									<div class="content">
										<h5><a href="{{ route('user.detailberita', ['id' => $post->id]) }}">{{ Str::limit($post->judulpost, 20) }}</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $post->tanggalpost }}</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								@endforeach
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							{{-- <div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div> --}}
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Single News -->
@endsection