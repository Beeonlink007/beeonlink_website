@extends('layouts.layouthtml')
@section('title','Coming Soon|Beeonlink')
@section('content')

	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Coming Soon Area -->
	<section class="coming-soon-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="coming-soon-content">
						<h1>Our website is Coming Soon</h1>
						<p>Before we jump into our list of coming soon page examples, let’s take a quick look at why you should create one of these for your own website launch.</p>
						<form>
							<input type="email" name="email" id="email" class="email-input" placeholder="Enter your email">
							<button type="submit" class="submit-btn">Submit</button>
						</form>
						<div id="timer">
							<div id="days"></div>
							<div id="hours"></div>
							<div id="minutes"></div>
							<div id="seconds"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ul class="social-list">
			<li class="list-heading">Follow us for update:</li>
			<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
			</li>
			<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
			</li>
			<li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
			</li>
			<li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
			</li>
		</ul>
	</section>
	<!-- End Coming Soon Area -->

@endsection
