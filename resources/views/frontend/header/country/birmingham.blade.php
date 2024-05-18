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
		.news-section-two {
			padding: 0px 0px 0px;
		}
		.feature-section .image-column .image p {
			font-size: 14px;
		}
		@media (min-width: 768px) {
			.padding-left {
				padding-left: 150px;
			}
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
                <li>Assignment help in Birmingham</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Assignment help in Birmingham</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
											Assignments are a very essential part of any university as it helps the student navigate their progress throughout the course. Having to deal with an overflow of assignments in a single academic year. It is a must for students to have the best assignment writing help in Birmingham. In today's hustle culture, everyone is grinding and especially the university students. Not only having to deal with plenty of assignmentsand meeting the deadlines while having to scavenger for appropriate resources. they also have to do certain side hustle, leaving no room for them to have for not only their loved ones but also themselves. 
										</div>
										<div class="full-text" style="display: none;">
											Assignments are a very essential part of any university as it helps the student navigate their progress throughout the course. Having to deal with an overflow of assignments in a single academic year. It is a must for students to have the best assignment writing help in Birmingham. In today's hustle culture, everyone is grinding and especially the university students. Not only having to deal with plenty of assignmentsand meeting the deadlines while having to scavenger for appropriate resources. they also have to do certain side hustle, leaving no room for them to have for not only their loved ones but also themselves. Having a struggling social and personal could turn into a loop of loneliness and burnout. This is extremely harmful for the student's mental health. Dealing with so much they also have to maintain a good academic score. In order to help students out with this, we offer the best assignment help to students in Birmingham. Currently looking at the economic crisis in Birminghan there is a inflation in the market. However, we are providing the best assignemt work in all of Birmingham at the most marginal price. This opens the door for students to have a stress free academic life. You can get so much more time to focus on self - study and understanding the concepts and meaning behind every assignment as we will provide you with the top notch work. And as an added benefit to this you can have fun in your college life, that is how you are supposed to live it moreover, giving a chance for you to explore more deeply into your interests and passion and branch out to a million of opportunities.
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
	<section class="news-section-two">
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
							<h4>Plethora of topics any kind of assignment in Birmingham</h4>
							<p>
								Having an extremely experienced team of writers who are specialised professionals of their field, can provide help with almost any type of assignment. Offering an excellent online assignment help in Birmingham. With a wide range of topics, on a variety of subjects, we ensure to provide you specialised work as per your requirements. Moreover, if you are not sure of which topic to pick, our knowledgeable writers could provide you an array of topics to choose from along with proper explanation of each topic.  <br>
								When it comes to deadlines, our team of experts make sure to provide you the work in a timely manner. So that you have enough time to understand the material provided and submit the work before the deadline.</p>
						</div>
						
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
					
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image:url(images2/icons/pattern-11.png)"></div>
						<div class="icon-layer-four mt-5" style="background-image:url(images2/background/pattern-12.png)"></div>
						<h4 class="mt-4">We offer a variety of services on academic writing, some of the categories are:</h4>
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
										
										<div class="text">Accounting assignment writing help <br>Science assignment writing help <br>Marketing assignment writing help</div>	
									</div>
								</div>
							</div>
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
										
										
										<div class="text">Economics assignment writing help <br>Social assignment writing help <br>Research paper writing help</div>
										
									</div>
								</div>
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
										
										<div class="text">
										Assignment writing help <br>Essay assignment help <br>Management assignment writing help</div>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			
            <div class="row clearfix">
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/news-10.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="images/resource/page-title-6.jpg" alt="" />
						</div>
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column padding-left">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2 class="mb-4">The Advantages Of Using Our Assignment Help in Birmingham</h2>
                        <div class="text">
							
							The number of benefits for a student has expanded to the highest degree due to the quick expansion of the academic aid sector and the entry of several assignment writing pros into these services. Some of such advantages are listed below: Similar to universities, there are numerous levels of academic education, such as graduation, post-graduation and Ph.D. We provide Birmingham with all kind of online assignment assistance. Our professional writers do their utmost to produce content that is well-understood on specific subjects. They are quite knowledgeable about UK's University Curriculum and its courses. Because you need to earn better grades in oder to maintain your academic standing and pave the way for a bright future, you may count on us and contact us to get the highest caliber assignment.
							
						</div>
												                        
					</div>
				</div>				
			</div>
		</div>
	</section>
	<section class="feature-section">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-7.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Superior content</h2>
							<div class="text">
								
								You can maintain the highest academic standard and differentiate yourself from other students by thinking about online assignment assistance in Birmingham.Your writing assignments always have our assistance. When content is written by a professional from assignment help services, the results are superior. Since professional writers have been writing for many years and it is their line of work, they excel in producing high-quality assignments that meet all academic requirements. It will be quite advantageous for you because submitting an excellent assignment will enable you to receive decent grades.
								
							</div>
							
						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="color-layer"></div>
						<div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
							<img src="images/resource/feature.jpg" alt="">
							<div class="overlay-box">
								<div class="content">
									<h2>Quick Solution Guidance</h2>
									<p>The ability to acquire assistance from professionals at our assignment writing services at any time of day is the most beneficial perk of working with us. It goes without saying that your friends and lecturers won't always be available to you with questionsand clarifications. When you have thought about using these services for assignment help, you do not need to wait to receive a prompt response to your inquiry.As the professional writers are constantly willing to assist and offer the greatest advice available. The best assignment assistance services in Birmingham are available around-the-clock, so you can ask questions at any time and receive a response in a matter of minutes. </p>
								</div>
							</div>
						</div>
						<div class="feature-icon wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: float_up_down;">
							<img src="images/resource/feature-icon.png" alt="">
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<section class="feature-section pb-0 pt-0">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-7.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
						
					<div class="news-block-four">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
							<h3 class="text-black">Privacy and Security</h3>
							<div class="text mt-4">
								Assignments are the major part of a universities grading system. In other words, a university de-gree depends on your assignment. However, we are aware of your concerns about security and privacy if you're thinking about using our online assignment helpBirmingham service. For this reason, receiving instructions and deliver-ing assignments receive extra care. We maintain the security of all of your data, and we never give it to third parties for profit. Additionally, we make sure that all services are provided via secure channels to protect identity. To further increase security, your personal information isn't even ac-cessible to our employees directly. It is common knowledge that there are numerous risks to secu-rity and personal information when working online. Everything, from browsing the website to making payments, takes place over a secure channel. This is why we employ secure payment platforms as a service wepay for and to make you feel safe when you receive assistance with our difficulties. Assignment deadlines are frequently the most frightening and stressful component of college education. Due to various responsibilities, students like you do not always have the time to complete work on time.
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Cultivate Time <br> Management/ <br>Administration</h2>
							<div class="text">
								Researching for assignments can be very hectic not only that, but also quite time consuming. While having to maintain a regular progress of the work can be hard when you have so many assignments to juggle. Assignment help services lifts that burden off of the students and giving them a sigh of relief. This also helps students to maintain a balnce when it comes to their personal studies and completing their assignments within thedeadline.
							</div>
							
						</div>
						
					</div>
				</div>
				
				
				
			</div>
			
		</div>
	</section>
	<section class="feature-section pb-0 pt-0">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-7.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Offering a Reasonable <br> Price</h2>
							<div class="text">
								There areseveral Assignment writing help service providers in the Birmingham market that provide assignment writing help to students, where the price per assignment is quite low, but they don't care what every student can afford. We all know that money does not grow on trees, and we all understand the importance of money in the lives of students who have few or no sources of income. As a result,we always attempt to keep the price as cheap as possible without compromising other aspects. Ourpricing are reasonable and may fit inside your budget. For more information, please contact your sales representative. Weare also running numerous different deals that you can use to obtain discounts. These are limited-time offers that you can take advantage of. These are seasonal offers that you can take advantage of. We also do bulk assignments allowing you to get better discounts. This allows you to offer curriculum help for assignments or general writing help at the same time, throughout your academic journey on a budget.
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
						
					<div class="news-block-four">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
							<h3 class="text-black">Unique and well-settled assignments</h3>
							<div class="text mt-4">
								It is guaranteed that if the assignment made by expert writers helps you to achieve better marks in your submissions, then it will not be possible to do so on your own. Assignment for evaluation, you're likely to get better marks than usual. Professional writers, who have years of academic writing experience, present a very high levelassignment. For the purpose of investigating and compiling essential content, these experts exploit the best available authentic sources. They keep the structure of their writing, and in your assignment they place references to relevant sources. Infact, all of this increases the chances that you'll be able to achieve better marks in your assignment writing project. We have a primary task of creating uniqueness and originality. These tasks can be performed by our experienced writers who have written submissions with no plagiarism. They're familiar with the seriousness of university professors when it comes to stealing assignments. So, every word they've come up with is written in an entirely original form. Turnitin, SafeAssign or similar tools for detecting theft are well understood by our assignment writers. This is why special attention must be paid to the creation of problems. Higher scores will naturally be awarded for each assignment containing unique, original and high quality work. As a matter of fact, when students are considering assignment writing help from our assignment writing service, most will come up with high marks for their assignments.
							</div>
							
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