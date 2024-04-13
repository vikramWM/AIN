<html lang="en">
	<head><base href="">
		<title>AIN-> CRM PORTAL</title>
		@include('layouts.css')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            #preloader {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: #fff; /* Background color for the preloader */
                z-index: 9999;
                display: flex;
                justify-content: center;
                align-items: center; /* Center align content vertically and horizontally */
                opacity: 1;
                animation: fadeIn 0s ease-in-out forwards; /* Fade-in animation */
            }
            .spinner {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 4px solid #ccc;
                border-top-color: #007bff; /* Color of the spinning circle */
                animation: spin 0.8s linear infinite; /* Spin animation */
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            /* Keyframes for spinning animation */
            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
        </style>

	</head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
                @include('layouts.aside')
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        @include('layouts.header')
                        @include('layouts.flash')


                        @yield('content')

                        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        @include('layouts.footer')
                        </div>
                    </div>
            </div>
        </div>
        @include('layouts.js')
        @include('layouts.themebuttons')
</body>
</html>
