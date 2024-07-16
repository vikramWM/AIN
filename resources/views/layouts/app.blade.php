<html lang="en">
	<head><base href="">
		<title>AIN-> CRM PORTAL</title>
		@include('layouts.css')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <style>
            #preloader2 {
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
            .spinner2 {
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
        </style> -->
        <style>
            .preloader {
                width: 100%;
                height: 100%;
                top: 0;
                position: fixed;
                z-index: 99999;
                background: #fff
            }

            .preloader .cssload-speeding-wheel {
                position: absolute;
                top: calc(50% - 3.5px);
                left: calc(50% - 3.5px)
            }

            .loader,
            .loader__figure {
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -moz-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                -o-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%)
            }

            .loader {
                overflow: visible;
                padding-top: 2em;
                height: 0;
                width: 2em
            }

            .loader__figure {
                height: 0;
                width: 0;
                box-sizing: border-box;
                border: 0 solid #1976d2;
                border-radius: 50%;
                -webkit-animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1);
                -moz-animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1);
                animation: loader-figure 1.15s infinite cubic-bezier(.215, .61, .355, 1)
            }

            .loader__label {
                float: left;
                margin-left: 50%;
                -webkit-transform: translateX(-50%);
                -moz-transform: translateX(-50%);
                -ms-transform: translateX(-50%);
                -o-transform: translateX(-50%);
                transform: translateX(-50%);
                margin: .5em 0 0 50%;
                font-size: .875em;
                letter-spacing: .1em;
                line-height: 1.5em;
                color: #1976d2;
                white-space: nowrap;
                -webkit-animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1);
                -moz-animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1);
                animation: loader-label 1.15s infinite cubic-bezier(.215, .61, .355, 1)
            }

            @-webkit-keyframes loader-figure {
                0% {
                    height: 0;
                    width: 0;
                    background-color: #1976d2
                }

                29% {
                    background-color: #1976d2
                }

                30% {
                    height: 2em;
                    width: 2em;
                    background-color: transparent;
                    border-width: 1em;
                    opacity: 1
                }

                100% {
                    height: 2em;
                    width: 2em;
                    border-width: 0;
                    opacity: 0;
                    background-color: transparent
                }
            }

            @-moz-keyframes loader-figure {
                0% {
                    height: 0;
                    width: 0;
                    background-color: #1976d2
                }

                29% {
                    background-color: #1976d2
                }

                30% {
                    height: 2em;
                    width: 2em;
                    background-color: transparent;
                    border-width: 1em;
                    opacity: 1
                }

                100% {
                    height: 2em;
                    width: 2em;
                    border-width: 0;
                    opacity: 0;
                    background-color: transparent
                }
            }

            @keyframes loader-figure {
                0% {
                    height: 0;
                    width: 0;
                    background-color: #1976d2
                }

                29% {
                    background-color: #1976d2
                }

                30% {
                    height: 2em;
                    width: 2em;
                    background-color: transparent;
                    border-width: 1em;
                    opacity: 1
                }

                100% {
                    height: 2em;
                    width: 2em;
                    border-width: 0;
                    opacity: 0;
                    background-color: transparent
                }
            }

            @-webkit-keyframes loader-label {
                0% {
                    opacity: .25
                }

                30% {
                    opacity: 1
                }

                100% {
                    opacity: .25
                }
            }

            @-moz-keyframes loader-label {
                0% {
                    opacity: .25
                }

                30% {
                    opacity: 1
                }

                100% {
                    opacity: .25
                }
            }

            @keyframes loader-label {
                0% {
                    opacity: .25
                }

                30% {
                    opacity: 1
                }

                100% {
                    opacity: .25
                }
            }
        </style>

	</head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="preloader" id="preloader2">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Assignemtn In Need</p>
                <p class="loader__label">Loading depends on your internet speed. Please wait...</p>
            </div>
        </div>
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
        <script>
            // Hide the preloader once the page is fully loaded
            window.addEventListener('load', function() {
                document.getElementById('preloader2').style.display = 'none';
            });
        </script>
</body>
</html>
