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
                <li>Best Assignment Help UAE</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Avail the Best Assignment Help UAE by Assignment In Need</h2>
                        <div class="mt-5">
                            <h5>
                            	Are you studying at one of the top universities in the UAE? UAE has become one of the most sought-after destinations for students pursuing higher education, attracting students worldwide. But while adjusting to a new environment, students face the challenge of meeting the rigorous academic requirements.
                            </h5>
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
	<section class="relationship-section pt-0 pb-0">
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp; background-color: #feede9;">
					<a  class="overlay-link"></a>
					<h2 class="text-black">Why do Students Seek Assignment Help?</h2>
					<div class="text-black text">
						The academic landscape in the UAE is highly competitive. One of the significant aspects of the academic curriculum in UAE universities is the inclusion of assignments. These assignments are mandatory for students across all courses, which adds an extra burden to an already demanding workload. Also, other factors like the complex subject matter, lack of time, and insufficient understanding of assignment requirements impede a student's progress on assignments. As a result, they find themselves overwhelmed and need professional assistance. This is where Assignment In Need comes to the rescue. With our reliable assignment help UAE, we offer students the support they need to excel in their studies.
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp; background-color: #fbf2fe;">
					<a  class="overlay-link"></a>
					<h3 class="text-black text-left">Common Challenges Faced by Students Seeking Assignment Help UAE</h3>
					<div class="text-left text">
					
					<p>Writing impressive assignments is of utmost importance for students as it directly impacts their academic performance and can significantly increase their scores. However, writing assignments is often accompanied by numerous challenges. Most assignments given by UAE university professors are complex and have intricate guidelines, making it difficult for students to meet expectations. This gets even more difficult for students from abroad as they might face language barriers, adding an extra layer of complexity to the assignment writing process. As a result, students often turn to assignment help in UAE to ensure the timely submission of impressive and authentic assignments.</p>

					<p>While seeking the best assignment help in UAE, students also encounter various challenges.
					<ul class="course-info">								
						<li><span class="icon fa fa-angle-right"></span>Numerous assignment help services are available online.</li>
						<li><span class="icon fa fa-angle-right"></span>Every provider claims the reputation and credibility of their assignment help.</li>
						<li><span class="icon fa fa-angle-right"></span>Most experts do not deliver high-quality assignments on time.</li>
						<li><span class="icon fa fa-angle-right"></span>Few writers deeply understand the UAE education system and are familiar with professors' expectations.</li>
						<li><span class="icon fa fa-angle-right"></span>Balancing affordability and quality is also challenging when ensuring value for money.</li>
					</ul>
					</p>
					
					<p>By being aware of these challenges, students can avoid falling prey to fraudulent or low-quality services. You can also consider the points below to make an informed decision while choosing the best assignment help in UAE.</p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp; background-color: #e9f7fe;">
					<a  class="overlay-link"></a>
					<h3 class="text-black text-left">Top Points to Remember While Choosing an Assignment Help UAE</h3>
					<div class="text-left text">
					

					<p>When choosing an assignment help expert in UAE, there are several key points to remember to ensure a reliable and satisfactory experience.
					<ul class="course-info">								
						<li><span class="icon fa fa-angle-right"></span>Look for customer reviews, testimonials, and ratings to gain insights into the experiences of other students.</li>
						<li><span class="icon fa fa-angle-right"></span>Check if the assignment help service has expert writers specializing in your field.</li>
						<li><span class="icon fa fa-angle-right"></span>Look for a service with a track record of delivering assignments within the agreed-upon timeframes.</li>
						<li><span class="icon fa fa-angle-right"></span>Ensure guarantees of plagiarism-free content, error-free writing, and adherence to academic standards.</li>
						<li><span class="icon fa fa-angle-right"></span>Consider if they offer proofreading and editing services to enhance the quality of your assignment.</li>
						<li><span class="icon fa fa-angle-right"></span>Each assignment is unique, and choosing a personalized assistance service is important.</li>
						<li><span class="icon fa fa-angle-right"></span>Assignment help services should prioritize confidentiality and secure your personal info and academic details. Check if they have a strict privacy policy in place.</li>
						<li><span class="icon fa fa-angle-right"></span>Compare the pricing of different assignment help services. Look for transparent pricing policies without hidden charges.</li>
						<li><span class="icon fa fa-angle-right"></span>Ensure the service provider offers reliable and accessible communication channels for addressing concerns or queries.</li>
					</ul>
					</p>
					
					<p>The services provided by Assignment In Need ticks off all these points. We have been helping countless students secure A+ scores. Our assignment help expert in UAE ensure the assignments are well-researched, properly structured, and error-free. This is because we understand the importance of meeting deadlines for students. Thus, we diligently deliver assignments on time, relieving students of looming deadlines.</p>
					<p><strong>Do not just take our word; check out why you should choose Assignment In Need as your Assignment Help UAE.</strong> </p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Content Column -->
		<div class="content-column col-lg-12 col-md-12 col-sm-12">
			<!-- Feature Block Four -->
			<div class="feature-block-four ">
				<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp; background-color: #f0faf4;">
					<a  class="overlay-link"></a>
					<h3 class="text-black text-left">Why Choose Assignment In Need?</h3>
					<div class="text-left text">
					

					<p>Assignment in Need is dedicated to providing the best assignment help in UAE. Here's how we support you in achieving academic success:
					<ul class="course-info">								
						<li><strong>Expert Writers:</strong> We possess a team of experienced assignment help expert in UAE who specialize in various disciplines. They possess in-depth knowledge and understanding of the UAE educational system, ensuring that your assignments meet your institution's specific requirements and standards.</li>
						<li><strong>Customized Solutions:</strong> The experts at Assignment in Need offer personalized solutions tailored to your unique assignment needs. We conduct thorough research, analyze the topic, and create well-structured, original, and insightful assignments that showcase your understanding of the subject matter.</li>
						<li><strong>Timely Delivery:</strong> Meeting deadlines is crucial, and Assignment In Need understands the importance of timely submissions. Our dedicated team works diligently to deliver your assignments within the specified timeframe, allowing you to submit your work on time and avoid mark deductions.</li>
						<li><strong>Plagiarism-free Content:</strong> Academic integrity is highly valued, and our assignment help UAE ensure that your assignments are 100% plagiarism-free. We use reliable plagiarism detection tools to guarantee the originality of the content.</li>
						<li><strong>Affordable Services:</strong> We understand the financial constraints faced by students. We have priced our services affordably to be accessible to all. Our assignment help in UAE does not compromise on the quality of assistance provided, ensuring value for your investment.</li>
					</ul>
					</p>
					
					<p>So, what are you waiting for? Do not let your homework stress you out—contact Assignment in Need today for the best assignment help in UAE. Trust the experts at Assignment in Need to provide you with the assistance you need to excel in your studies!</p>
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