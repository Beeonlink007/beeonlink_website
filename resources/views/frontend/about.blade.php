@extends('layouts.layouthtml')
@section('title','About|Beeonlink')
@section('content')

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Navbar Area -->
    @include('home.navbar')
	<!-- End Navbar Area -->

	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start About Section -->
    @include('home.about_section')
	<!-- End About Section -->

	<!-- Start Counter Section -->
    @include('home.counter_section')
	<!-- End Counter Section -->

	<!-- Start Team Section -->
	<!-- <section class="team-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6>Team Member</h6>
						<h2>Expert Team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="https://img.freepik.com/free-photo/customer-service-handsome-curly-man-office-suit-with-computer-headset-smiling_140725-164570.jpg?w=740" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Ava Farrington</h3>
							<span>Founder, ceo</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="https://img.freepik.com/premium-photo/front-view-male-engineer-sitting-his-working-place-with-laptop-suit-work-plan-contractor-occupation-business-job-corporate-project_461922-16161.jpg?w=740" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Kevin Haley</h3>
							<span>Co-founder, cto</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="https://img.freepik.com/free-photo/girl-denim-jacket-holding-globe-pointing-it_144627-55078.jpg?t=st=1710312001~exp=1710315601~hmac=a8b9bd4808fa035e5a4b1bc32a2df6b65d606c2941a8b9e2f1211660308f4a70&w=740" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Alishia Fulton</h3>
							<span>Chief creative officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="https://img.freepik.com/premium-photo/businessman-holding-mobile-phone-while-standing-against-trees_1048944-25839717.jpg?w=740" alt="team" />
							<div class="team-social-icon">
								<a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
								<a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Lucas Martinez</h3>
							<span>Project Manager</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Team Section -->

	<!-- Start Testimonial Section -->
    @include('home.testimonial_section')
	<!-- End Testimonial Section -->

	<!-- Start Hire Section -->
    @include('home.hire_section')
	<!-- End Hire Section -->

	<!-- Start Partner section -->
    <!-- <section class="partner-section pt-100 pb-70">
		<div class="container">
			<div class="partner-title">
				<h6>Trusted By Over 40,000</h6>
				<h2>Our Customers</h2>
			</div>
			<div class="partner-list">
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,
						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" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,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" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="https://cdn.vox-cdn.com/thumbor/2ECtQus43_-tjqtlxy0WE8peSEQ=/0x0:2012x1341/1400x1050/filters:focal(1006x670:1007x671)/cdn.vox-cdn.com/uploads/
						chorus_asset/file/15483559/google2.0.0.1441125613.jpg" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="https://optimise2.assets-servd.host/dig-upsiide/production/images/replacement-logos-01.webp?w=735&h=400&q=100&fm=jpg&fit=crop&dm=1651608186&s=41c54962caac0fcc07f581341b127f05" alt="image">
					</a>
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvAbzP03GyvG6ROycmPMbdtkOWKFnYo-hFfA&usqp=CAU" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,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" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,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" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,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" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="data:image/png;base64,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" alt="image">
					</a>
				</div>
			</div>
		</div
	</section> -->
	<!-- End Partner section -->

	<!-- Start Footer & Subscribe Section -->
    @include('home.footer_section')
	<!-- End Footer & Subscribe Section -->

	<!-- Start Copy Right Section -->
    @include('home.copyright_section')
	<!-- End Copy Right Section -->

	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->

@endsection

