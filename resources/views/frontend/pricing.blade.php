@extends('layouts.layouthtml')
@section('title','Pricing|Beeonlink')
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
						<h2>Pricing Plans</h2>
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li>Pricing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Pricing Section -->
	<section class="price-area pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-title">
						<h6>Choose a plans</h6>
						<h2>Pricing Plans</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 price-item">
					<div class="single-pricing-content">
						<div class="price-tag">
							<h3>Startup</h3>
						</div>
						<div class="price-heading">
							<div class="price-usd">
								<h2>$29.00 <span class="price-small-text">- Per month</span></h2>
							</div>
						</div>
						<div class="price-body">
							<ul>
								<li>Personal Use</li>
								<li>Unlimited Projects</li>
								<li>Project Management</li>
								<li class="offer-list-none"><del>27/7 Support</del>
								</li>
								<li class="offer-list-none"><del>Basic support on Github</del>
								</li>
								<li class="offer-list-none"><del>Help center access</del>
								</li>
							</ul>
						</div>
						<div class="price-btn"> <a href="#" class="price-btn-one">Choose this plan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 price-item">
					<div class="single-pricing-content">
						<div class="price-tag">
							<h3>Standard</h3>
						</div>
						<div class="price-heading">
							<div class="price-usd">
								<h2>$45.00<span class="price-small-text">- Per month</span></h2>
							</div>
						</div>
						<div class="price-body">
							<ul>
								<li>Personal Use</li>
								<li>Unlimited Projects</li>
								<li>Project Management</li>
								<li>27/7 Support</li>
								<li class="offer-list-none"><del>Basic support on Github</del>
								</li>
								<li class="offer-list-none"><del>Help center access</del>
								</li>
							</ul>
						</div>
						<div class="price-btn"> <a href="#" class="price-btn-one">Choose this plan</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 price-item">
					<div class="single-pricing-content">
						<div class="price-tag">
							<h3>Premium</h3>
						</div>
						<div class="price-heading">
							<div class="price-usd">
								<h2>$75.00<span class="price-small-text">- Per month</span></h2>
							</div>
						</div>
						<div class="price-body">
							<ul>
								<li>Personal Use</li>
								<li>Unlimited Projects</li>
								<li>Project Management</li>
								<li>27/7 Support</li>
								<li>Basic support on Github</li>
								<li>Help center access</li>
							</ul>
						</div>
						<div class="price-btn"> <a href="#" class="price-btn-one">Choose this plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->

	<!-- Start Footer & Subscribe Section -->
    @include('home.footer_section')
	<!-- End Footer & Subscribe Section -->

	<!-- Start Copy Right Section -->
    @include('home.copyright_section')
	<!-- End Copy Right Section -->

	<!-- Start Go Top Section -->
	<div class="go-top"> <i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->
@endsection
