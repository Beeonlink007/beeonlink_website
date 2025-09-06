@extends('layouts.layouthtml')
@section('title','Services|Beeonlink')
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
	<div class="page-title-area item-bg2">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Services</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li>Services</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Services Section -->
    @include('home.service_section')
	<!-- End Services Section -->

	<!-- Start Hire Section -->
    @include('home.hire_section')
	<!-- End Hire Section -->

	<!-- Start Overview Section -->
    @include('home.overview_section')
	<!-- End Overview Section -->

	<!-- Start Overview Section -->
	<section class="overview-section pt-50 pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-content">
						<h6>WHY TRUST US?</h6>
						<h2>Achieve digital transformation for your retail business services</h2>
						<p>Beeonlink specializes in facilitating digital transformation for retail businesses, enhancing services through innovative tech solutions.
							 Experience seamless integration, enhanced customer engagement, and optimized operations with  Beeonlink's expertise.
							Transform your retail business today with  Beeonlink's cutting-edge digital solutions..</p>
						<ul class="features-list">
							<li> <span>Protect your Business</span></li>
							<li> <span>Network Security</span></li>
							<li> <span>Data Security</span></li>
							<li> <span>Small Business Owners</span></li>
							<li> <span>Running your Business</span></li>
							<li> <span>Network Monitoring</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-image-2">
						<img src="assets/img/services/digital transformation.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->

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
