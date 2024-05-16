<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Assignement In Need -> Assignment Help</title>

    <base href="/public">
    <!-- Include CSS -->
    @include('frontend-layouts.css')

    <!-- Include Scripts -->
    <style>
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            /* Background color for the preloader */
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Center align content vertically and horizontally */
            opacity: 1;
            animation: fadeIn 0s ease-in-out forwards;
            /* Fade-in animation */
        }

        .spinner {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 4px solid #ccc;
            border-top-color: #007bff;
            /* Color of the spinning circle */
            animation: spin 0.8s linear infinite;
            /* Spin animation */
        }

        /* Keyframes for fade-in animation */
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

<body class="hidden-bar-wrapper">
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="page-wrapper">
        @yield('content')
    </div>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </div>

    <!-- Include JavaScript -->
    @include('frontend-layouts.js')
    <script>
        // JavaScript to hide the preloader when the content is loaded
        window.addEventListener('load', function() {
            var preloader = document.getElementById('preloader');
            setTimeout(function() {
                preloader.style.opacity = '0';
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 10); // Adjust the time as needed, should match the animation duration
            }, 10); // Adjust the time as needed, should match the animation duration
        });
    </script>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>