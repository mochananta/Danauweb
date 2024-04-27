@extends('user.master')
@section('user')
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>OUR TEAM</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Team Detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
        		<!-- Start Our Team Area -->
		<section class="our-team section" id="our-team">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Team</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Team Member -->
						<div class="single-member">
							<div class="member-img">
								<img src="{{ asset('user/img/1687957368279.jpg')}}" alt="#">
								<div class="social-icons">
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-whatsapp"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<div class="member-details">
								<h2>Name</h2>
								<p>CEO & Founder</p>
							</div>
						</div>
						<!-- End Single Team Member -->
					</div>
					<!-- Add more team members here -->
				</div>
			</div>
		</section>
		<!-- End Our Team Area -->
@endsection