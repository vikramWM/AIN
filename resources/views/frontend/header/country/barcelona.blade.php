@extends('frontend-layouts.app')

@section('content')
	<style>
		.text {
			color: #0c0d24;
			line-height: 1.8em;
			font-size: 16px;
		}
		.text-black{
			color: black;
			
		}
		.banner-section-three .content-column .inner-column {
			padding-top: 5px;
		}
		
	</style>
	<style>
		.iti {
			position: relative;
			display: inline-block;
			width: 100%;
		}
	</style>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Assignment In Need Barcelona</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Assignment In Need Barcelona</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
											Barcelona offers a multitude of attractions, including delightful cuisine, stunning beaches, successful football teams, and a laid back atmosphere that permeates the city. However, what truly makes Barcelona an exceptional destination for students is its renowned universities. Barcelona is home to some of the world's top ranking universities, adding to its appeal as a prime study location. Reports claim that education holds great significance in Spanish culture, fostering a remarkably high level of learning across the country. 
										</div>
										<div class="full-text" style="display: none;">
											Barcelona offers a multitude of attractions, including delightful cuisine, stunning beaches, successful football teams, and a laid back atmosphere that permeates the city. However, what truly makes Barcelona an exceptional destination for students is its renowned universities. Barcelona is home to some of the world's top ranking universities, adding to its appeal as a prime study location. Reports claim that education holds great significance in Spanish culture, fostering a remarkably high level of learning across the country. <br>
											According to research conducted in Spain, the city is highly sought after by international students due to the presence of these esteemed educational institutions. Barcelona boasts a remarkable standard of education, making it an enticing choice for students looking to pursue their studies. With a plethora of world class universities, the city attracts a diverse range of international students.
										</div>
										<button class=" btn btn-primary read-more-btn mt-2">Read More</button>
										
										
									</div>
									
								</div>
							</div>
                        </div>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column mr-0 pb-0 pl-0" style="background-color: #aed6ee; border-radius: 32px;box-shadow: 10px;box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
						<!-- Contact Form -->
						<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="contact-form p-4">
								@if(Auth::user() == '')
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="user_name" class="form-control" placeholder="Your Full Name*" required="">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Your Email Address*" required="">
										</div>
									</div>
								</div>

								<input type="hidden" name="countrycode" id="country_c">
								<div class="row">
									<div class="col-md-12" style="width:100%">
										<div class="form-group">
											<input type="tel" name="mobile" class="form-control"  placeholder="Phone*" id="phone_number" />
										</div>
									</div>
								</div>

								@endif

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
											<input type="date" name="delivery_date" class="form-control" required="">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="coupon" class="form-control" placeholder="Apply Coupon Code">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" placeholder="Additional Assignment Requirements"></textarea>
										</div>
									</div>
								</div>

								<div class="policy_agree">
									<input type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended) 
								</div>

								<div class="form-group col-md-12">
									<button class="theme-btn btn-style-five" type="submit">Place Order</button>
								</div>
							</div>
						</form>

					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="news-section-two pt-0 pb-0">
		<div class="icon-layer-one" style="background-image:url(images2/icons/icon-8.png)"></div>
		<div class="icon-layer-two" style="background-image:url(images2/background/pattern-11.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<div class="section-color-layer"></div>
							<div class="title"></div>
							<h4>However, navigating the academic landscape in a foreign country can be challenging. That's where Assignment In Need Barcelona steps in to offer specialized assignment help services tailored to the needs of international students. Let's embark on a journey to discover how our assistance can enhance your academic experience in Barcelona.</h4>
							
						</div>
						
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
	<section class="relationship-section pt-0 pb-0">
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp; background-color: #fbf2fe;">
					<a  class="overlay-link"></a>
					<h2 class="text-black">1 Embracing the Barcelona Advantage</h2>
					<div class="text-black">
					Barcelona's prestigious universities and high quality education system make it an ideal destination for international students seeking to further their studies. At Assignment In Need Barcelona, we recognize the opportunities and challenges that come with studying in this vibrant city. Our mission is to provide comprehensive assignment help that complements your academic journey, helping you make the most of your time in Barcelona. <br>
					Acculturation may seem quite overwhelming especially in a place like Barcelona, from adjusting to a new culture to learning Spanish. Even though this seems a lot that too when your key focus is supposed t be on your studies. In order to save you from the hassle of navigating your studies in a new language altogether the best assignment writing help in Barcelona is here to aid you with all your academic requirements. So explore, embrace and soak in all the Barcelona goodness
					</div>
					
				</div>
			</div>
		</div>
		<div class="auto-container">
			
			<div class="row clearfix">
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer" style="background-image:url(images2/background/pattern-11.png)"></div>
						<div class="row clearfix">
							
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									
									<h5>2 Unleashing Your Potential with Expert Assistance</h5>
									<p>
										Our team of experienced writers at Assignment In Need Barcelona is dedicated to unlocking your academic potential. We offer a wide range of assignment writing help services, including essays, research papers, case studies, and more. Our experts possess deep knowledge across various disciplines, ensuring that your assignments are meticulously crafted to meet the highest standards of quality.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									
									<h5>3 Personalized Support for Academic Success</h5>
									<p>
										We understand that every student has unique requirements and faces different academic challenges. That's why our assignment help services are tailored to your specific needs. Whether you need assistance with structuring your assignments, refining your writing style, or conducting research, our experts are here to provide personalized support and guidance.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									
									<h5>4 Navigating Barcelona's Academic Landscape</h5>
									<p>
										Barcelona hosts a diverse range of academic programs and disciplines. From humanities and social sciences to engineering and business, our assignment help services cover a wide spectrum of subjects. Regardless of your field of study, our experts possess the necessary expertise to deliver exceptional results and help you succeed academically.</p>
								</div>
							</div>
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									
									<h5>5 The Assignment In Need Advantage:</h5>
									<p>									
										<strong> Timely Delivery:</strong> We understand the importance of meeting deadlines. Our dedicated team works diligently to ensure that your assignments are delivered promptly, allowing you sufficient time for review and submission. <br>
										<strong>Confidentiality and Privacy:</strong> Your privacy is of utmost importance to us. We maintain strict confidentiality and ensure that your personal information remains secure throughout the process.</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
					<a  class="overlay-link"></a>
					<div class="text-center">
					<h4 class="text-black"><strong> 24/7 Customer Support</strong></h4>
					<p class="text-black">Our friendly customer support team is available round the clock to address any queries or concerns you may have. <br> Feel free to reach out to us at any time. </p>
					<h4 class="text-black"><strong>Competitive Pricing</strong></h4>
					<p class="text-black">We offer affordable assignment help services without compromising on quality.  <br>We understand the financial constraints of students and strive to provide cost effective solutions. </p>
					<button class="btn btn-primary">Contact Us</button>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<section class="event-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title"></div>
							<h2>Conclusion</h2>
						</div>
						<div class="bold-text">Assignment In Need Barcelona is your trusted companion in navigating the academic landscape of this vibrant city. Our specialized assignment help services for international students are designed to support your academic journey, enhance your learning experience, and empower you to achieve academic excellence. Barcelona's rich cultural heritage and educational opportunities await, let us guide you on the path to success. Embrace the Barcelona advantage and partner with Assignment In Need Barcelona today.</div>
						
						
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="background-layer-one" style="background-image:url(images/background/pattern-7.png)"></div>
					<div class="inner-column titlt" data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
						<div class="image wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
							<img src="images/resource/career.png" alt="">
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const readMoreBtns = document.querySelectorAll('.read-more-btn');

			readMoreBtns.forEach(function(btn) {
				btn.addEventListener('click', function() {
					const textContainer = this.parentElement;
					const partialText = textContainer.querySelector('.partial-text');
					const fullText = textContainer.querySelector('.full-text');

					if (fullText.style.display === 'none') {
						fullText.style.display = 'block';
						partialText.style.display = 'none';
						this.innerText = 'Read Less';
					} else {
						fullText.style.display = 'none';
						partialText.style.display = 'block';
						this.innerText = 'Read More';
					}
				});
			});
		});
	</script>
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