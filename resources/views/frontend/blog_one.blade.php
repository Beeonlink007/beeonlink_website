@extends('layouts.layouthtml')
@section('title','Blog Grid|Beeonlink')
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
						<h2>Blog Grid</h2>
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li>Blog Grid</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Blog Section -->
	<section class="blog-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6>Blog & Article</h6>
				<h2>Recent Blog</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-1.jpg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>17 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
										Planning for a Safe Return to the Workplace IT Solutions
                                    </a>
                                </h3>
								<p>Beeonlink offers a comprehensive IT solution for a safe return to the workplace, combining contactless
									access control and health monitoring technologies while prioritizing privacy and efficiency.
									Leveraging cloud-based platforms and IoT devices, Techivo ensures seamless integration and scalability
									 for a smooth transition back to the workplace</p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-2.jpg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>20 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
									<a href="single-blog.html">
                                       Announcing Our New Smiles for Success Charity
                                    </a>
								</h3>
								<p>We're delighted to unveil our latest endeavor: the "Smiles for Success" charity initiative! Our mission is to
									empower individuals through education, mentorship, and opportunities for personal and professional growth.
									 Join us in spreading smiles and fostering success in our communities starting Announcing Our New Smiles for Success Charity</p>
								<div class="blog-btn">
									<a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-3.jpg" alt="image">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>25 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
                                        Machine Learning Applications for Every Industry
                                    </a>
                                </h3>
								<p>Beeonlink pioneers machine learning applications tailored for diverse industries, revolutionizing operations and driving efficiency.
									From predictive maintenance in manufacturing to personalized recommendations in e-commerce, our solutions optimize
									processes and unlock new opportunities for growth.</p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-4.jpg" alt="image" style="height:240px;width:357px;">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>27 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
										5 Technology Considerations for Office Relocations
                                    </a>
                                </h3>
								<p>Plan ahead for office relocations by considering technology needs. Ensure seamless transition of IT infrastructure and network configurations. Prioritize data security and backup solutions during the relocation process.</p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-5.jpg" alt="image" style="height:240px;width:357px;">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>28 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
									<a href="single-blog.html">
                                       Everything you need to know about geo-blocking
                                    </a>
								</h3>
								<p>Geo-blocking restricts access to online content based on user location. It's commonly used to comply with licensing agreements or enforce regional regulations. VPNs can bypass geo-blocking by masking the user's IP address.</p>
								<div class="blog-btn">
									<a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-6.jpg" alt="image" style="height:240px;width:357px;">
							</a>
						</div>
						<div class="single-blog-item">
							<ul class="blog-list">
								<li>
									<a href="#"> <i class="fa fa-user-alt"></i> Author</a>
								</li>
								<li>
									<a href="#"> <i class="fas fa-calendar-week"></i>30 June 2021</a>
								</li>
							</ul>
							<div class="blog-content">
								<h3>
                                    <a href="single-blog.html">
										Internal or outsourced IT: What’s the best choice?
                                    </a>
                                </h3>
								<p>Choosing between internal or outsourced IT depends on budget, expertise, and scalability needs. Internal teams offer greater control and customization, while outsourcing provides access to specialized skills and cost savings. </p>
								<div class="blog-btn"> <a href="single-blog.html" class="blog-btn-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="pagination-area"> <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
						<a href="#" class="page-numbers">1</a>
						<span class="page-numbers current" aria-current="page">2</span>
						<a href="#" class="page-numbers">3</a>
						<a href="#" class="page-numbers">4</a>
						<a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Section -->

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
