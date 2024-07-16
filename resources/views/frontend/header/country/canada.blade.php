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
                <li>Assignment In Need canada</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h1>Welcome to Assignment In Need Canada</h1>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
                                            1. Introduction and purpose in assisting the Canadian academic market. This is where our services come into play. We provide top-notch Assignment Help in Canada, dedicated to assisting students in overcoming these obstacles and achieving their academic goals
                                            <br>
                                            <br>
                                            2. Highlight the company's commitment to providing top-quality assistance to Canadian students at all levels of education
                                        </div>
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
								<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>						
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
    <section class="career-section" style="background-color: #f7f7f7; padding: 100px 0;">
        <div class="auto-container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
            <div class="sec-title" style="text-align: center; margin-bottom: 30px;">
            <h2 style="font-size: 36px; font-weight: bold; color: #333; margin-bottom: 10px;">Why Choose Assignment In Need Canada?</h2>
            </div>
            
            <div class="row clearfix" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
            <div class="image-column col-lg-5 col-md-12 col-sm-12" style="flex: 0 0 41.666667%; max-width: 41.666667%; padding: 0 15px;">
                <div class="inner-column" style="padding: 30px;">
                <div class="image titlt" data-tilt="" data-tilt-max="4" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                    <img src="images/resource/career.png" alt="" style="width: 100%; height: auto;">
                </div>
                </div>
            </div>
            <div class="content-column col-lg-7 col-md-12 col-sm-12" style="flex: 0 0 58.333333%; max-width: 58.333333%; padding: 0 15px;">
                <div class="inner-column" style="padding: 30px;">
                <div class="text" style="font-size: 16px; line-height: 24px; color: #666;">
                    <p style="margin-bottom: 20px;">1. Expertise and qualifications of the writing team, including advanced degrees from respected Canadian universities and extensive experience working with the Canadian education system</p>
                    <p style="margin-bottom: 20px;">
                    2. Discuss the rigorous quality assurance processes tailored specifically for the requirements of the Canadian educational system:
                    <br>
                    <ul style="list-style: disc; padding: 0 20px; margin-bottom: 20px;">
                        <li style="margin-bottom: 10px;">a. In-depth review of assignment instructions and grading rubrics to ensure alignment with Canadian university/college standards</li>
                        <li style="margin-bottom: 10px;">b. Editing by subject-matter experts familiar with Canadian academic writing conventions and formatting</li>
                        <li style="margin-bottom: 10px;">c. Multi-level proofreading to meet the high standards expected in the Canadian education system</li>
                        <li style="margin-bottom: 10px;">d. Highlight the company's strong reputation for reliability and consistency in delivering high-quality work.</li>
                    </ul>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <section class="courses-section mt-4">
            <div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
            <div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal" style="transform: unset; transition: transform 0s linear 0s; will-change: transform;"></div>
            <div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal" style="transform: unset; transition: transform 0s linear 0s; will-change: transform;"></div>
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>Our Services for Canadian Students</h2>
                  
                </div>
                <div class="row clearfix">
                    
                    <!-- Course Column -->
                    <div class="course-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="lower-content">
                                <div class="text">
                                    <div class="partial-text"> 
                                   1. Academic Essay Writing: Assistance with all types of essays, reports, and papers required at Canadian post-secondary institutions
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="lower-content">
                                <div class="text">
                                    <div class="partial-text"> 
                                   2.  Research Paper Assistance: Help conducting research, structuring arguments, and formatting papers for Canadian college-level courses                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="lower-content">
                                <div class="text">
                                    <div class="partial-text"> 
                                      3.  Homework and Assignment Help: Step-by-step guidance on homework, projects, and assignments for Canadian students                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="course-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="lower-content">
                                <div class="text">
                                    <div class="partial-text"> 
                                      4.  Exams: Help with Canadian standardised exams like the MCAT, LSAT, GRE, etc.                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-section pt-5">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Column -->
				<div class="column col-lg-12 col-md-12 col-sm-12">
					<div class="title-box">
						<h4>Frequently asked questions regarding assignment help in canada</h4>
					</div>
					
					<ul class="accordion-box">
						
						<!-- Block -->
						<li class="accordion block">
							<div class="acc-btn">How fast can you do an online assignment ? <div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text">
										<p>Completing an online assignment as soon as possible is our top priority. You can set your deadline when assigning an order; our writers never fail to follow it. We work even on orders with 3-hour deadlines, so your tasks will be finished in time.</p>
									</div>
								</div>
							</div>
						</li>
						
						<!--Block-->
						<li class="accordion block active-block">
							<div class="acc-btn active">Will I be able to communicate with the assignment expert? <div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content current">
								<div class="content">
									<div class="text">
										<p>We recognize effective communication is the key to success, and do our best to provide you with efficient communication channels. You can easily contact your assignment expert and discuss particular details if necessary. Our support is also always ready to help.</p>
									</div>
								</div>
							</div>
						</li>
						
						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">How much time does it take for assignment writers to do a paper ?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text">
										<p>Depends on your paper. Short work can be done in just 3 hours if that’s what you need. But the more time you give to your writer the better quality assignment help they can provide. It’s better to order your papers in advance to allow your helper to do decent research.</p>
									</div>
								</div>
							</div>
						</li>

						<!--Block-->
						<li class="accordion block">
							<div class="acc-btn">For what subjects will your Canadian assignment helper assist?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content">
								<div class="content">
									<div class="text">
										<p>We have native academic experts to help you in preparing all types of assignment papers on any subject. Some common subjects for which we provide assignment assistance are physics, chemistry, math, management, etc.</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
					
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