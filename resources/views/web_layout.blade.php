<!DOCTYPE html>
<html lang="zxx">

<head>
    <style>
        body {
            display: block !important;
        }

        @media (min-width: 700px) {
            .onlymobile {
                display: none !important;
            }
        }

        @media (max-width: 700px) {
            .onlypc {
                display: none !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <meta charset="utf-8">
    <title>RONINO</title>
    <link rel="icon" href="images/logo_demangine.png" type="image/gif" sizes="24x24">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="DemandeGine Website" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/website/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/website/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- font icons -->
    <link href="{{ asset('css/website/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('css/website/fonts/elegant_font/HTML_CSS/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/website/fonts/et-line-font/style.css') }}" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link id="colors" href="{{ asset('css/website/css/colors/scheme-07.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/website/css/coloring.css') }}" rel="stylesheet" type="text/css">

    <!-- RS5.0 Stylesheet -->
    <link href="{{ asset('css/website/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/website/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/website/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <style>
        #Fuelyourgrowth {

            background-size: cover;
            background-image: url(images/611.jpg);
            background-size: 56% !important;
            background-repeat: no-repeat !important;
            background-position-x: 103% !important;
            background-position-y: -20% !important;
        }

        #itshouldbefull {
            background-size: 100% !important;
            background-position: center;
        }

        /* Define your CSS styles */
        .thisclass {
            /* Other styles for the class */
            background-size: 70%;
        }

        .smaller a {
            color: white !important;
        }

        /*  .pointed-div {
            position: relative;
            width: 200px;
            height: 100px;
            background-color: #2E28A8;
            margin: 50px auto;
        }
    
        .pointed-div::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 20px solid #2E28A8; 
        } */

        .parent {
            position: relative;
        }

        .child {
            border-top: 68px solid rgb(233, 236, 239);
            border-left: 50vw solid transparent;
            border-right: 50vw solid transparent;
            width: 0;
            height: 0;
            bottom: -65px;
            content: "";
            display: block;
            position: absolute;
            overflow: hidden;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 5;
        }
    </style>
    <style>
        #movingImage {
            position: relative;
            width: 100px;
            /* Adjust the width as needed */
            height: 100px;
            /* Adjust the height as needed */
        }
    </style>

    <script>
        // Your JavaScript code goes here
        window.onload = function () {
            // Get the section ID from the URL
            const sectionIdFromURL = window.location.hash.substring(1);

            // Check if the section ID exists
            const targetSection = document.getElementById(sectionIdFromURL);

            // Scroll to the section using smooth behavior if the section ID exists
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        };

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Extract the section ID from the href
                    const sectionId = this.getAttribute('href').split('#')[1];

                    // Check if the section ID exists
                    const targetSection = document.getElementById(sectionId);
                    if (targetSection) {
                        // Scroll to the section using smooth behavior
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });

                        // If it's a small screen, close the navigation menu
                        if (window.innerWidth <= 768) {
                            // Assuming your navigation menu has an ID of 'navbarNav' (replace it with your actual ID)
                            const navbarNav = document.getElementById('navbarNav');
                            if (navbarNav) {
                                navbarNav.classList.remove('show');
                            }
                        }
                    }
                });
            });
        });
    </script>
</head>

<body class="dark-mode text-light disable-dark">
    <div id="wrapper">


        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="header-row">
                            <div class="header-col left">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="index.php"><img alt="" class="logo" img
                                            src="{{ asset('images/webimages/images/demendgine transparent (1).png') }}">
                                        <img alt="" class="logo-2" img
                                            src="{{ asset('images/webimages/images/logo_demangine.png') }}"></a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="header-col mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li><a style="color:black" href="index.php">Home</a>

                                    </li>
                                    <li><a style="color:black" href="index.php#ourapproach">Our Approach</a>

                                    </li>

                                    <li><a style="color:black" href="index.php#oursolutions">Our Solutions</a></li>


                                    <li class="onlypc"><a style="color:black" href="index.php#ourdata">Our Data</a></li>
                                    <li class="onlymobile"><a style="color:black" href="index.php#ourdata2">Our Data</a>
                                    </li>

                                    <li class="onlypc"><a style="color:black" href="index.php#whydemandgine">Why
                                            DemandGine</a></li>
                                    <li class="onlymobile"><a style="color:black" href="index.php#whydemandgine2">Why
                                            DemandGine</a></li>

                                    <li class="onlymobile"><a style="color:black" href="contact.php">contact</a></li>
                                </ul>
                                <div class="col-right onlypc">
                                    <a class="btn-custom" href="contact.php"> Contact Us</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="widget">
                            <a href="index.php"><img alt="" style="width: 200px;" class="logo" img
                                    src="{{ asset('images/webimages/images/demendgine transparent (1).png') }}"></a>
                            <div class="spacer-20"></div>
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i>&#160;
                                        &nbsp;Info@demandgine.com</a></li>
                                <li><a href="#"><i class="fa fa-phone fa-lg"></i>&#160; &nbsp; (702) 805-0273</a></li>
                                <li class="text-light"><span><i class="fa fa-map-marker fa-lg"></i>&nbsp; &nbsp;
                                        Demandgine Inc.
                                        <br> 6543 South Las Vegas Blvd Suite #200 <br>Las Vegas, NV 89119</li>


                            </ul>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="row">


                            <div class="col-md-6 col-xs-4">
                                <div class="widget">
                                    <h5 class="text-light">Links</h5>
                                    <div class="tiny-border"></div>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="index.php#ourapproach">Our Approach</a></li>
                                        <li><a href="index.php#oursolutions">Our Solutions</a></li>

                                        <li class="onlypc"><a href="index.php#ourdata">Our Data</a></li>
                                        <li class="onlymobile"><a href="index.php#ourdata2">Our Data</a></li>

                                        <li class="onlypc"><a href="index.php#whydemandgine">Why Demandgine</a></li>
                                        <li class="onlymobile"><a href="index.php#whydemandgine2">Why Demandgine</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-4">
                                <div class="widget">
                                    <h5 class="text-light">Legal</h5>
                                    <div class="tiny-border"></div>
                                    <ul>
                                        <li><a
                                                href="https://app.termly.io/document/privacy-policy/72e20918-660e-4f00-9dae-8e6738608a86">Privacy
                                                Policy</a></li>
                                        <li><a href="uae-privacy-policy.php">UAE Privacy Policy</a></li>
                                        <li><a href="donotsellmyinfo.php">Do Not Sell My Personal Information</a></li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="row">
                    <div class="col-lg-9 sm-text-center  mb-sm-30">
                        <div class="mt10">&copy; Copyright 2024 - All Rights Reserved</div>
                    </div>

                    <div class="col-lg-3 ">
                        <div class="social-icons ">
                            <a target="_blank" href="https://www.linkedin.com/company/demandgine-inc/about/"><i
                                    class="fa fa-linkedin fa-lg"></i></a>
                            <!--  <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                       
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->

        <div id="preloader">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


    <!-- Javascript Files
            ================================================== -->
    {{-- <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script> --}}
    <script src="{{ asset('js/website/plugins.js') }}"></script>
    <script src="{{ asset('js/website/designesia.js') }}"></script>
    <!-- <script src="appapp.js"></script>-->



    <!--  <script src="js/validation.js"></script> -->

    <!-- RS5.0 Core JS Files -->
    <!--   <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
                <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script> -->

    <!-- RS5.0 Extensions Files -->
    <!--  <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
                <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script> -->
    <!-- current page only scripts -->

    <script>
        jQuery(document).ready(function() {
                        // revolution slider
                        jQuery("#revolution-slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "fullscreen",
                            delay: 5000,
                            navigation: {
                                arrows: {
                                    enable: true
                                }
                            },
                            parallax: {
                                type: "mouse",
                                origo: "slidercenter",
                                speed: 2000,
                                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                            },
                            spinner: "off",
                            gridwidth: 1140,
                            gridheight: 600,
                            disableProgressBar: "on"
                        });
                    });
                  
    </script>
    <script>
        // Use JavaScript to set the background-size property
                document.addEventListener('DOMContentLoaded', function() {
                    // Select the element with the 'thisclass' class
                    var element = document.querySelector('.thisclass');
        
                    // Check if the element is found
                    if (element) {
                        // Set the background-size property to 50%
                        element.style.backgroundSize = '73%';
                    }
                });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the image element
            var movingImage = document.getElementById('movingImage');
        
            // Set the initial position and direction
            var position = 0;
            var direction = 1; // 1 for down, -1 for up
        
            // Set the interval for the movement (adjust the interval duration as needed)
            var interval = setInterval(function () {
                // Update the position based on the direction
                position += direction *10;
        
                // Set the new position
                movingImage.style.top = position + 'px';
        
                // Change direction when reaching the top or bottom
                if (position <= 0 || position >= window.innerHeight - movingImage.offsetHeight) {
                    direction *= -1;
                }
            }, 10); // Adjust the interval duration (in milliseconds) as needed
        });
    </script>
    <script>
        document.querySelector('#itshouldbefull').style.backgroundSize = '200%';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
                const ctx = document.getElementById('myChart');
        
                const data = {
                    datasets: [{
                        label: 'My First Dataset',
                        data: [43, 36, 47],
                        backgroundColor: ['#2E28A8', '#00d4c8', 'blue'],
                        hoverOffset: 4
                    }]
                };
        
                new Chart(ctx, {
                    type: 'pie',
                    data: data,
                    plugins: [{
                        afterRender: function (chart) {
                            const width = chart.width;
                            const height = chart.height;
                            const ctx = chart.ctx;
        
                            const fontSize = (height / 114).toFixed(2);
                            ctx.font = fontSize + "em sans-serif";
                            ctx.textBaseline = "middle";
                            ctx.fillStyle = 'white'; // Set text color
        
                            const text = "Inside Text";
                            const textX = Math.round((width - ctx.measureText(text).width) / 2);
                            const textY = height / 2;
        
                            ctx.fillText(text, textX, textY);
                        }
                    }]
                });
            });
    </script>

    <script>
        var thistextElement = document.getElementById('thistext');
        
        // Check if the element exists before attempting to modify its style
        if (thistextElement) {
            // Delay the loading of the element by 500 milliseconds
            setTimeout(function () {
                thistextElement.style.display = 'block'; // or 'inline' or any other appropriate display value
            }, 100);
        }
    </script>


    <!--Start of Tawk.to Script-->

    <!--End of Tawk.to Script-->
</body>

</html>