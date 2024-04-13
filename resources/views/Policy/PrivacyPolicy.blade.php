@extends('frontend-layouts.app')

@section('content')
<style>
    /* Custom CSS for increasing the font size of <p> tags */
     h4 {
        color: #20c997; /* You can adjust the font size as needed */
    }
	h3 {
        color: black; /* You can adjust the font size as needed */
    }
	.feature-block-four {
			/* Add other styles here */
			padding: 20px; /* Example padding */
		}

		.inner-box {
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
			padding: 20px; /* Example padding */
			border-radius: 10px; /* Rounded corners */
		}
		.inner-box p {
			font-size: 16px; /* Adjust the font size as needed */
			color: #000000; /* Black color */
		}
</style>
<!--  Banner Section -->


<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
            <ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
                <li>Privacy Policy</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>Your Information Will Be Confidential:</h2>
                        <div class="mt-5">
                            <h5>
                            The purpose of taking the information such as the name, email address, contact number, etc to update you about the assignment and contact you in future for any help or any query. We are objected to keep the student's information confidential be it personal, financial or, any other. We request our user or visitors to read the policies which are mentioned here before he /she accesses the services for Assignment In Need. We know that the students share the information with trust and we respect their trust. The information we get from the clients is safe and is not shared with any third party. <br>

                            We request our customers/users/visitors to read all the policies mentioned here before he/she accesses the services provided by us.(Assignment In Need)
                            </h5>
                        </div>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/news-7.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="images/resource/page-title-4.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!-- End  Banner Section -->

    
	<section class="relationship-section pt-0 pb-0 mt-0 mb-0">
		<div class="auto-container">
			
			<div class="row clearfix">
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									
									
									<h3>We ask the personal information for some purposes which are given below:</h3>
									<p class="text-left">
										1. To aware you about the specials offers. <br>
										2. To aware you about the changes. <br>
										3. To inform you about any additional discount. <br>
										4. To be in contact with you. <br>
										5. To instant response to any of your concerns. <br>
										6. To save the record of students we have served. <br>
										Our company uses high technology and software to secure our client's confidential details. We follow internet ethics and respect personal privacy. We never convey the data to any third party for any benefit.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">

								
									<h3>Security of Personal Information:</h3>
									<p class="text-left">
										We are operating software and high technologies to preserve the confidentiality and security of the personal information provided to us. <br> Our company respects the personal policy and emulate the internet ethics. <br> We are intended to keep all the information confidential and never sell to any third party for any sort of benefit.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									

									<h3>Change in Policy for future perspective:</h3>
									<p class="text-left">
										We keep making the changes in our website, along with that, few alterations might be possible as per the regular intervals. <br> We always look forward to working on making improvements. <br> So, keep visiting the privacy policy to see if new updates come.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
									

									<h3>Regarding the Client's Profile:</h3>
									<p class="text-left">
									    Once you create a user account or profile. Our team accumulates information such as email address, user name, contact number, name, and the password you use. You may need to send the details while placing the order or filing an inquiry form. <br>

                                		In case, you want to opt out from our services, notifications(regarding offers), emails and close the account, then you can ping us at <a href="mailto:order@assignnmentinneed.com">order@assignnmentinneed.com</a> from your registered email. </p>
								</div>
							</div>
							
						
				
				
				
			</div>
		</div>
	</section>
	
@endsection
