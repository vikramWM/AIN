<style>
	@media screen and (max-width: 992px) {
		.logo-box {
			width: 100%;
			text-align: center;
			padding: 15px 0;

		}

		.main-header.header-style-three .header-lower .logo-box {
			background-color: transparent;

		}

		.logo {
			display: inline-block;
		}
	}

	.main-header.header-style-three .header-lower .logo-box {
		position: relative;
	}

	.top-bar {
    background-color: #6ca8e7;
    color: #fff;
    padding: 15px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    animation: slideDown 1s ease-out;
}

.top-bar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-bar .contact-info {
    text-align: center;
    flex-grow: 1; /* Expand to fill remaining space */
}

.top-bar .offer-slider {
    position: relative;
    overflow: hidden;
}

.top-bar .offer-slider .offer-text {
    display: none;
    font-size: 1.2rem;
    font-weight: bold;
    margin-left: 30px;
    animation: pulse 2s infinite;
}

.top-bar .offer-slider .offer-text.active {
    display: block;
}

.top-bar .social-icons {
    display: none; /* Hide social icons by default */
}

.top-bar .order-now {
    display: none; /* Hide "Order Now" button by default */
}

@media (min-width: 768px) {
    .top-bar .social-icons {
        display: flex; /* Show social icons on larger screens */
        align-items: center;
        text-align: right;
    }

    .top-bar .order-now {
        display: block; /* Show "Order Now" button on larger screens */
        font-size: 1rem;
        background-color: #fff;
        color: #6ca8e7;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        margin-right: 17px;
    }

    .top-bar .order-now:hover {
        background-color: #6ca8e7;
        color: #fff;
    }

    .top-bar .social-icons a {
        color: #fff;
        margin-left: 10px;
        text-decoration: none;
        transition: color 0.3s;
    }

    .top-bar .social-icons a:hover {
        color: #ddd;
    }

    .top-bar .social-icons i {
        font-size: 24px;
        margin-right: 10px;
    }

    .top-bar .contact-info {
        text-align: left; /* Reset text alignment for larger screens */
    }
	.top-bar .offer-slider .offer-text {
    display: none;
    font-size: 1.2rem;
    font-weight: bold;
    margin-left: 30px;
    animation: pulse 2s infinite;
}
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }

    100% {
        transform: scale(1);
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }

    to {
        transform: translateY(0);
        opacity: 1;
    }
}

</style>

<header class="main-header header-style-three fixed-header">
<div class="top-bar">
    <div class="container clearfix">
       
        <div class="contact-info">
            <div class="offer-slider">
                <span class="offer-text active">
                    GET FLAT 40% DISCOUNT OFF
                </span>
                <span class="offer-text">
                   REFER 4 FRIENDS & GET GROUP PROJECT FREE
                </span>
                <span class="offer-text">
                   PLACE 5 ORDERS AND GET 1 AT FREE OF COST
                </span>
				<span class="offer-text">
                  RECOMMEND PEOPLE & EARN MONEY
                </span>
				<span class="offer-text">
					REFER A FRIEND & GET 10% DISSCOUNT ON HIS FIRST TIME OF ORDERS       
				</span>
            </div>
        </div>
		<div class="mobile-content">
            <h4 class="order-now">Order Now</h4>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa fa-whatsapp"></i></a>
            <a href="#"><i class="fa fa-phone"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const offerTexts = document.querySelectorAll('.offer-slider .offer-text');
		let currentIndex = 0;

		function showOffer(index) {
			offerTexts.forEach(text => text.classList.remove('active'));
			offerTexts[index].classList.add('active');
		}

		function nextOffer() {
			currentIndex = (currentIndex + 1) % offerTexts.length;
			showOffer(currentIndex);
		}

		showOffer(currentIndex);

		setInterval(nextOffer, 5000); 
	});

</script>
	
	<!-- Header Lower -->
	<div class="header-lower">
		<div class="lower-inner">
			<div class="outer-container">
				<div class="inner-container clearfix">
					<div class="pull-left logo-box p-0">
						<div class="logo"><a href="/"><img src="assets/media/avatars/assignment_logo.png" alt="" title="" width="80px"></a></div>
					</div>
					<div class="pull-right nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse"
									data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="/">Home</a>

									<li class="dropdown"><a href="#">Company</a>
										<ul>
											<!-- <li><a href="about">About Us</a></li> -->
											<li><a href="assignment-help-expert-uk">What We Are</a></li>
											<li><a href="why-choose-us">Why Choose Us</a></li>

										</ul>
									</li>
									<li class="current dropdown">
										<a href="#">Services</a>
										<ul>

											<li><a href="assignment-writing-uk">Assignment Writing</a></li>
											<li><a href="dissertation-writing-services-uk">Dissertation Writing</a></li>
											<li><a href="essay-writing-help-uk">Essay Writing</a></li>
											<li><a href="research-paper-writing-uk">Research Paper Writing</a></li>
											<li><a href="homework-writing-help-uk">Homework Writing</a></li>
										</ul>
									</li>
									<li class="current dropdown">
										<a href="#">Country</a>
										<ul>
											<li class="dropdown">
												<a href="#">UK</a>
												<ul>
													<li><a href="uk/birmingham/assignment-help">Birmingham</a></li>
													<li><a href="uk/manchester/assignment-help">Manchester</a></li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#">Australia</a>
												<ul>
													<li><a href="au">Australia</a></li>
													<li><a href="au/sydney/assignment-help">Sydney</a></li>
													<li><a href="au/melbourne/assignment-help">Melbourne</a></li>
												</ul>
											</li>

											<li class="dropdown">
												<a href="#">Spain</a>
												<ul>
													<li><a href="es">Spain</a></li>
													<li><a href="es/barcelona/assignment-help">Barcelona</a></li>
												</ul>
											</li>
											<li><a href="my">Malaysia</a></li>
											<li><a href="ae">UAE</a></li>
											<li><a href="canada">Canada</a></li>
											
										</ul>
									</li>
									<li><a href="samples">Samples</a></li>
									<li><a href="upload-your-assignment">Order Now</a></li>
									<li><a href="blog">Blog</a></li>


									<li><a href="contact-us">Contact </a></li>
								</ul>
							</div>
						</nav>

						<div class="outer-box">
							<div class="cart-box">
								<div class="dropdown">
									<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
											class="flaticon-user-1"></span></button>
									<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu2"
										x-placement="bottom-start"
										style="position: absolute; transform: translate3d(0px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">

										<ul class="btns-boxed">
											@if(Auth::user())
												<div class="cart-product">
													<div class="inner">
														<div class="cross-icon">
															<span class="icon fa fa-remove">

															</span>
														</div>
														<?php if (Auth::user()->photo) { ?>
														<div class="image"><img style="border-radius: 20px;"
																src="<?php echo asset(Auth::user()->photo); ?> " alt="" />
														</div>
														<?php } else {?>
														<div class="image">
															<img style="border-radius: 20px;"src="assets/media/avatars/blank.png" alt="" />
														</div>
														<?php } ?>
														<h3><a href="shop-single.html"><?php echo Auth::user()->name; ?></a>
														</h3>
														<div class="quantity-text"><?php echo Auth::user()->email; ?></div>
														<div class="quantity-text"><?php echo Auth::user()->mobile; ?></div>
														<!-- <div class="price">$99.00</div> -->
													</div>

													<ul class="btns-boxed">
														<li><a href="/myProfile">View Profile</a></li>
														<li>
															<a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
																Out</a>
															<form id="logout-form" action="{{ route('logout') }}"
																method="POST" class="d-none">
																@csrf
															</form>
														</li>

														<li class="mt-2"><a href="/MyOrders">My Orders</a></li>

													</ul>
											@else
														<li><a href="register">SignUp</a></li>
														<li><a href="login">LogIn</a></li>
												</ul>
											@endif

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Header Upper-->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		<div class="menu-backdrop">
			
		</div>
		<div class="close-btn">
			<span class="icon flaticon-multiply"></span>
		</div>

		<nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar">
			<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"
				style="max-height: 1013px;">
				<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
					style="position:relative; top:0; left:0;" dir="ltr">
					<div class="nav-logo" style="height: 50px; text-align: center;">
						<a href="/"><img src="assets/media/avatars/assignment_logo.png" alt="" title="" class="mCS_img_loaded"
								width="60px">
						</a>
					</div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

						<div class="navbar-header">
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

						</div>
					</div>
				</div>
				<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;">
					<div class="mCSB_draggerContainer">
						<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;">
							<div class="mCSB_dragger_bar" style="line-height: 30px;">

							</div>
						</div>
						<div class="mCSB_draggerRail">

						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<!-- End Mobile Menu -->

</header>