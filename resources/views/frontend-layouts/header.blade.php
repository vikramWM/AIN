<style>
    @media screen and (max-width: 992px) {
        .logo-box {
            width: 100%;
            text-align: center;
            padding: 15px 0;
			
        }
		.main-header.header-style-three .header-lower .logo-box {
			background-color:transparent;
			
		}
        .logo {
            display: inline-block;
        }
    }
	.main-header.header-style-three .header-lower .logo-box {
    	position: relative;
	}
</style>

<header class="main-header header-style-three fixed-header">
    
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
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
											</ul>
										</li>
										<li><a href="samples">Samples</a></li>
										<li><a href="upload-your-assignment">Order Now</a></li>
										<li><a href="blog">Blog</a></li>
											
										
										<li><a href="contact-us">Contact </a></li>
									 </ul>
								</div>
							</nav>
							<!-- Main Menu End-->
							
							
								<!-- Login Box -->
								<!-- <ul class="login-box">
									<li><a href="#" class="login">Login</a></li>
									<li><a href="#" class="register">Sign Up</a></li>
								</ul> -->
								<!-- Outer Box -->
								<div class="outer-box">
									<!-- Search Btn -->
									<!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->
									<!-- Cart Box -->
									<div class="cart-box">
										<div class="dropdown">
											<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-user-1"></span></button>
											<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">

												<ul class="btns-boxed">
												@if(Auth::user())
												<div class="cart-product">
													<div class="inner">
														<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
														<?php if (Auth::user()->photo) { ?>
															<div  class="image"><img style="border-radius: 20px;" src="<?php echo asset(Auth::user()->photo); ?> " alt="" /></div>
														<?php } else {?>
															<div  class="image"><img style="border-radius: 20px;" src="assets/media/avatars/blank.png" alt="" /></div>
														<?php } ?>
														<h3><a href="shop-single.html"><?php echo Auth::user()->name; ?></a></h3>
														<div class="quantity-text"><?php echo Auth::user()->email; ?></div>
														<div class="quantity-text"><?php echo Auth::user()->mobile; ?></div>
														<!-- <div class="price">$99.00</div> -->
													</div>
											
													<ul class="btns-boxed">
														<li><a href="/myProfile">View Profile</a></li>
														<li>
														<a href="{{ route('logout') }}" 
															onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
															>Sign Out</a>
															<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 1013px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <div class="nav-logo" style="height: 50px; text-align: center;"><a href="/"><img src="assets/media/avatars/assignment_logo.png" alt="" title="" class="mCS_img_loaded" width="60px"></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									
								</div>
							</div>
            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
        </div><!-- End Mobile Menu -->
    
    </header>