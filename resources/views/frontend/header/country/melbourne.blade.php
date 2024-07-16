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
                <li>Assignment in Need Melbourne</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Assignment in Need Melbourne</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
											Studying in Melbourne and finding that you're being assigned too many tasks? Do not be afraid, we'll take care of you. We're here to provide you with a comprehensive solution for all your assignment needs, and we're aware of the pressures and requirements of different universities. To find out more about what makes us the best assignment writing help in Melbourne, read on.
										</div>
										<div class="full-text" style="display: none;">
											Studying in Melbourne and finding that you're being assigned too many tasks? Do not be afraid, we'll take care of you. We're here to provide you with a comprehensive solution for all your assignment needs, and we're aware of the pressures and requirements of different universities. To find out more about what makes us the best assignment writing help in Melbourne, read on. <br>
											The city of Melbourne is home to some of the best universities in the world, and studying at universities in Melbourne can open up a whole new world of possibilities. But due to the overload of assignments at your university, are you approaching a breakdown? Our team has a good understanding of the Melbourne curriculum standards, which will help you to meet your diverse assignment needs in an efficient way. We carefully plan each assignment, taking into account the specific guidelines and grading criteria of your institution. We are trying to lighten your academic load and give you more time to focus on your studies and other responsibilities. So, sit back, relax, and we will do all the hard work for you. We assure you that your assignments are in safe and capable hands, thanks to our expertise.
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
											<input type="date" name="delivery_date" id="DeliveryDate" class="form-control" required="">
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
	<section class="feature-section pb-0 pt-0">
		<div class="pattern-layer" style="background-image:url(images/background/pattern-7.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column col-lg-12 col-md-12 col-sm-12">
						<div class="sec-title">
							<h2>Academic Subjects We Provide Expertise With</h2>
							<div class="text">
								Is there any subject troubling you? If yes, then writing an assignment on it will become even more challenging for you. Leave it to us, and you focus on learning and improving your skills for your future career. These are some important subjects we do cover which are as follow:
							</div>
							
						</div>
						
					</div>
					<div class="inner-column col-lg-12 col-md-12 col-sm-12">
						<div class="news-block-four">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
								<h3 class="text-black">Management Assignment Writing Help</h3>
								<div class="text mt-4">
									We've already helped several management students who have encountered problems while writing their HR, leadership, consumer behaviour, operations, risk management, supply chain, marketing and behavior management tasks. Please contact us immediately if you find yourself in any of the management issues, and feel that assistance is necessary.
								</div>
								
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-4 col-md-12 col-sm-12">
						
					<div class="news-block-four">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
							<h2 class="text-black">Assignment Help Melbourne Services by the finest writers</h2>
							<div class="text mt-4">
								Melbourne is a popular choice for international students due to its top universities and career opportunities. However, academic writing tasks can be overwhelming, leading them to seek online assignment writing help. Assignment In Need Melbourne offers quality, professionalism, and affordability for all types of academic papers, including dissertations, thesis, research papers, essays, presentations, and reports. Their experienced team optimizes their skills for efficient work.
							</div>
							
						</div>
						
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
				<div class="title-column col-lg-3 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<div class="section-color-layer"></div>
							<div class="title"></div>
							<h2>Law Assignment Writing Help</h2>
							<div class="text">
								As the field of law is vast and contains a variety of branches and concepts, we have subject oriented writers to handle assignments relating to trade laws, contract law, intellectual property law, taxation law, business law, tort law, constitutional law, employment law, crime law etc. Do you have a topic that you don't want to work on? If this is the case, contact our assignment writing services in Melbourne today.
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-9 col-md-12 col-sm-12">
					
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image:url(images2/icons/pattern-11.png)"></div>
						<div class="icon-layer-four" style="background-image:url(images2/background/pattern-12.png)"></div>
						
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-5 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
										<h4 class="text-black">Computer Science Assignment Writing Help</h4>
										<div class="text">Even though you're a computer wizard, there are some computing languages or concepts that really confuse you. If there's a topic you don't know, we recommend our assignment writers who have excellent knowledge of computer architecture, database management systems, data structures, Perl, Pascal, Visual Basic, Artificial Intelligence, Data Mining, Cloud computing and so forth.</div>	
									</div>
								</div>
							</div>
							<!-- Column -->
							<div class="column col-lg-7 col-md-6 col-sm-12">
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
										
										<h4 class="text-black">Engineering Assignment Writing Help</h4>
										<div class="text">We have experienced writers for various projects who are proficient in their respective fields of engineering, such as civil engineering, electrical, electronics, aerospace, biomedical, nuclear, mechanical engineering, and so on. You will no longer have to spend sleepless nights worrying about your writing. Simply hire us, and we'll complete your project in less time.</div>
										
									</div>
								</div>
								<!-- News Block Four -->
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
										<h4 class="text-black">Programming Assignment Writing Help</h4>
										<div class="text">We often receive requests from students who are struggling with learning programming languages to help them write codes for their projects. We've got expert programmers with in depth knowledge of all these important computing languages, such as databases, web development, JavaScript, Python, Java and so on.</div>
										
									</div>
								</div>
							</div>
							
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
				<h2>Type of Assignment Writing Help <br> We Deals In</h2>
				
				<div class="event-time-zone">
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								
								
								<li><span class="icon flaticon-education"></span>Science Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Essay Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Finance Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Homework Writing Help</li>
								<li><span class="icon flaticon-education"></span>Coursework Writing Help</li>
								<li><span class="icon flaticon-education"></span>Research paper Writing Help</li>
								<li><span class="icon flaticon-education"></span>English Assignment Writing Help</li>
								
							</ul>
						</div>
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								
								<li><span class="icon flaticon-education"></span>Thesis Writing Help</li>
								<li><span class="icon flaticon-education"></span>Dissertation Writing Help</li>
								<li><span class="icon flaticon-education"></span>MBA Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Economics Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Python Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Psychology Assignment Writing Help</li>
								<li><span class="icon flaticon-education"></span>Resume/CV Writing Help</li>
							</ul>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</section>
	<section class="relationship-section pt-5 pb-0">
		<div class="auto-container">
			
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<!-- Feature Block Four -->
					<div class="feature-block-four ">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
							<a  class="overlay-link"></a>
							<div class="icon-box">
								<span class="icon flaticon-heart-box"></span>
							</div>
							<h5>Assignment Help Made for Students Struggling with Assignments</h5>
							<p>
								Assignment help refers to the aid that students receive from experienced writers for completing assignments, essays, dissertation and study plans etc. For a number of reasons, university students in Melbourne may need the best assignment help:</p>
						</div>
					</div>
				</div>
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer" style="background-image:url(images2/background/pattern-11.png)"></div>
						<div class="row clearfix">
							
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-united"></span>
									</div>
									<h5>Insufficient time</h5>
									<p>
										Students often face challenges in balancing academic responsibilities with part-time work, extracurricular activities, and personal commitments, resulting in insufficient time for research, writing, and assignment revision.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-checked"></span>
									</div>
									<h5>Stress and anxiety</h5>
									<p>
										The weight of heavy workloads and tight deadlines can take a toll on students' mental well-being. Seeking assignment help can alleviate the stress and anxiety associated with these academic pressures.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-megaphone"></span>
									</div>
									<h5>Complex subject understanding</h5>
									<p>
										Certain academic concepts and theories can be challenging for students to comprehend independently, necessitating assistance in their interpretation.</p>
								</div>
							</div>
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-checked"></span>
									</div>
									<h5>Writing challenges</h5>
									<p>
										Many students, particularly those from international backgrounds, may encounter difficulties in academic writing in English. They may require support with structuring their work, grammar, paraphrasing, citations, and other aspects of writing.</p>
								</div>
							</div>
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12 mt-4" style="">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; background-color: #feede9;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-united"></span>
									</div>
									<h5>Lack of motivation</h5>
									<p>
										Students who struggle with motivation may procrastinate and face challenges initiating their assignments. They may benefit from external support to overcome their lack of drive.</p>
								</div>
							</div>
							
							
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a  class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-megaphone"></span>
									</div>
									<h5>Limited research <br> proficiency</h5>
									<p>
										Acquiring the skills to locate and evaluate academic sources is vital. Students may need guidance in conducting research at the college level to ensure the credibility and relevance of their sources.</p>
								</div>
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