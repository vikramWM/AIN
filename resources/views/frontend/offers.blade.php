@extends('frontend-layouts.app')

@section('content')
    <style>
        .inner-column {
            padding-top: 0px !important;
        }

        .banner-section-three .content-column .inner-column h2 {
            padding-top: 100px;
        }

        .text-black {
            color: black;
        }

        .contact-list li a {
            font-size: 14px;
            /* Adjust the font size as needed */
        }

        .card {
            background-color: #fff;
            /* Background color */
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Increased shadow for 3D effect */
            padding: 20px;
            /* Padding for content */
        }

        .card-content {
            /* Add styles for card content if needed */
        }
    </style>
    <section class="banner-section-three">
        <div class="pattern-layer-two" style="background-image: url(images/bubble.png); background-size: contain; background-position: center; background-repeat: no-repeat;"></div>
        <div class="auto-container" style="margin-top: 100px;">
            <!-- Page Breadcrumb -->
            <div style="text-align: center;">
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>My Offers</li>
                </ul>
            </div>
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/Final Rev 1.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/FIVE ORDER ONE FREE.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/forty percent discount.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/recommend and earn money.pextends('frontend-layouts.app')

@section('content')
    <style>
        .inner-column {
            padding-top: 0px !important;
        }

        .banner-section-three .content-column .inner-column h2 {
            padding-top: 100px;
        }

        .text-black {
            color: black;
        }

        .contact-list li a {
            font-size: 14px;
            /* Adjust the font size as needed */
        }

        .card {
            background-color: #fff;
            /* Background color */
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Increased shadow for 3D effect */
            padding: 20px;
            /* Padding for content */
        }

        .card-content {
            /* Add styles for card content if needed */
        }
    </style>
    <section class="banner-section-three">
        <div class="pattern-layer-two" style="background-image: url(images/bubble.png); background-size: contain; background-position: center; background-repeat: no-repeat;"></div>
        <div class="auto-container" style="margin-top: 100px;">
            <!-- Page Breadcrumb -->
            <div style="text-align: center;">
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>My Offers</li>
                </ul>
            </div>
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/Final Rev 1.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/FIVE ORDER ONE FREE.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/forty percent discount.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/recommend and earn money.png" alt="" srcset="" style="height:230px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/refer friend ten percent amount.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            
            

            

        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#existingOrdersBtn').addClass('active');
            $('#existingorders').show();

            $('#newOrdersBtn').click(function() {
                $(this).addClass('active');
                $('#existingOrdersBtn').removeClass('active');
                $('#neworders').show();
                $('#existingorders').hide();
            });

            $('#existingOrdersBtn').click(function() {
                $(this).addClass('active');
                $('#newOrdersBtn').removeClass('active');
                $('#existingorders').show();
                $('#neworders').hide();
            });
        });
    </script>
@endsection
ng" alt="" srcset="" style="height:230px;">
                        
                        
                    </div>
                </div>
            </div>
            <div class="row clearfix mt-5">
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="card mx-auto" style="width: 80%;">
                        <img src="images/refer friend ten percent amount.png" alt="" srcset="" style="height:250px;">
                        
                        
                    </div>
                </div>
            </div>
            
            

            

        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#existingOrdersBtn').addClass('active');
            $('#existingorders').show();

            $('#newOrdersBtn').click(function() {
                $(this).addClass('active');
                $('#existingOrdersBtn').removeClass('active');
                $('#neworders').show();
                $('#existingorders').hide();
            });

            $('#existingOrdersBtn').click(function() {
                $(this).addClass('active');
                $('#newOrdersBtn').removeClass('active');
                $('#existingorders').show();
                $('#neworders').hide();
            });
        });
    </script>
@endsection
