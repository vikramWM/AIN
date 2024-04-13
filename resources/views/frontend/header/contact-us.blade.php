@extends('frontend-layouts.app')

@section('content')
	<style>
		.inner-column {
			padding-top: 0px !important;
		}
		.banner-section-three .content-column .inner-column h2 {
    		padding-top: 100px;
		}
		.text-black {
			color: black;
		}
		.contact-list li a {
			font-size: 14px; /* Adjust the font size as needed */
		}
		.hotline {
			position: absolute;
			left: 20%;
			bottom: 70px;
			text-align: center;
			padding: 35px 30px;
			border-radius: 55px;
			background-color: #ffe111;
			animation-name: float_up_down;
			animation-duration: 5s;
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			-webkit-animation-name: float_up_down;
			-webkit-animation-duration: 5s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-timing-function: linear;
		}

	</style>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
            <ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
                <li>Contact Us</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
                        <div>
							<section class="contact-section ">
								<div class="pattern-layer" style="background-image:url(images/background/pattern-19.png)"></div>
								<div class="pattern-layer-two" style="background-image:url(images/background/pattern-20.png)"></div>
								<div class="icon-layer-two" style="background-image:url(images/icons/icon-2.png)"></div>
								<div class="icon-layer-three" style="background-image:url(images/icons/icon-2.png)"></div>
								<div class="auto-container">
									<div class="row clearfix">
										
										<!-- Info Column -->
										<div class="info-column col-lg-4 col-md-12 col-sm-12">
											<div class="inner-column">
												<div class="icon-layer" style="background-image:url(images/icons/icon-2.png)"></div>
												<div class="image">
													<img src="images/resource/contact.png" alt="">
												</div>
												<h3 class="text-black">Contact us</h3>
												<div>
												<h4 class="text-black">Our Head Office</h4>
												<ul class="contact-list mt-2">
													<li>
														<span class="fa fa-map-marker"></span>
														<a >International House, Constance Street, London E16</a>
													</li>
													<li>
														<span class="fa fa-whatsapp"></span>
														<a href="https://wa.me/447826233106?text=Hello%2C%20I%20would%20like%20more%20information">+44 7826233106</a>
													</li>
													<li>
														<span class="fa fa-envelope"></span>
														<a href="mailto:info@assignnmentinneed.com">info@assignnmentinneed.com</a>
													</li>
													<li>
														<span class="fa fa-link"></span>
														<a target="_blank" href="https://www.assignnmentinneed.com">www.assignnmentinneed.com</a>
													</li>
												</ul>
												</div>
											</div>
										</div>
										
										<!-- Form Column -->
										<div class="form-column col-lg-8 col-md-12 col-sm-12">
											<div class="inner-column">
												<div class="color-layer"></div>
												<!-- Sec Title -->
												<div class="sec-title">
													<h2> Request a Call Back</h2>
													
												</div>
												
												<!-- Default Form -->
												<div class="default-form">
													<form method="post" action="contact.html">
														<div class="row clearfix">
														
															<!-- Form Group -->
															<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<input type="text" name="username" value="" placeholder="Name" required="">
															</div>
															
															<!-- Form Group -->
															<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<input type="email" name="email" value="" placeholder="Email" required="">
															</div>
															<!-- Form Group -->
															<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<input type="text" name="phone" pattern="[0-9]{10}" value="" placeholder="Phone" required="">
															</div>
															
															<!-- Form Group -->
															<div class="form-group col-lg-6 col-md-6 col-sm-12">
																<input type="text" name="country" value="" placeholder="Country" required="">
															</div>
															
															<!-- Form Group -->
															<div class="form-group col-lg-12 col-md-12 col-sm-12">
																<input type="text" name="subject" value="" placeholder="Subject" required="">
															</div>
															
															
															
															<!-- Form Group -->
															<div class="form-group col-lg-12 col-md-12 col-sm-12">
																<textarea placeholder="REASON FOR CALLBACK"></textarea>
															</div>
															
															<div class="form-group col-lg-12 col-md-12 col-sm-12">
																<button type="submit" class="theme-btn btn-style-one"><span class="txt">FREE CALLBACK</span></button>
															</div>
														</div>
													</form>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
		<div class="hotline">
            <h4 class="text-black">Call us for more information <br><span class="fa fa-whatsapp"></span><a class="text-black" href="https://wa.me/447826233106?text=Hello%2C%20I%20would%20like%20more%20information">+44 7826233106</a></h4>
		</div>
	</section>
	
@endsection