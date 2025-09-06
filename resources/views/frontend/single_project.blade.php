@extends('layouts.layouthtml')
@section('title','Projects Details|Beeonlink')
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
						<h2>Projects Details</h2>
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li>Projects Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Project Details Area -->
	<section class="project-details-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="image-sliders owl-carousel owl-theme">
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
						</div>
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-5.jpg" alt="image">
						</div>
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="image-sliders owl-carousel owl-theme">
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
						</div>
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
						</div>
						<div class="project-details-image">
							<img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="projects-details-desc">
						<h3>Virtual Workstation</h3>
						<p>Access virtual workstations seamlessly with Beeonlink. Our advanced setups empower remote teams to collaborate effectively from anywhere. Experience the flexibility and efficiency of virtual work environments with us..</p>
						<div class="features-text">
							<h4>Fully-Scalable</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
						<div class="project-details-info">
							<div class="single-info-box">
								<h4>Author</h4>
								<span>Pamela Lawrence</span>
							</div>
							<div class="single-info-box">
								<h4>Category</h4>
								<span>Virtual, Technology</span>
							</div>
							<div class="single-info-box">
								<h4>Date</h4>
								<span>June 20, 2021</span>
							</div>
							<div class="single-info-box">
								<h4>Share</h4>
								<ul class="social">
									<li>
										<a href="#"> <i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#"> <i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#"> <i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#"> <i class="fab fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="single-info-box"> <a href="#" class="default-btn">Live Preview</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Project Details Area -->

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
