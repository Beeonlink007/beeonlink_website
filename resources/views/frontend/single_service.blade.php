@extends('layouts.layouthtml')
@section('title','Services Details|Beeonlink')
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
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Services Details</h2>
						<ul>
							<li><a href="/home">Home</a></li>
							<li>Services Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Services Details Area -->
	<section class="services-details-area ptb-100">
		<div class="container">
			<div class="services-details-overview">
				<div class="row align-items-center">
					<div class="col-lg-12 col-md-12">
						<div class="image-sliders owl-carousel owl-theme">
							<div class="services-details-image">
								<img src="assets/img/services/consulting-1.jpg" alt="image" width="400px">
							</div>
							<div class="services-details-image">
								<img src="assets/img/services/consulting-1.jpg" alt="image">
							</div>
							<div class="services-details-image">
								<img src="assets/img/services/consulting-1.jpg" alt="image">
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
							<div class="services-step-title">
								<h2>Software Development Consulting We Provide</h2>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<p>Beeonlink specializes in software development consulting, offering expert guidance and solutions tailored to your specific needs. Our team is dedicated to delivering high-quality content and helping you achieve your software development goals efficiently and effectively.</p>
										<div class="features-text">
											<h4>Step 1.</h4>
											<p><strong>Gathering your insights and ideas for software consultation:</strong> Unlock unparalleled software consulting insights with Beeonlink. Our team offers innovative ideas and strategic guidance to elevate your projects to new heights. Experience tailored solutions designed to optimize your software development journey..</p>
										</div>
										<div class="features-text">
											<h4>Step 2.</h4>
											<p><strong>Exploring the environment:</strong> Delve into the environment with curiosity. Discover hidden opportunities and untapped potential. Navigate challenges with adaptability and resilience..</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<p>At Beeonlink, we excel in software development consulting, offering bespoke solutions tailored to your needs. Our team leverages cutting-edge technologies and industry best practices to drive your projects forward. Experience the difference with Beeonlink today..</p>
										<div class="features-text">
											<h4>Step 1.</h4>
											<p><strong>Gathering your insights and ideas for software consultation:</strong> Harness our expertise for unparalleled software consulting insights. We craft innovative ideas tailored to your goals, ensuring optimal project outcomes. Let's elevate your software development journey together with our strategic guidance</p>
										</div>
										<div class="features-text">
											<h4>Step 2.</h4>
											<p><strong>Exploring the environment:</strong> Embark on an exploration of the environment's intricacies. Uncover hidden opportunities amidst dynamic landscapes. Navigate with curiosity, adaptability, and a keen eye for innovation..</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="services-step-wrapper">
							<div class="services-step-image">
								<img src="assets/img/services/consulting-2.jpg" alt="image">
							</div>
						</div>

						<div class="services-step-wrapper">
							<div class="services-step-title">
								<h2>Benefits Of Software Development Consulting Services (IT Consulting)</h2>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<div class="features-text">
											<h4>Love for new ideas</h4>
											<p>Unlock the benefits of software development consulting with Beeonlink. Embrace our passion for innovation and discover fresh ideas to propel your projects forward. Let us guide you towards success with our tailored expertise and strategic insights.</p>
										</div>
										<div class="features-text">
											<h4>Years of experience</h4>
											<p>Benefit from our years of industry experience at Beeonlink. Our seasoned team brings a wealth of knowledge and expertise to every project. Trust us to deliver solutions honed by years of successful implementation.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="services-step-content">
										<div class="features-text">
											<h4>Tangible advice</h4>
											<p>Receive actionable guidance with Beeonlink's tangible advice. Our insights are grounded in real-world experience, ensuring practical solutions for your software development challenges. Let us help you turn ideas into results..</p>
										</div>
										<div class="features-text">
											<h4>Covering every step</h4>
											<p>Navigate every step of your software development journey with Beeonlink. From planning to deployment, we provide comprehensive support tailored to your needs. Let us guide you to success at every stage..</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Details Area -->

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
