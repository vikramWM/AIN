<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MNFMB3YJRR"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-MNFMB3YJRR');
    </script>
    <meta charset="utf-8">
    <title>{{$data['title']}}</title>
	<meta name="description" content="{{$data['description']}}" />
    <meta name="keywords" content="{{$data['keyword']}}" />

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    
    <base href="/public">
    <!-- Include CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    @include('frontend-layouts.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    // Trigger modal display when the page loads
    $(document).ready(function() {
        $('#exampleModalCenter').modal('show');
    });
    </script>
    <!-- Include Scripts -->
    <style>
        @media screen and (max-width: 768px) {
            .whatsapp_float {
                position: fixed;
                text-align: right;
                bottom: 60px;
                z-index: 25;
            }
            .whatsapp_float_btn {
                max-width: 35%; /* Adjust width for smaller screens */
            }
        }
        @media screen and (min-width: 768px) {
            .whatsapp_float {
                position: fixed;
                text-align: right;
                bottom: 60px;
                z-index: 25;
            }
            .whatsapp_float_btn {
                max-width: 10%; /* Adjust width for smaller screens */
            }
        }

       
    </style>
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

    <style>
        .notSatisfy {
            position: fixed;
            right: -120px;
            top: 260px;
            z-index: 100;
            background: var(--blue);
            padding: 7px 7px 3px;
            border-radius: 6px 0 0 6px;
            box-shadow: 0 0 10px rgba(0,0,0,.29);
            cursor: pointer;
            transition: ease all 1s;
        }

        .notSatisfy:hover {
            right: 0;
        }

        .notSatisfy a {
            display: flex;
            align-items: baseline;
            text-decoration: none;
            color: #fff;
        }

        
        .notSatisfy .icon {
            display: inline-block;
            text-align: center;
            height: 32px;
            width: 32px;
            color: #fff;
        }

        .notSatisfy .offer {
            display: inline-block;
            margin-left: 10px;
            font-size: 18px;
            border-left: solid 2px #fff;
            padding: 5px 0 5px 10px;
        }

        @media (max-width: 991px) {
            .notSatisfy {
                top: 319px;
            }
        }
    </style>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <div id="preloader">
            <div class="spinner"></div>
        </div>   
        @include('frontend-layouts.header')
        @yield('content')
        @include('frontend-layouts.footer')
    </div>
     <!-- Not Satisfied Button -->
     <div class="notSatisfy" rel="nofollow" title="">
        <a href="/Offers" target="_blank">
            <span class="icon fa fa-hand-o-right"></span>
            <span class="offer">New Offers</span>
        </a>
    </div>
    <!-- Scroll to Top Button -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </div>
    <div class="whatsapp_float">
        <a href="https://wa.me/+447826233106" target="_blank"><img src="images/WhatsApp.png" alt="WhatsApp" class="whatsapp_float_btn"/></a>
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
                }, 1); // Adjust the time as needed, should match the animation duration
            }, 1); // Adjust the time as needed, should match the animation duration
        });
    </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('orderForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var recaptchaResponse = grecaptcha.getResponse();
            if (!recaptchaResponse) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please complete the reCAPTCHA.',
                });
                return false;
            }

            // If reCAPTCHA is completed, allow form submission
            this.submit();
        });
    </script>
    <script>
        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();
            
            var maxDate = year + '-' + month + '-' + day;
            // alert(maxDate);
            $('#DeliveryDate').attr('min', maxDate);
        });
    </script>
</body>
</html>
