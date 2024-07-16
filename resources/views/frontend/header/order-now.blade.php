@extends('frontend-layouts.app')

@section('content')
	<style>
		
		.bgcolor{
			background-color: #b5d7fd !important;
		}
		.iti {
			position: relative;
			display: inline-block;
			width: 100%;
		}

		.floating-effect {
			animation: floatUpDown 1500ms ease-in-out infinite;
			margin-bottom: -113px;
			margin-top: -103px;
			z-index: 4;

			
		}

		@keyframes floatUpDown {
			0%, 100% {
				transform: translateY(0);
			}
			50% {
				transform: translateY(-20px);
			}
		}
		.event-detail-banner-section .content-box {
			position: relative;
			max-width: 700px;
			margin-top: 100px;
		}

	</style>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Order Now</li>
				</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>We endeavor for customer satisfaction</h2>
                        <div class="mt-5">
                            <h5>
                            	
                            </h5>
                        </div>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/blockquote.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="images/resource/page-title-4.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- <section class="event-detail-banner-section" >
		
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div style="margin-top: 100px;" class="column col-lg-4 col-md-12 col-sm-12 float-right"><img src="images/resource/news-10.jpg" alt=""></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			
			<div class="content-box">
				<h2>Connect Now</h2>
				
				<div class="event-time-zone bgcolor" >
				
						
								
								
						
										
										<h2> </h2>
										<div class="text"></div>
										
											
											<div class="contact-form">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" name="name" class="form-control" placeholder="Your Full Name*" required="">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<input type="email" name="email" class="form-control" placeholder="Your Email Address*" required="">
														</div>
													</div>
												
												
													<input type="hidden" name="country_code" id="country_c">
													
														<div class="col-md-12">
															<div class="form-group">
																<input type="tel" name="phone" class="form-control" name="phone_number[main]" placeholder="Phone*" id="phone_number" />
															</div>
														</div>
														
												</div>
		
													
												
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label>Upload Your Assignment</label>
																<input id="file-upload" type="file" class="form-control" name="doc[]" multiple  /> 
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="form-group">
																<label>Assignment Deadline</label>
																<input type="date" name="deadline" class="form-control" required="">
															</div>
														</div>
														
														
														<div class="col-md-12">
															<div class="form-group">
																<input type="text" name="coupon" class="form-control" placeholder="Apply Coupon Code" >
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<textarea class="form-control" name="additional" placeholder="Additional Assignment Requirments" ></textarea>
															</div>
														</div>
														
														
													</div>
													
													<div class="policy_agree">
														<input type="checkbox">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended) 
													</div>
													<div class="form-group col-md-12">
														<button class="theme-btn btn-style-five" type="submit" name="submit-form">Let's Start</button>
													</div>
											</div>
										</div>
									
					
					
				</div>
				
			</div>
		</div>
	</section> -->
	<section class="donate-page-section pb-0">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column  pt-0">
						<div class="feature-block-six col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box" style="background-color: #f5b642;">
								<div class="title" style="color: black;">Connect Now</div>
								<h2>Get the Premier quality work at the best affordable price.</h2>
								
								<h4>Our experts will assist you till the submission of the assignment.</h4>
								
							</div>
						</div>
						
						@if(Auth::user() == '')
						<div class="feature-block-six col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box" style="background-color: #2596be;">
								<div class="contact-form">
									<div class="row">
										<h2 class="mx-auto">User Details</h2>									
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="user_name" class="form-control" placeholder="Your Full Name*" required="">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email Address*" required="">
											</div>
										</div>
									
									
										<input type="hidden" name="countrycode" id="country_c">
										
											<div class="col-md-12">
												<div class="form-group">
													<input type="tel" name="mobile" class="form-control" name="phone_number[main]" placeholder="Phone*" id="phone_number" />
												</div>
											</div>
											
									</div>
								</div>
							</div>
						</div>
						@endif
					</div>
				</div>
				
				<!-- Donate Column -->
				<div class="donate-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="contact-form">
							<div class="row">
								<h2>Assignment Details</h2>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Upload Your Assignment</label>
										<input id="file-upload" type="file" class="form-control" name="doc[]" multiple  /> 
									</div>
								</div>
								
								<div class="col-md-12">
									@if ($errors->any())
										<div id="errorAlert" class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
										<script>
											setTimeout(function() {
												document.getElementById('errorAlert').style.display = 'none';
											}, 10000); // Hide the error message after 10 seconds (10000 milliseconds)
										</script>
									@endif
									<div class="form-group">
										<label>Assignment Deadline</label>
										<input type="date" name="delivery_date" id="DeliveryDate" class="form-control" required="">
									</div>
								</div>
								
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" name="coupon" class="form-control" placeholder="Apply Coupon Code" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="message" placeholder="Additional Assignment Requirments" ></textarea>
									</div>
								</div>
								
								
							</div>
							
							<div class="policy_agree">
								<input type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended) 
							</div>
							<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
							<div class="form-group col-md-12">
								<button class="theme-btn btn-style-five" type="submit" >Let's Start</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
			
			
		</div>
		
	</section>
	<section class="courses-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="feature-block-six col-lg-12 col-md-12 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<h4>Why Students Love Us</h4>
						<div class="text">My Assignment Services is dedicated towards Making Assignments Simpler for students. <br> Our PhD experts ensure HD Quality work within  <br>deadline for higher grades.</div>
					</div>
				</div>
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-comments"></div>
						<h4>Customer  <br> Feedback</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon flaticon-team"></div>
						<h4>200+ <br> Ph.d Experts </h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-clock-o"></div>
						<h4>Delivery Before <br> The Deadline</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-edit"></div>
						<h4>Unlimited <br> Modification</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-lock" style="color: #0f52b4;"></div>
						<h4>Privacy <br> Protection</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon flaticon-check" style="color: #00ddb7;"></div>
						<h4>Plagiarism <br> Free Work</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-money" style="color: #d500ff;"></div>
						<h4>Easy <br> Refunds</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-key" style="color: #ff0000;"></div>
						<h4>Authentic <br> Resources</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
	<script>
		var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
		separateDialCode: true,
		preferredCountries:["gb"],
		hiddenInput: "full",
		utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
		});
	</script>
	<script>
		$(document).ready(function(){
			var county_code = $(".iti__selected-dial-code").text();
			$("#country_c").val(county_code);
		});
		
		
		$('.iti__selected-flag').on('DOMSubtreeModified', function(){
			var county_code = $(".iti__selected-dial-code").text();
				$("#country_c").val(county_code);
		});
	</script>
	<script>
	document.getElementById('orderForm').addEventListener('submit', function (event) {
		var files = document.getElementById('file-upload').files;
		var totalSize = 0;
		for (var i = 0; i < files.length; i++) {
			totalSize += files[i].size;
		}
		// Check if total size exceeds the limit (50 MB)
		if (totalSize > (50 * 1024 * 1024)) {
			// Prevent form submission
			event.preventDefault();
			// Clear selected files
			document.getElementById('file-upload').value = '';
			// Show SweetAlert popup
			Swal.fire({
				icon: 'error',
				title: 'File Size Exceeded',
				html: 'Total file size should not exceed 50 MB.<br><br><button id="chooseFileAgain" class="btn btn-primary">Choose File Again</button>',
				confirmButtonColor: '#3085d6',
				showCancelButton: false,
				showConfirmButton: false
			});
			// Add event listener for the "Choose File Again" button
			document.getElementById('chooseFileAgain').addEventListener('click', function() {
				// Clear selected files
				document.getElementById('file-upload').value = '';
				// Close the SweetAlert popup
				Swal.close();
			});
		}
	});
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection