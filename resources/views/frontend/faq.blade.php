@extends('layouts.layouthtml')
@section('title','Faq|Beeonlink')
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
						<h2>Frequently Ask Question</h2>
						<ul>
							<li><a href="/home">Home</a>
							</li>
							<li>Faq</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Faq Section -->
	<section class="faq-section section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="faq-accordion first-faq-box">
						<ul class="accordion">
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> What do I do when my computer crashes?</a>
								<p class="accordion-content">If your computer crashes, first try restarting it to resolve minor issues. If the problem persists, check for overheating or hardware malfunctions. Consider seeking technical support or consulting a professional if necessary.</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> There is no display on the monitor, what do I do now?</a>
								<p class="accordion-content">First, ensure all cables are securely connected and the monitor is powered on. Try connecting the monitor to another device to rule out a monitor issue. If the problem persists, troubleshoot your computer's graphics card or seek technical assistance for further diagnosis.</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> How can I clean my keyboard?</a>
								<p class="accordion-content">To clean your keyboard, start by turning off your computer and unplugging the keyboard. Shake or gently tap the keyboard to dislodge any loose debris. Then, use compressed air to blow out dust between the keys. Finally, wipe the keys and surfaces with a damp cloth or alcohol wipes. Ensure it's completely dry before reconnecting it to your computer.</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> Why is my computer mouse acting erratically?</a>
								<p class="accordion-content">An erratic mouse could be due to various factors. Start by cleaning the mouse and mousepad to remove any debris. Check for driver updates and try using the mouse on a different surface. If the issue persists, it might indicate a hardware problem, so consider replacing the mouse or seeking technical support</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="faq-accordion">
						<ul class="accordion">
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> What do I do when my computer crashes?</a>
								<p class="accordion-content">If your computer crashes, restart it to resolve minor issues. Check for overheating or hardware malfunctions. Save your work frequently to prevent data loss. Consider updating drivers or seeking professional assistance if problems persist..</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> There is no display on the monitor, what do I do now?</a>
								<p class="accordion-content">Ensure all cables are securely connected and the monitor is powered on. Try connecting the monitor to another device to isolate the issue. Check the computer's graphics card and monitor settings. If the problem persists, consider testing with a different monitor or seeking technical support.</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> How can I clean my keyboard?</a>
								<p class="accordion-content">Start by turning off your computer and unplugging the keyboard. Remove any loose debris by gently shaking or tapping the keyboard. Use compressed air to blow out dust between the keys. Wipe the keys and surfaces with a damp cloth or alcohol wipes. Ensure it's completely dry before reconnecting it.</p>
							</li>
							<li class="accordion-item">
								<a class="accordion-title" href="javascript:void(0)"> <i class="fa fa-plus"></i> Why is my computer mouse acting erratically?</a>
								<p class="accordion-content">An erratic mouse could be due to debris on the sensor or surface. Try cleaning the mouse and using it on a different surface. Update mouse drivers and check for software conflicts. If the issue persists, consider replacing the mouse or seeking technical suppor</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Faq Section -->

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
