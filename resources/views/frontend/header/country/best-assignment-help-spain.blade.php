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
        .news-section-two .title-column .titleboxrightside:before {
            position: absolute;
            content: '';
            right: -10%;
            top: -25px;
            bottom: -25px;
            width: 20%;
            background-color: #d7fdf5;
            transition: width 0.5s; /* Add transition for smooth animation */
        }

        .news-section-two .title-column .titleboxrightside:hover:before {
            width: 130%; /* Increase width on hover */
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
                <li>Assignment In Need Spain</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Best Assignment Help Spain</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
                                            Are you tired of struggling with your assignments and dealing with unreliable experts who often fail to deliver on time? The frustration of many students is that they are constantly under deadline pressure to get their assignments submitted. However, there's a solution to this problem. Assignment in Need is here for assignment help Spain, and we're different from those experts who fail to deliver on time. At Assignment in Need, we have dedicated writers who aren't only proficient in the language but also understand the requirements of assignment help in Spain. We provide services at the most affordable rates, ensuring students can access high-quality assistance without breaking the bank. Our expert focuses on student satisfaction, so we provide unlimited modifications to ensure that the final assignment meets your expectations.
										</div>
										<div class="full-text" style="display: none;">
                                        
                                            Are you tired of struggling with your assignments and dealing with unreliable experts who often fail to deliver on time? The frustration of many students is that they are constantly under deadline pressure to get their assignments submitted. However, there's a solution to this problem. Assignment in Need is here for assignment help Spain, and we're different from those experts who fail to deliver on time. At Assignment in Need, we have dedicated writers who aren't only proficient in the language but also understand the requirements of assignment help in Spain. We provide services at the most affordable rates, ensuring students can access high-quality assistance without breaking the bank. Our expert focuses on student satisfaction, so we provide unlimited modifications to ensure that the final assignment meets your expectations. <br>
                                            The services provided by Assignment in Need have helped countless students secure A+ scores. Our expert writers ensure the assignments are well-researched, properly structured, and error-free. If you're struggling to complete your assignments or find reliable experts, don't hesitate to contact Assignment in Need. We're here to help you every step of the way, ensuring that you submit your assignments on time and achieve academic success. Contact Assignment in Need today and experience our best assignment help in Spain services.

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
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box title-box-2">
							<div class="section-color-layer"></div>
							<div class="title"></div>
							<h2>The Best Assistance to Score Top Grades in English Essays</h2>
							<div class="text">
                                Scoring top grades in English essays is crucial for a student's academic prospects. However, many students find it difficult to write impressive essays in time, ultimately impacting their chances of achieving good grades. If you're struggling with your English essays, you shouldn't hesitate to seek assignment help in Spain from the experts at Assignment in Need. Assignment in Need has a proven track record of providing the best English essay services. Our team of assignment help experts in Spain has helped numerous students increase their chances of scoring top grades. One reason is that our experts possess a deep understanding of the language and are well-versed in the intricacies of essay writing. They know what it takes to craft a compelling and well-structured essay that meets the specific requirements and standards across Spain's educational institutions. When you entrust your English essays to Assignment in Need, you can be confident that they will be written per the specific format and writing standards expected by your institute.

							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-7 col-md-12 col-sm-12">
					
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image:url(images2/icons/pattern-11.png)"></div>
						
						
						<div class="row clearfix">
							
							<!-- Column -->
							<div class="column col-lg-12 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
										
										<h4 class="text-black">Get Help With Your English Homework</h4>
										<div class="text">
                                            In addition to assignment help, Assignment in Need also assists students with their English homework. Our team of experts holds the best qualifications, making them well-equipped to handle any task you throw their way. One of the major benefits of getting help assignment help Spain with Assignment in Need is our 24/7 availability. No matter what time of the day, you can visit our website for support. With our expert's round-the-clock availability, you can rely on them to help you tackle your English homework effectively.</div>
										
									</div>
								</div>
								<!-- News Block Four -->
								<div class="news-block-four mt-5">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
										<h4 class="text-black"> Assignment Help Spain at Affordable Rates</h4>
										<div class="text">
                                            Assignment in Need offers the best assignment help in Spain at extremely affordable rates. Our expert team delivers authentic, 100% plagiarism-free, error-free content within the specified deadline. We understand the financial constraints of students and strive to offer assistance that isn't only of top-notch quality but also fits within their budget. This is why the assignments written by our experts undergo additional quality-check tests to ensure the highest level of accuracy and adherence to guidelines.</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
    <section class="news-section-two pt-0 pb-0">
		<div class="icon-layer-two" style="background-image:url(images2/background/pattern-11.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="titleboxrightside">
							<div class="section-color-layer"></div>
							<h2 class="text-black text-center mb-4">Access Last-Minute Help from Experts</h2>
							<h6 class="text-black pt-2">
                                Our team takes pride in returning customers, which's a testament to the quality and reliability of their services. It's worth noticing that the affordable assignment help services provided by Assignment in Need have proven to be highly satisfactory to 9 out of 10 customers. <br> When you choose Assignment in Need, you can trust that our assignment help expert in Spain will provide timely and reliable assistance, even at the last minute. This is because we understand the urgency that often accompanies assignment deadlines. Our experts are well equipped to handle situations efficiently. <br>

                                Our assignment help Spain help you with the following areas: <br>
                                •	English research papers: Our competent experts can research for your papers - no matter the complexity. <br>
                                •	English essays: Get your essays from experts and increase your chances of securing top grades. <br>
                                •	English assignments and homework: If you need help with your daily homework and assignments, our assignment help expert in Spain can handle it for you. <br>
                                •	English custom writing: Our quick writing helps you develop book reviews, term papers, theses, dissertations, literature reviews or any other English custom writing.  <br>

                                So, say goodbye to sleepless nights and your overwhelming homework tasks with Assignment in Need by your side. Trust our assignment help expert in Spain to provide the assistance you need to excel in your studies. Contact Assignment in Need today for all your assignment needs!

                            </h6>
							
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