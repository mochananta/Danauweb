@extends('user.master')
@section('user')
		<!-- Start Our Team Area -->
	<section class="our-team section" id="our-team">
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
@endsection

