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
                <li>Best assignment writing help in Manchester</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Best assignment writing help in Manchester</h2>
                        <div class="mt-5">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									
									<div class="text">
										<div class="partial-text"> 
											best assignment writing help in Manchester, assignment writing help in Manchester <br>
											Assignment Help Manchester When you study at one of Manchester's institutions, you may be required to manage a variety of responsibilities, ranging from many assignments to extracurricular activities. But don't worry, since best assignment writing help in Manchester are here to help.
										</div>
										<div class="full-text" style="display: none;">
											best assignment writing help in Manchester, assignment writing help in Manchester <br>
											Assignment Help Manchester When you study at one of Manchester's institutions, you may be required to manage a variety of responsibilities, ranging from many assignments to extracurricular activities. But don't worry, since best assignment writing help in Manchester are here to help. <br>
											Do you find it difficult to create your assignments? We provide affordable Manchester academic writing assistance. Our assignment writing services in Manchester are here to relieve your academic stress. Hire the greatest assignment specialists in Manchester collaborate with us to improve your total scores.
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
	<section class="relationship-section">
		<div class="auto-container">
			<div class="text-center mb-4">
				<h3>Take Advantage of Our Excellent Academic Writing <br> Services in Manchester</h3>
				<h6>In Manchester universities there is a fairly high standard of assignment writing. First of all, there are various categories of assignments. A certain set of guidelines shall be used for each assignment. Secondly, you may find it difficult to submit all the tasks on time because of tight deadlines. We offer help with assignment writing in Manchester. For the various types of assignments, we are offering assignment writing help</h6>
			</div>
			<div class="row clearfix">
			
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
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
									<h5>Dissertation</h5>
									<p>
										Dissertations are a crucial component of the undergraduate and post-graduate curriculum in UK universities. In Manchester, we offer exceptional assignment writing assistance for both types of dissertations. Our team of experts conducts thorough research to deliver impeccable dissertations tailored to your needs. You can confidently choose our Assignment writing services in Manchester.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a href="research-paper-writing-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-checked"></span>
									</div>
									<h5>Thesis</h5>
									<p>
										Preparing a thesis entails gathering relevant research resources and developing analytical arguments. It is a time-consuming and labor-intensive technique. If you don't have the time to write your thesis paper on your own, you may rely on our assignment writing help in Manchester. Our experts will work hard to create a thorough thesis that will ensure you receive high scores for yur doctoral degree.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<a href="essay-writing-help-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-megaphone"></span>
									</div>
									<h5>Case Study</h5>
									<p>
										If you have case studies as part of your academic requirements, you can rely on us. Our team of experienced writers is highly qualified and capable of handling your case studies with utmost precision. We follow university guidelines and conduct SWOT and PESTLE analyses to ensure comprehensive and accurate work. Don't hesitate to share your academic requirements with us promptly.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<a href="homework-writing-help-uk" class="overlay-link"></a>
									<div class="icon-box">
										<span class="icon flaticon-heart-box"></span>
									</div>
									<h5>Essay</h5>
									<p>
										Tons of students choose us for academic writing services because we provide help with all sorts of essays. It could get quite confusing to write an essay as there are a plethora of different types of essays to begin with, but we can aid you with all kinds of essays, such as: Persuasive essays, Narrative essays, Descriptive essays, Expository essays, etc</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="color-box"></div>
						<div class="icon-layer-one" style="background-image:url(images2/icons/icon-12.png)"></div>
						<h2>Why choose us for your assignments?</h2>
						<div class="bold-text">Top Quality work</div>
						<div class="text">
							Our team consist of experienced professionals who have the best knowledge of their field. It could be a bit scary to trust someone else with the your assignments as your grades depend on them heavily. However, our writers specialise in their field of study, so your assignments will be handled by professionals. Your assignment will be done with thorough precision after proper research and according to the university criteria. With our writers you don’t have to worry as we will make sure that you pass and aim for the highest possible grades</div>
						<a  class="theme-btn btn-style-seven"><span class="txt">Master Your assignments</span></a>
						<!-- <img src="images/meet.jpg" height="712" width="475" alt=""> -->
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
				<h2>Academic Writing For Different Subjects</h2>
				<h6>We offer assignment writing assistance with a variety of subjects, with experience writers who have vast knowledge of their field. services for different subjects such as:</h6>
				<div class="event-time-zone">
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								
								<li><span class="icon flaticon-education"></span>MBA assignments</li>
								<li><span class="icon flaticon-education"></span>Business assignments</li>
								<li><span class="icon flaticon-education"></span>Programming assignments</li>
								<li><span class="icon flaticon-education"></span>Law assignments</li>
								
								
								
							</ul>
						</div>
						<!-- Column -->
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="course-info">
								<li><span class="icon flaticon-education"></span>Psychology assignments</li>
								<li><span class="icon flaticon-education"></span>Finance assignments</li>
								<li><span class="icon flaticon-education"></span>Literary assignments</li>
								<li><span class="icon flaticon-education"></span>BTech assignments</li>

							</ul>
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
					<div class="inner-column col-lg-12 col-md-12 col-sm-12">
						<div class="sec-title">
							<h2>Unlimited Revision</h2>
							<div class="text">
								We not only assist you in completing your assignments but also offer unlimited revisions and modifications at no additional cost. Our primary goal is to provide top-quality work to our clients. We strongly encourage students and clients to reach out to us if any adjustments or changes are required in their work as specified by their professors. This approach ensures that our clients receive superior work aligned with their teacher's guidance. Your satisfaction is our utmost priority, and we are committed to delivering exceptional results that meet your expectations.
							</div>
							
						</div>
						
					</div>
					<div class="inner-column col-lg-12 col-md-12 col-sm-12">
						<div class="news-block-four">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
								<h3 class="text-black">Plagiarism Free Assignments From Experienced Writers</h3>
								<div class="text mt-4">
									When it comes to tackling assignment writing or academic writing, it poses a formidable challenge and not every writer is capable of mastering it. However, at Assignment In Need, Manchester we boast a team of highly skilled writers who possess an exceptional command over the language. Our foremost priority is to ensure that you receive comprehensive, easily comprehensible, and extensively researched assignments that precisely adhere to your teacher's expectations in terms of format and content. It is important to note that upon completion, your assignment is treated with the utmost confidentiality and becomes your exclusive property.
								</div>
								
							</div>
							
						</div>
						
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
						
					<div class="news-block-four">
						<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
							<h2 class="text-black">Improve Your Grades With the Best Assignment Help in Manchester</h2>
							<div class="text mt-4">
								Achieve academic excellence with our comprehensive academic support! We understand the challenges students face with demanding responsibilities and endless assignments. At Assignment In Need, we are dedicated to alleviating your worries through our top-quality assignment writing services. When you choose us, rest assured that your assignment will be crafted with excellence and submitted well ahead of the deadline. We recognize that not all students have the financial means to afford expensive external help. That's why we offer our services at affordable rates that fit every budget. Our team follows a systematic approach to ensure the highest quality of work. It begins with thorough research, followed by meticulous writing, precise editing, and thorough proofreading. <br>
								With a team of experienced professionals, we guarantee that your assignment will be crafted to perfection. We tailor our services to meet your specific requirements, regardless of the discipline or academic level. Our mission is to help you reach new academic heights and regain control of your academic life. Experience the difference with our dedicated team and witness outstanding results. By choosing our affordable assignment services in Manchester, you open doors to academic success. Don't let the burden of assignments hold you back, take advantage of our expertise and embark on a path towards excellence.
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