@extends('frontend-layouts.app')

@section('content')
<style>
	@media screen and (max-width: 768px) {
		#testimonial-video {
			width: 100%;
			/* Set the width to 100% when div goes to col-12 */
			height: auto;
			/* Set the height to auto to maintain aspect ratio */
		}
	}
</style>
<style>
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

		0%,
		100% {
			transform: translateY(0);
		}

		50% {
			transform: translateY(-20px);
		}
	}

	.modal-body {
		padding: 0.5rem;
	}

	.whatsapp-icon {
		color: #25D366;
		/* WhatsApp green color */
		font-size: 24px;
		margin-right: 5px;
	}
</style>
<style>
	.testimonial-block-four .video {
		margin-top: 15px;
	}

	.testimonial-block-four .video video {
		width: 80%;
		height: 250px;
		border-radius: 15px;
	}
</style>
<section class="banner-section-four">
	<div class="icon-layer-one" style="background-image:url(images2/icons/icon-11.png)"></div>
	<div class="icon-layer-two" style="background-image:url(images2/icons/icon-3.png)"></div>
	<div class="icon-layer-three" style="background-image:url(images2/background/pattern-8.png)"></div>
	<div class="icon-layer-eight" style="background-image:url(images2/background/pattern-9.png)"></div>
	<div class="auto-container">
		<div class="row clearfix">
			<div class="content-column col-lg-6 cl-md-12 col-sm-12">
				<div class="inner-column">
					<h1>Welcome to Assignment Writing Services</h1>
					<div class="text"><strong>Get the Premier quality work at the best affordable price.</strong> <br>Our experts will assist you till the submission of the assignment.</div>
					<div class="phone-box">
						<div class="box-inner">
							<span class="icon flaticon-email"></span>
							Contact us
							<a href="mailto:info@assignnmentinneed.com">info@assignnmentinneed.com</a>
						</div>
					</div>
					<div class="phone-box mt-4">
						<div class="box-inner">
							<span class="icon flaticon-phone-call"></span>
							Call us
							<a href="tel:+442037695831">+44 2037695831</a>
						</div>
					</div>
					<div class="phone-box mt-4">
						<div class="box-inner">
							<span class="icon fa fa-whatsapp"></span>
							WhatsApp Number
							<a href="tel:+447826233106">+44 7826233106</a>
						</div>
					</div>
				</div>
			</div>

			<div class="image-column col-lg-6 cl-md-12 col-sm-12">
				<div class="inner-column" style="background-color: #aed6ee; border-radius: 32px;box-shadow: 10px;box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
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
										<input type="tel" name="mobile" class="form-control" placeholder="Phone*" id="phone_number" />
									</div>
								</div>
							</div>

							@endif

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Upload Your Assignment</label>
										<input id="file-upload" type="file" class="form-control" name="doc[]" multiple />
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

<style>

</style>


<section class="connection-section">
	<div class="color-one"></div>
	<div class="pattern-layer" style="background-image:url(images2/background/pattern-10.png)"></div>
	<div class="icon-layer-one" style="background-image:url(images2/icons/icon-4.png)"></div>
	<div class="icon-layer-two" style="background-image:url(images2/icons/icon-15.png)"></div>
	<div class="icon-layer-three" style="background-image:url(images2/icons/icon-4.png)"></div>
	<div class="icon-layer-four" style="background-image:url(images2/icons/pattern-10.png)"></div>
	<div class="icon-layer-five" style="background-image:url(images2/icons/icon-3.png)"></div>
	<div class="left-color-layer"></div>
	<div class="right-color-layer"></div>
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Content Column -->
			<div class="content-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="sec-title">
						<!-- <h6>ABOUT US</h6> -->
						<h2>ASSIGNMENT HELP UK</h2>
						<div class="text"></div>
					</div>
					<div class="row clearfix">

						<!-- Feature Block Three -->
						<div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon flaticon-bullhorn"></span>
								</div>
								<h4><a href="#"></a></h4>

								<div class="text">
									<div class="partial-text">
										We are Assignment In Need, a promised company to provide you the best facilities for your assignment at an affordable price. For us, affordable does not mean compromising with quality. Our team has been proficiently working to match your study needs across a wide range of subjects with 24/7 service since 2014. Our assignment projects are composed by some leading experts in the industry.
									</div>
									<div class="full-text" style="display: none;">
										We are Assignment In Need, a promised company to provide you the best facilities for your assignment at an affordable price. For us, affordable does not mean compromising with quality. Our team has been proficiently working to match your study needs across a wide range of subjects with 24/7 service since 2014. Our assignment projects are composed by some leading experts in the industry. Our team consists of graduates from various disciplines to help you with a broad range of academic assignments. Our writers are proficient in assignments like research papers and thesis. We have experts to attend your work in the fields like Law, Mathematics, Physics, C++, Java, LabVIEW, MATLAB, and other technical assignments. We understand that every project has different requirements so, by having the most knowledgeable team by our side, we can bring out the assignment project details that meet or even exceed our client's expectations.
									</div>
									<button class=" btn btn-primary read-more-btn">Read More</button>
								</div>
							</div>
						</div>
						<div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="inner-outer">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-mortarboard"></span>
									</div>
									<h4><a href="courses-single.html">Ensuring Academic Success</a></h4>

									<div class="text">
										<div class="partial-text">
											We also help students with online exams. We offer the facility of unlimited modification as per the client's concern. When you seek help from us, you get a confidential and secure service with 100% privacy of the client's details, payment details, project work, and copyrights of research work.
										</div>
										<div class="full-text" style="display: none;">
											We also help students with online exams. We offer the facility of unlimited modification as per the client's concern. When you seek help from us, you get a confidential and secure service with 100% privacy of the client's details, payment details, project work, and copyrights of research work. Here you will get guarantee plagiarism-free and error-free work. We help students secure higher grades through our top-quality customized work before the deadline. We are sure that our assignment help will fetch you excellent grades in your respective course. We not only strive to serve students with quality assignments but also ensure that scholars obtain a broad knowledge of the topic as they seek assistance from us. We are capable of delivering effective, accurate, and error-free assignments.
										</div>
										<button class=" btn btn-primary read-more-btn">Read More</button>
									</div>
								</div>
							</div>
						</div>
						<div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<div class="icon-box">
									<span class="icon flaticon-bar-chart"></span>
								</div>
								<h4><a></a></h4>

								<div class="text">
									<div class="partial-text">
										In addition to offering online exam assistance, we provide a comprehensive range of academic services, including dissertation and essay writing. At Assignment In Need, we understand that these tasks are critical components of your academic journey.
									</div>
									<div class="full-text" style="display: none;">
										In addition to offering online exam assistance, we provide a comprehensive range of academic services, including dissertation and essay writing. At Assignment In Need, we understand that these tasks are critical components of your academic journey. Our dedicated team of expert writers is well-equipped to assist you in crafting top-quality dissertations and essays that meet your unique requirements. We take pride in our commitment to 100% confidentiality and security, ensuring the safeguarding of your personal details, payment information, and the copyrights of your research work. When you choose us, you're guaranteed plagiarism-free and error-free content that is custom-tailored to your needs. Our mission is not only to help you achieve higher grades but also to enhance your understanding of the subject matter. We are dedicated to delivering assignments, dissertations, and essays that are effective, accurate, and free of errors, all while ensuring timely delivery to meet your academic deadlines.
									</div>
									<button class=" btn btn-primary read-more-btn">Read More</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="video-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="color-two"></div>
					<!-- Video Box -->
					<div class="video-boxed-two wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
						<figure class="video-image">
							<img src="images2/resource/video-image-1.jpg" alt="">
						</figure>
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
						<i class="time">5.20 m</i>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="relationship-section">
	<div class="auto-container">
		<div class="text-center mb-4">
			<h6>Our Assignment Help for Your Path to Academic Success</h6>
			<h3>WHAT WE CAN DO FOR YOU</h3>
		</div>
		<div class="row clearfix">
			<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="pattern-layer" style="background-image:url(images2/background/pattern-11.png)"></div>
					<div class="row clearfix">
						<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
								<a href="assignment-writing-uk" class="overlay-link"></a>
								<div class="icon-box">
									<span class="icon flaticon-united"></span>
								</div>
								<h5>ASSIGNMENT</h5>
								<p>Assignment writing is a difficult task for many of the students as it takes a lot of research and time and without completing the requirements.</p>
								<a href="assignment-writing-uk" class="link">View more</a>
							</div>
						</div>
						<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
								<a href="research-paper-writing-uk" class="overlay-link"></a>
								<div class="icon-box">
									<span class="icon flaticon-checked"></span>
								</div>
								<h5>RESEARCH PAPER WRITING</h5>
								<p>Assignment In Need is one of the best writing services in writing research paper. Our writers are highly qualified and can write any type of research paper whether</p>
								<a href="research-paper-writing-uk" class="link">View more</a>
							</div>
						</div>
						<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
								<a href="essay-writing-help-uk" class="overlay-link"></a>
								<div class="icon-box">
									<span class="icon flaticon-megaphone"></span>
								</div>
								<h5>ESSAY WRITING</h5>
								<p>sometimes students find tough to make proper structure in order to write a proper essay. They are concerned about the content used to write as</p>
								<a href="essay-writing-help-uk" class="link">View more</a>
							</div>
						</div>
						<div class="feature-block-four col-lg-6 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
								<a href="homework-writing-help-uk" class="overlay-link"></a>
								<div class="icon-box">
									<span class="icon flaticon-heart-box"></span>
								</div>
								<h5>HOME WORK</h5>
								<p>Many of Students are provided homework so they can keep notes as what have been taught them in the class. However, some students do not like to do</p>
								<a href="homework-writing-help-uk" class="link">View more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="color-box"></div>
					<div class="icon-layer-one" style="background-image:url(images2/icons/icon-12.png)"></div>
					<h2>Your Will <br> + <br> Our Experts Guidance <br> = <br> Excellencey at Subject</h2>
					<div class="bold-text">Unlock expertise: Share, learn, master with our expert guidance today!"</div>
					<div class="text">Unlock your potential and become a subject expert! Share all the details with us, and our team of experts will guide you every step of the way. Dive into the journey of learning with confidence, and watch as you master the subject. Join us in the pursuit of knowledge and success – your transformation begins now!"</div>
					<a class="theme-btn btn-style-seven"><span class="txt">Master Your Subject</span></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="featured-section">
	<div class="auto-container">
		<div class="text-center mb-4">
			<h6>Distinctive Approach to Assignment Writing Help</h6>
			<h3>Our Guarantee</h3>
		</div>
		<div class="row clearfix">
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="fa fa-thumbs-up"></span>
					</div>
					<h6>Customized quality work</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="fa fa-clock-o"></span>
					</div>
					<h6>Delivery before the deadline</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="fa fa-edit"></span>
					</div>
					<h6>Unlimited modification</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<img src="images/24-hours.png" alt="" width="70px">
					</div>
					<h6>Student support 24/7</h6>
				</div>
			</div>
		</div>
	</div>

	<div class="auto-container p-4">
		<div class="row clearfix">
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-bar-chart"></span>
					</div>
					<h6>Plagiarism free work</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-user-3"></span>
					</div>
					<h6>Only experienced writers</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-mortarboard"></span>
					</div>
					<h6>Assistance in assignment writing</h6>
				</div>
			</div>
			<div class="feature-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="fa fa-lock"></span>
					</div>
					<h6>Privacy protection</h6>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="trial-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="text-center mb-4">
						<h2>Client Testimonials</h2>
					</div>
					<iframe id="testimonial-video" src="https://player.vimeo.com/video/623468808?h=060bbb42ec" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
						<div class="color-box"></div>
						<h3>Contact Us</h3>
						<div class="trial-form">
							<form method="post" action="https://themazine.com/html/Lebari_new/lebari/lebari/contact.html">
								<div class="form-group">
									<input type="text" name="name" value="" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input type="text" name="mobile" value="" placeholder="Mobile Number">
								</div>
								<div class="form-group">
									<textarea name="message" placeholder="Your Personal Message"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="theme-btn submit-btn"><span class="txt">Send now</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Testimonial Section Four -->
<section class="testimonial-section-four">
	<div class="top-pattern-layer" style="background-image:url(images2/background/pattern-20.png)"></div>
	<div class="bottom-pattern-layer" style="background-image:url(images2/background/pattern-20.png)"></div>
	<div class="icon-layer-one" style="background-image:url(images2/icons/icon-22.png)"></div>
	<div class="icon-layer-two" style="background-image:url(images2/icons/icon-22.png)"></div>
	<div class="auto-container">
		<div class="sec-title-two centered">
			<div class="title">Testimonial</div>
			<h2>See what our customers say</h2>
		</div>
		<div class="inner-container">
			<div class="circle-pattern-layer-one" style="background-image:url(images2/background/pattern-22.png)"></div>
			<div class="circle-pattern-layer-two" style="background-image:url(images2/background/pattern-22.png)"></div>
			<div class="hm4-testimonial-carousel owl-carousel owl-theme">

				<!-- Testimonial Block Four with Video -->
				<div class="testimonial-block-four">
					<div class="video">
						<video controls>
							<source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>

				</div>

				<!-- Additional testimonial block with video -->
				<div class="testimonial-block-four">
					<div class="video">
						<video controls>
							<source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>

				</div>

				<!-- Third testimonial block with video -->
				<div class="testimonial-block-four">
					<div class="video">
						<video controls>
							<source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>

				</div>

				<!-- Fourth testimonial block with video -->
				<div class="testimonial-block-four">
					<div class="video">
						<video controls>
							<source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const owlCarousel = $('.hm4-testimonial-carousel').owlCarousel({
			// Your owlCarousel settings here
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true
		});

		const videos = document.querySelectorAll('.testimonial-block-four video');

		videos.forEach(video => {
			video.addEventListener('play', () => {
				owlCarousel.trigger('stop.owl.autoplay');
			});
			video.addEventListener('pause', () => {
				owlCarousel.trigger('play.owl.autoplay');
			});
			video.addEventListener('ended', () => {
				owlCarousel.trigger('play.owl.autoplay');
			});
		});
	});
</script>
<!-- End Testimonial Section Four -->

<section class="news-section-two">
	<div class="icon-layer-one" style="background-image:url(images2/icons/icon-8.png)"></div>
	<div class="icon-layer-two" style="background-image:url(images2/background/pattern-11.png)"></div>
	<div class="auto-container">
		<div class="row clearfix">
			<div class="title-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="title-box">
						<div class="section-color-layer"></div>
						<div class="title"></div>
						<h4>How Our Quality Assignment Writing Services in UK Work ?</h4>
						<h2>Our Procedure</h2>
					</div>
				</div>
			</div>
			<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="icon-layer-three" style="background-image:url(images2/icons/pattern-11.png)"></div>
					<div class="icon-layer-four" style="background-image:url(images2/background/pattern-12.png)"></div>
					<div class="row clearfix">
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									<span style="display: inline-block; width: auto; height: 150px;">
										<img src="images/shopping-list.png" alt="" style="width: 100%; height: 100%;">
									</span>
									<h5><a>Submit Your Order</a></h5>
									<div class="text">Fill in the ‘order now’ form, mention your basic information and specific requirements that you want us to meet.</div>

								</div>
							</div>
						</div>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									<span style="display: inline-block; width: auto; height: 150px;">
										<img src="images/secure-payment.png" alt="" style="width: 100%; height: 100%;">
									</span>
									<h5><a>Make Secure Payment</a></h5>
									<div class="text">Pay an affordable price for the assignment help provided to you via our secure payment gateway that is fully protected from privacy infringements.</div>
								</div>
							</div>
							<div class="news-block-four">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
									<span style="display: inline-block; width: auto; height: 150px;">
										<img src="images/sharing.png" alt="" style="width: 100%; height: 100%;">
									</span>
									<h5><a>Receive Your Paper</a></h5>
									<div class="text">
										Get a high-quality assignment writing services by our expert writers within the given deadline and score better than your expectations.
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<section class="page-title-section">
	<div class="icon-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
	<div class="icon-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
	<div class="icon-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
	<div class="icon-layer-four" style="background-image: url(images/icons/icon-7.png)"></div>
	<div class="icon-layer-five" style="background-image: url(images/icons/icon-7.png)"></div>
	<div class="icon-layer-six" style="background-image: url(images/icons/icon-8.png)"></div>
	<div class="auto-container">
		<div class="content-box pt-5">
			<h2 class="pt-4">Your Safety Comes First</h2>
			<div class="text">We are experts in this industry with over 5 years’ experience. It means that you are going to get the right guidance, by the right people, and at the right price.</div>
		</div>
	</div>
</section>
<section class="faq-blocks-section">
	<div class="auto-container">
		<div class="inner-container">
			<div class="row clearfix">
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
						<div class="icon-box">
							<span class="icon flaticon-unity"></span>
						</div>
						<h5><a href="#">Secure Payments</a></h5>
						<div class="text">Your online transaction on Our Site is secure with the highest levels of transaction security currently.</div>
					</div>
				</div>
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="icon-box">
							<span class="icon flaticon-calendar"></span>
						</div>
						<h5><a href="#">Data Protection</a></h5>
						<div class="text">
							data protection notice sets out the basis on which Revenue will process your personal data in the assignment process.</div>
					</div>
				</div>
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
						<div class="icon-box">
							<span class="icon flaticon-customer"></span>
						</div>
						<h5><a href="#">Guaranteed Originality</a></h5>
						<div class="text">
							We deliver originality notice sets out the basis on which Revenue will process your personal data in the assignment process.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="inner-container mt-2">
			<div class="row clearfix">
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
						<div class="icon-box">
							<span class="icon flaticon-unity"></span>
						</div>
						<h5><a href="#">100% Money Back Guarantee</a></h5>
						<div class="text">
							We provides the money back facility to its customers if the product is not delivered to them in any circumstances.</div>
					</div>
				</div>
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="icon-box">
							<span class="icon flaticon-calendar"></span>
						</div>
						<h5><a href="#">Certified and Experienced Writers</a></h5>
						<div class="text">
							Our experienced, determined and confident writers have written more than 50000+ assignments</div>
					</div>
				</div>
				<div class="faq-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
						<div class="icon-box">
							<span class="icon flaticon-customer"></span>
						</div>
						<h5><a href="#">100% No Plagiarism Guarantee</a></h5>
						<div class="text">
							We ensure projects delivered by us stand out unique and are written from the scratch.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="faq-section">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="column col-lg-6 col-md-12 col-sm-12">
				<div class="title-box">
					<h4>Assignment Help FAQs: Everything You Need to Know</h4>
				</div>
				<ul class="accordion-box">
					<li class="accordion block">
						<div class="acc-btn">1. Is it available for students in the UK only, or can international students also use the service? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="display: none;">
							<div class="content">
								<div class="text">
									<p>Assignment In Need is available to both students in the UK and international students studying in the UK.</p>
								</div>
							</div>
						</div>
					</li>
					<li class="accordion block active-block">
						<div class="acc-btn active">2. Why I have to choose Assignment In Need, and how can it assist me with my assignments? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content current" style="display: block;">
							<div class="content">
								<div class="text">
									<p>Assignment In Need is an academic assistance service that provides personalized assignment help. We can assist you with research, writing, and guidance to help you excel in your studies.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">3. Are you provide original and plagiarism-free content?<div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										Yes, all assignments from Assignment In Need are custom-written, unique, and rigorously checked for plagiarism to ensure originality.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">4. How do I place an order for assignment help?<div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										To place an order, visit our website, fill out the order form with your assignment details, make payment, and we will assign a qualified writer to your task.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">5. Can I choose a specific writer for my assignment, especially if I have worked with them before? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										Yes, you have the option to select a preferred writer based on their profiles and reviews. You can also have a suitable writer assigned to your task.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">6. What subjects and academic levels does Assignment In Need cover? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										Assignment In Need covers a wide range of subjects and academic levels, from high school to university and postgraduate levels. Our expert writers are proficient in various disciplines.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">7. How does Assignment In Need ensure data privacy and confidentiality? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										We have stringent privacy policies in place to safeguard your personal information and ensure confidentiality regarding your assignments.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">8. Can I track the progress of my assignment as it's being completed?<div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										Yes, you can track the progress by communicating with your assigned writer through our secure messaging system.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">9. How can I be sure that my assignment will meet my institution's guidelines for formatting style? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										We accommodate your specific formatting and citation requirements, such as APA, MLA, or Harvard style, to ensure your assignment aligns with your institution's guidelines.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">10. How can I request a revision for my assignment? <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content" style="">
							<div class="content">
								<div class="text">
									<p>
										Requesting a revision is easy. Once you receive your completed assignment from Assignment In Need, review it carefully. If you need any changes or revisions, simply log in to your account, go to the order page, and click the "Request Revision" button. Provide clear instructions regarding the changes you'd like, and our team will promptly address your revision request to ensure your satisfaction. We offer free revisions within a reasonable scope to meet your requirements.
									</p>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</div>
			<div class="column col-lg-6 col-md-12 col-sm-12">
				<div class="title-box">
					<h4>Assignment Writing Help in UK</h4>
				</div>

				<ul class="accordion-box">

					<li class="accordion block">
						<div class="acc-btn">1. Introduction
							<div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">
									<p>
										Student life is considered to be the golden period of a person's life. And why not, it is full of joy and amazing experiences that remain in the memories forever. There are many things that a student needs to overcome for getting his/her higher secondary, graduate, postgraduate, or higher-level degree. Out of which, one important task can be identified as assignment writing. For many students, this term can prove to be a bit annoying yet difficult to perform. A teacher can deliver any kind of task to students. Like, it can be in the form of an essay, lab report, case study, research paper, or some other formats. Usually, they prove to be harder for students reading in colleges or those who approach to higher secondary levels in the schools.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block active-block">
						<div class="acc-btn active">2. Why is there a Need of Help in Assignment Writing London,UK?<div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content current">
							<div class="content">
								<div class="text">
									<p>
										The level of education has been progressed to a new platform where students are benefited by various knowledge and ideas. The reasons for offering online assignment writing to students can be numerous. <br> 1. With the help of it, a student learns to identify some practical information that wasn't known before. <br> 2. It is also helpful to increase the student's level of presentation in front of others. As we said that education's level has increased very much, a student has to make his mind in reading a lot of things and solving various equations. In such cases, it becomes a bit tricky to handle a load of studies together. Just because assignments mostly arrive before some time of exams and a student has to revise a lot of things. Along with that, many students feel pressured to submit their Piece of work on the given deadline. To restrict you from such worries, there is an option to go for the best Assignment Writing Service in London, UK . We are here to solve your problems with the help of online assignment writing. Not every student has got the same mind to absorb academic education. Some students are extraordinary who finds sufficient material and content for their research. While many average students have to struggle to perform this operation. Additionally, academic writing, on a higher level demands a professional tone. At such cases, many students aren't aware of the procedure or style in which the assignment requires to be written.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">3. Assignment Writing Services in the London, UK <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">
									<p>
										If you need any kind of help in assignment writing service, we can deliver you various facilities. There are so many providers of assignment writing services in the London,UK, but not everyone will be there to deliver the perfect result with prescribed instructions. When assignment writing is asked to deliver on a higher level, it becomes a highly technical job. Only those who are experienced candidates and have perfection in this segment will tend to deliver accurate outcomes. We will make attempts to bring satisfied university assignment help in London,UK. Our team will be happy to serve the services where you get properly formatted to achieve good grades. After all, every student wishes to get better marks after making hard efforts. And when you get pleased grades, a positive motivation exists that helps to develop a bright future. Those who need good grades, their focus will always be on providing the Instant assignment to the teachers. With our assistance, you can fulfill this thought as our writers will be there to assist you to present assignment writing Help.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">4. Online Assignment Writing Help in the UK <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">
									<p>
										Our online assignment writing help in London,UK can also benefit the students who want assistance through online measures. There, you will simply have to fill the required details and our writers will approach to assist you in delivering the Instant assignment. This is a modern world and a lot of things are taking place online. In terms of the Best assignment writing Service in the London, UK, you can apply for our online service.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">5. Help in Assignment Writing London,UK <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">
									<p>
										Our assignment writing services in the London,UK can prove to be affordable for you. You will see different kinds of assignments that are gripped to our range. Simply tell us your requirements in the details required by our side. We will ask for some basic things like topic, word count, formatting and other special instructions you want to tell us. Some people may have a question regarding payment method. For that, you can acquire help from Paypal or online banking. We will try to deliver quality assignment help that will reach your expectations and impress the teacher to get good grades. When we will combine for assignment writing, you will be able to get a standard presentation. The younger generation, especially the ones who study in schools or colleges are considered as the future of the country. That's why it becomes important to get stronger and motivated in the field of education. Assignments are not only given to increase your rankings, but they somehow help you for a good cause. With the help of it, you start to understand things that sometimes look to be annoying or non-understandable mentally. But, as we mentioned some reasons by which students don't give time on their assignment writing, we are here to assist them with assignment writing help so they could focus more on their studies. This will benefit them in two different ways. Firstly, their academic session will not be affected. And secondly, they will be able to deliver the assignment for some good grades.
									</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion block">
						<div class="acc-btn">6. Conclusion <div class="icon fa fa-angle-down"></div>
						</div>
						<div class="acc-content">
							<div class="content">
								<div class="text">
									<p>
										If you have any queries regarding the procedure of Assignment Writing Help, you can connect to us. We will try to solve your queries and deliver different kinds of assignment Service. As you would be already aware of different varieties of assignment writing, we will assist you in possible terms with our efforts. So, get ready to impress the teacher with your assignment by taking help from the best assignment writing help in the London,UK and enjoy better grades.</p>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</div>

		</div>
	</div>
</section>

<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script>
	var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
		separateDialCode: true,
		preferredCountries: ["gb"],
		hiddenInput: "full",
		utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
	});
</script>
<script>
	$(document).ready(function() {
		var county_code = $(".iti__selected-dial-code").text();
		$("#country_c").val(county_code);
	});


	$('.iti__selected-flag').on('DOMSubtreeModified', function() {
		var county_code = $(".iti__selected-dial-code").text();
		$("#country_c").val(county_code);
	});
</script>

<script>
	document.getElementById('orderForm').addEventListener('submit', function(event) {
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <script>
  document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
      icon: 'warning',
      title: 'Alert',
      html: 'We have changed the contact number from <strong>+447459420438</strong> to <strong>+44 7826233106</strong>.<br>Kindly contact to <a href="https://wa.me/447826233106" target="_blank"><i class="fab fa-whatsapp whatsapp-icon"></i>+44 7826233106</a> number only.'
    });
  });
</script>
<style>
    .whatsapp-icon {
      color: #25D366; /* WhatsApp green color */
      font-size: 24px;
      margin-right: 5px;
    }
  </style> -->
  
<!-- Modal -->
<div class="modal fade show" id="exitIntent" role="dialog" style="display: block;" aria-modal="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" onclick="return closeExitIntentPopup();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
</div>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Optional: Font Awesome for close icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<style>
    /* Custom CSS for centering the modal */
    .modal-dialog {
      position: absolute;
	  top: 15%;
	  left: 35%;
      transform: translate(-50%, -50%);
    }
	.modal-content {
      background-image: url('assets/media/thumbnail/offer.jpeg');
      background-size: cover;
      background-position: center;
	  height: 490px;
    width: 577px;
      color: #fff; /* Set text color to white for better contrast */
    }

	.modal
	{
		width: 80%;
	}
	
  </style>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script to open the modal on page load -->
<script>
  $(document).ready(function(){
    $('#exitIntent').modal('show');
  });

  function closeExitIntentPopup() {
    $('#exitIntent').modal('hide');
    return false; // Prevent default action
  }
</script>
@endsection