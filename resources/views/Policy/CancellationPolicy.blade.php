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
	.banner-section-three .content-column .inner-column {
		padding-top: 0px;
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
					<li>Cancellation Policy</li>
				</ul>
            </div>
			
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<section class="relationship-section pt-0 pb-0 mt-0 mb-0">
							<div class="auto-container">
								
								<div class="row clearfix">
												
												<!-- Feature Block Four -->
												<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
													<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
														
														
														<h3>Our Cancellation Policy</h3>
														<p class="text-left">
															<strong>Assignment In Need provides an option of cancellation of any of the orders as now and then students have to drop the idea of taking the help of external sources due to some reasons. We do cancel the order by following conditions given below:</strong> <br>

															1.If a student places the order twice and wants to cancel one. <br>
															2.If the requirements of the assignment have been changed by his/ her tutor. <br>
															3.In case if we are not able to complete the project due to the absence of the experts.<br>
															4.In case, we cannot complete the work until the given period. <br>
															5.If the customer breaches any terms and conditions mentioned. <br>
															<strong>Kindly note:</strong>The order can be canceled only within 2 days after confirming the order. If you raise the request later then we will not be able to cancel the order. If the deadline is short(until 4 days), the cancellation policy is not applicable.
															</p>
														
													</div>
												</div>
												
												
												
											
									
									
									
								</div>
							</div>
						</section>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/page-title-3.jpg" alt="" />
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


@endsection
