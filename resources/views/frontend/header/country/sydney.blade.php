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
                <li>Assignment In Need Sydney</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Assignment In Need Sydney: Your Solution to Academic Challenges</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
											You're a student in Sydney who's having trouble coping with the demanding workload of your assignments? Do you find it challenging to strike a balance between your personal life and academic pursuits? If not, you needn't worry because Assignment In Need Sydney is here to help. We're aware of the difficulty for students to complete assignments on time while juggling other responsibilities, so we offer top quality assignment assistance service in Sydney.
										</div>
										<div class="full-text" style="display: none;">
											You're a student in Sydney who's having trouble coping with the demanding workload of your assignments? Do you find it challenging to strike a balance between your personal life and academic pursuits? If not, you needn't worry because Assignment In Need Sydney is here to help. We're aware of the difficulty for students to complete assignments on time while juggling other responsibilities, so we offer top quality assignment assistance service in Sydney. <br>
											Professional writers with prestigious degrees and qualifications from top universities are part of our expert writing team. They've got the right skills and experience to provide you with the best assignment writing help in Sydney. In particular, we aim to help you maintain your interest in studies and to ensure that you can concentrate on your studies without distraction. We aim to alleviate the burden of assignments by helping you with all your tasks, questions, doubts, and problems related to college or university assignments.
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
							<h4>Comprehensive Assignment Assistance in Sydney</h4>
							<p>
								One of the standout features of our service is the wide range of topics we cover. Regardless of your area of study, you can order assignments on any topic from us. We'll take care of students from different universities in Sydney, and we'll make sure you're taken care of no matter where you're studying. We offer comprehensive assignment writing services that cover a wide range of subjects and subtopics, making us Sydney's go to service provider for assignments.</p>
						</div>
						
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
	<section class="event-detail-banner-section">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			
			<div class="content-box">
				<h2>Some of the popular services we offer include</h2>
				
				<div class="event-time-zone">
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								
								<li><span class="icon flaticon-education"></span>Accounting assignment writing help</li>
								<li><span class="icon flaticon-education"></span>Science assignment writing help</li>
								<li><span class="icon flaticon-education"></span>Marketing assignment help</li>
								<li><span class="icon flaticon-education"></span>Social assignment writing help</li>
								<li><span class="icon flaticon-education"></span>Economics assignment writing help</li>
								
							</ul>
						</div>
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								<li><span class="icon flaticon-education"></span>Research paper writing help</li>
								<li><span class="icon flaticon-education"></span>Technical Assignment writing help</li>
								<li><span class="icon flaticon-education"></span>Essay assignment help</li>
								<li><span class="icon flaticon-education"></span>Management assignment writing help</li>
								<li><span class="icon flaticon-education"></span>Programming assignment writing help</li>

							</ul>
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="column col-lg-12 col-md-12 col-sm-12 py-2">
				<h6>
					You can improve your academic standing and distinguish yourself among your peers by taking advantage of our assignment help in Sydney. We're committed to supporting your writing projects, regardless of whether or not you have an academic background. Our online assignment help is applicable to all levels, whether you are pursuing a Ph.D., or completing your studies after graduation. Our writers have a strong understanding of the curriculum and courses offered by universities in Sydney, which will ensure that their expertise matches your academic needs.				
				</h6>
			</div>
		</div>
	</section>
	<section class="news-section-two pt-5 pb-0">
		<div class="icon-layer-one" style="background-image:url(images2/icons/icon-8.png)"></div>
		<div class="icon-layer-two" style="background-image:url(images2/background/pattern-11.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<div class="section-color-layer"></div>
							<div class="title"></div>
							<h2>Assignment Writing Help for all Sydney Universities</h2>
							<p>
								On the subject of universities, all the major Sydney universities are covered by our assignment writing services. The universities of Sydney, UNSW Sydney, University of Technology Sydney, Australian Catholic University Limited, Western Sydney University, University of Wollongong, AIT's interactive technology academy and the Australian College of Theology are among Australia's leading universities. Moreover, outstanding institutions such as the University of Canberra, the University of Technology Sydney, and James Cook University are also supported. <br>
								Our expert writers are focused on making sure that they understand teacher expectations in order to provide quality homework writing service. We'd like to invite you to take advantage of our assignment writing help in Sydney, which will allow you to submit outstanding assignments to your university. Regardless of the university or course you are enrolled in, our assignment experts in Sydney deliver exceptional work.</p>
						</div>
						
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
					
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image:url(images2/icons/pattern-11.png)"></div>
						<div class="icon-layer-four" style="background-image:url(images2/background/pattern-12.png)"></div>
						<h4 class="mt-4 text-black">Here are some of the key universities for which we provide comprehensive assignment help in Sydney</h4>
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
										<h4 class="text-black">1. University of New South Wales:</h4>
										<div class="text"> Students studying in New South Wales can request assignment help services to achieve high scores. Our experts are proficient in writing assignments across various subject disciplines, ensuring the best work from our team.</div>	
									</div>
								</div>
							</div>
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
										
										<h4 class="text-black">2. Macquarie University:</h4>
										<div class="text">If you are struggling to meet deadlines or submit high-quality work at Macquarie University, connect with us for assignment help in Sydney.</div>
										
									</div>
								</div>
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
										<h4 class="text-black">3. University of Sydney:</h4>
										<div class="text">If you encounter difficulties in writing assignments on any topic, reach out to us for the best quality assignments at affordable rates. Our experienced team of writers is dedicated to delivering top-notch assignment work to students studying at the Australian Catholic University.</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="relationship-section pt-0 pb-0">
		<div class="auto-container">
			<div class="text-center mb-4">
				<h3 class="text-black">Advantages of Choosing Assignment Help in Sydney</h3>
				
			</div>
			<div class="row clearfix">
			
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer" style="background-image:url(images2/background/pattern-11.png)"></div>
						<div class="row clearfix">
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a href="assignment-writing-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-united"></span>
									</div>
									<h5>High-Quality Content for Better Grades</h5>
									<p>
										You can expect a number of benefits that will enhance your academic journey when you choose our assignment help service. We're guaranteeing high quality content for the most part. Our expert writers have years of experience and excel in composing assignments that meet the highest academic standards. It is surely going to help you boost your marks and make yourself successful in the classroom by submitting high quality assignments.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a href="research-paper-writing-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-checked"></span>
									</div>
									<h5>Instant Support and Guidance</h5>
									<p>
										The immediate support and guidance you get from our services is another important advantage. To answer your questions and dispel your doubts, our expert writers are available 24 hours a day. Our assignment assistance services are here to help you immediately, rather than professors and friends who may not be available at all times. If you need help, our experts are available to provide the best advice and assistance.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a href="essay-writing-help-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-megaphone"></span>
									</div>
									<h5>Improved Time Management</h5>
									<p>
										In addition, your time management skills can be improved through the use of assignment assistance in Sydney. We're aware that students often find it difficult to balance multiple tasks, such as assignment writing, note making, and attendance in class. With our services, you can delegate the assignment writing work to experts and give yourself more time for other activities so that your burden is reduced. You'll be able to relax and concentrate on other important aspects of your studies if you entrust us with the assignment.</p>
								</div>
							</div>
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a href="essay-writing-help-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-megaphone"></span>
									</div>
									<h5>Privacy Protection and Security</h5>
									<p>
										Another aspect that we have prioritised is the protection of personal data. We're aware that when seeking help with a homework assignment, privacy and security are of the utmost importance. Rest assured that all your personal information is kept confidential and secure. We employ secure channels for order placement and delivery, ensuring the protection of your identity. We also have secure payment platforms to provide you with peace of mind when you use our services.</p>
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
									<a href="homework-writing-help-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-heart-box"></span>
									</div>
									<h5>Affordable Pricing and Cost Savings</h5>
									<p>
										Another important factor that differentiates us from other Assignment services is affordability. We understand that students have limited financial resources, and that's why we strive to keep our prices affordable and within your budget. In order to make our services more cost effective, we are offering a variety of discounts and special offers throughout the year. For more information on pricing and ongoing offers, please contact our sales representatives.</p>
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