<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>El Ronino</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="images/fav-icon.png" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/website/xpoge.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/website/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/website/glass-case.css')}}">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-142494086-2');
    </script>

</head>

<body>
    <!-- Start preloader -->
    <div id="preloader"></div>
    <!-- End preloader -->

    <!-- Search Screen start -->
    <div class="sidebar-search-wrap">
        <div class="sidebar-table-container">
            <div class="sidebar-align-container">
                <div class="search-closer right-side"></div>
                <div class="search-container">

                    <form action="{{ route('tagged') }}" method="GET" id="search-form">
                        @csrf
                        <input type="text" id="s" class="search-input" name="tags" placeholder="Start Searching">
                    </form>
                    <span>Search and Press Enter</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Screen end -->

    <div id="newslater-popup" class="mfp-hide white-popup-block open align-center">
        <div class="nl-popup-main">
            <div class="nl-popup-inner">
                <div class="newsletter-inner">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="mtb-30">
                                <h2 class="main_title">Subscribe Emails</h2>
                                <span class="sub-title mb-30">Sign up & get 10% off</span>
                                <form>
                                    <input type="email" placeholder="Email Here...">
                                    <button class="btn-color big-width btn" title="Subscribe">Subscribe</button>
                                </form>
                                <div class="check-box mt-30">
                                    <span>
                                        <input type="checkbox" class="checkbox" id="different-address"
                                            name="Ship to a different address?">
                                        <label for="different-address">Don`t show this popup again</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <!-- Header start -->
        <header id="header">
            <div class="container position-r">
                <div class="row m-0">
                    <div class="col-lg-3 col-md-4 col-4 p-0">
                        <div class="navbar-header">
                            <a class="navbar-brand page-scroll" href="index.html">
                                <img alt="xpoge" src="{{asset('images/webimages/logo.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-8 p-0 position-initial">
                        <div class="right-side">
                            <button data-target=".navbar-collapse" data-toggle="collapse"
                                class="navbar-toggle d-block d-lg-none d-xl-none" type="button"><i
                                    class="fa fa-bars"></i>
                            </button>
                            <div class="overlay"></div>
                            <div id="menu" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="level">
                                        <a href="{{route('home')}}" class="nav-link">Home</a>
                                    </li>
                                    <li class="level">
                                        <a href="{{route('catalog')}}" class="nav-link">Catalog</a>
                                    </li>
                                    <li class="level dropdown">
                                        <span class="opener plus"></span>
                                        <a href="shop.html" class="nav-link">Women</a>
                                        <div class="megamenu mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2 "> <a href="shop.html"><span>Women
                                                                Cloths</span></a>
                                                        <ul class="sub-menu-level2">
                                                            <li class="level3"><a href="shop.html"><span>■</span>Jeans &
                                                                    Jeggings</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Skirts</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Dresses</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Tops &
                                                                    Shirts</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Winter
                                                                    Wear</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Jeans &
                                                                    Jeggings</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2"> <a href="shop.html"><span>Accessories</span></a>
                                                        <ul class="sub-menu-level2 ">
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Skincare</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Makeup</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Gloves</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Socks</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Lipstick</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Foundation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 d-none d-lg-block">
                                                        <a href="shop.html" class="m-0">
                                                            <img src="{{asset('images/webimages/drop_banner3.jpg')}}"
                                                                alt="Xpoge">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="level dropdown">
                                        <span class="opener plus"></span>
                                        <a href="shop.html" class="nav-link">Men</a>
                                        <div class="megamenu full mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <div class="row sub-menu-level1">
                                                    <div class="col-lg-3 level2 "> <a href="shop.html"><span>Men
                                                                Cloths</span></a>
                                                        <ul class="sub-menu-level2">
                                                            <li class="level3"><a href="shop.html"><span>■</span>Navy
                                                                    Blazer</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Sport
                                                                    Jeans</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Sleeveless Shirt</a>
                                                            </li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Trousers</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 level2"> <a href="shop.html"><span>Men
                                                                Fashion</span></a>
                                                        <ul class="sub-menu-level2 ">
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Purse</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Sport
                                                                    Shoes</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Wallets</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Belt</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 level2"> <a href="shop.html"><span>Women
                                                                Fashion</span></a>
                                                        <ul class="sub-menu-level2 ">
                                                            <li class="level3"><a href="shop.html"><span>■</span>Jeans &
                                                                    Jeggings</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Skirts</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Dresses</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Tops &
                                                                    Shirts</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 level2"> <a
                                                            href="shop.html"><span>Accessories</span></a>
                                                        <ul class="sub-menu-level2 ">
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Sunglasses</a></li>
                                                            <li class="level3"><a href="shop.html"><span>■</span>Pocket
                                                                    Watch</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Gloves</a></li>
                                                            <li class="level3"><a
                                                                    href="shop.html"><span>■</span>Socks</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-30 d-none d-lg-block">
                                                        <div class="sub-menu-img">
                                                            <a href="shop.html">
                                                                <img src="{{asset('images/webimages/drop_banner1.jpg')}}"
                                                                    alt="Xpoge">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-30 d-none d-lg-block">
                                                        <div class="sub-menu-img">
                                                            <a href="shop.html">
                                                                <img src="{{asset('images/webimages/drop_banner2.jpg')}}"
                                                                    alt="Xpoge">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="level">
                                        <a href="shop.html" class="nav-link">Juniors</a>
                                    </li>
                                    <li class="level dropdown">
                                        <span class="opener plus"></span>
                                        <a href="blog-left-col.html">Blog</a>
                                        <div class="megamenu mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2 ">
                                                        <ul class="sub-menu-level2">
                                                            <li class="level3"><a
                                                                    href="blog-left-col.html"><span>■</span>Blog
                                                                    Left-Sidebar</a></li>
                                                            <li class="level3"><a
                                                                    href="blog-right-col.html"><span>■</span>Blog
                                                                    Right-Sidebar</a></li>
                                                            <li class="level3"><a
                                                                    href="blog-detail.html"><span>■</span>Singal
                                                                    Blog</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="level dropdown">
                                        <span class="opener plus"></span>
                                        <a href="#" class="nav-link">Pages</a>
                                        <div class="megamenu mobile-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2 ">
                                                        <ul class="sub-menu-level2">
                                                            <li class="level3"><a
                                                                    href="contact.html"><span>■</span>Contact</a></li>
                                                            <li class="level3"><a
                                                                    href="checkout.html"><span>■</span>Checkout</a></li>
                                                            <li class="level3"><a
                                                                    href="wishlist.html"><span>■</span>Wishlist</a></li>
                                                            <li class="level3"><a href="404.html"><span>■</span>404</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-right-link">
                                <ul>
                                    <li class="search-box">
                                        <a href="#"><span></span></a>
                                    </li>
                                    {{-- <li class="account-icon">
                                        <a href="#"><span></span></a>
                                        <div class="header-link-dropdown account-link-dropdown">
                                            <ul class="link-dropdown-list">
                                                <li> <span class="dropdown-title">Default welcome msg!</span>
                                                    <ul>
                                                        <li><a href="login.html">Sign In</a></li>
                                                        <li><a href="register.html">Create an Account</a></li>
                                                    </ul>
                                                </li>
                                                <li> <span class="dropdown-title">Language :</span>
                                                    <ul>
                                                        <li><a class="active" href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">German</a></li>
                                                    </ul>
                                                </li>
                                                <li> <span class="dropdown-title">Currency :</span>
                                                    <ul>
                                                        <li><a class="active" href="#">USD</a></li>
                                                        <li><a href="#">AUD</a></li>
                                                        <li><a href="#">EUR</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                    <li class="cart-icon">
                                        <a href="{{ route('cart.index') }}">
                                            <span>
                                                <small id="cart-count" class="cart-notification">{{ $cartCount
                                                    }}</small>
                                            </span>
                                        </a>
                                        {{-- <div class="cart-dropdown header-link-dropdown">
                                            <ul class="cart-list link-dropdown-list">
                                                <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                    <figure> <a href="product-page.html" class="pull-left"> <img
                                                                alt="Xpoge"
                                                                src="{{asset('images/webimages/1.jpg')}}"></a>
                                                        <figcaption> <span><a href="product-page.html">Men's Full
                                                                    Sleeves Collar Shirt</a></span>
                                                            <p class="cart-price">$14.99</p>
                                                            <div class="product-qty">
                                                                <label>Qty:</label>
                                                                <div class="custom-qty">
                                                                    <input type="text" name="qty" maxlength="8"
                                                                        value="1" title="Qty" class="input-text qty">
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                                                    <figure> <a href="product-page.html" class="pull-left"> <img
                                                                alt="Xpoge"
                                                                src="{{asset('images/webimages/2.jpg')}}"></a>
                                                        <figcaption> <span><a href="product-page.html">Women's Cape
                                                                    Jacket</a></span>
                                                            <p class="cart-price">$14.99</p>
                                                            <div class="product-qty">
                                                                <label>Qty:</label>
                                                                <div class="custom-qty">
                                                                    <input type="text" name="qty" maxlength="8"
                                                                        value="1" title="Qty" class="input-text qty">
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                            </ul>
                                            <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span>
                                                <span class="pull-right"><strong
                                                        class="price-box">$29.98</strong></span>
                                            </p>
                                            <div class="clearfix"></div>
                                            <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a
                                                    href="checkout.html" class="btn-color btn right-side">Checkout</a>
                                            </div>
                                        </div> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header end -->
        @yield('content')
        <section class="newsletter-section align-center ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-12">
                        <div class="newsletter-title">
                            <h2 class="main_title">Sign up for Newsletter </h2>
                            <p>Wants to get latest updates! sign up for Free </p>
                        </div>
                        <div class="newsletter-input">
                            <form>
                                <div class="form-group m-0">
                                    <input type="email" placeholder="Your email address" required="">
                                </div>
                                <button type="submit" class="btn btn-color"><span
                                        class="d-none d-sm-block">Subscribe</span> <i
                                        class="fa fa-send d-block d-sm-none"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newslatter section end -->

        <!-- Footer section start -->
        <footer class="footer-part">
            <div class="container">
                <div class="footer-top ptb-100">
                    <div class="mb_-30">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="footer-about mb-sm-30">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="{{asset('images/webimages/logo.png')}}">
                                        </a>
                                    </div>
                                    <p class="footer-p">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed
                                        fringilla mauris sit amet nibh mauris sit amet nibh. Donec sodales sagittis</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="head-three">Information</h3>
                                    <ul class="footer-menu footer-block-contant">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="javascript:void(0)">Brands</a></li>
                                        <li><a href="blog-left-col.html">Blog</a></li>
                                        <li><a href="javascript:void(0)">Returns</a></li>
                                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="head-three">My Account</h3>
                                    <ul class="footer-menu footer-block-contant">
                                        <li><a href="javascript:void(0)">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="javascript:void(0)">Newsletter</a></li>
                                        <li><a href="javascript:void(0)">Specials</a></li>
                                        <li><a href="javascript:void(0)">Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="footer-static-block">
                                    <span class="opener plus"></span>
                                    <h3 class="head-three">Contact us</h3>
                                    <div class="contact-box footer-block-contant">
                                        <ul>
                                            <li>
                                                <div class="contact-thumb">
                                                    <img src="{{asset('images/webimages/address-icon.svg')}}">
                                                </div>
                                                <div class="contact-box-detail">
                                                    <p>869 Lexington Ave, New York, NY 10065, USA</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-thumb">
                                                    <img src="{{asset('images/webimages/phone-icon.svg')}}" alt="xpoge">
                                                </div>
                                                <div class="contact-box-detail">
                                                    <p>+91 123 456 789 0</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-thumb">
                                                    <img src="{{asset('images/webimages/mail-icon.svg')}}" alt="xpoge">
                                                </div>
                                                <div class="contact-box-detail">
                                                    <p>xpoge@hi123.com</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom align-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100">
                                <p class="mb-0">© Xpoge all Rights Reserverd theme by <a
                                        href="https://TemplatesCoder.com/" target="_blank"
                                        title="TemplatesCoder">TemplatesCoder</a></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="social-media">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section end -->
    </div>
    <script src="{{asset('js/website/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/website/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/website/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/website/modernizr.js')}}"></script>
    <script src="{{asset('js/website/jquery.magnific-popup.min.js')}}"></script>

    <script>
        $(document).ready( function () {
	            //If your <ul> has the id "glasscase"
	            $('#glasscase').glassCase({ 
	            	'thumbsPosition': 'bottom', 
	            	'widthDisplayPerc' : 100,
	            	isDownloadEnabled: false,
	            });
	        });
    </script>

    <script src="{{asset('js/website/custom.js')}}"></script>
    {{-- <script>
        /* ------------ Newslater-popup JS Start ------------- */
        				$(window).on('load', function(){
        					setTimeout(function(){
        					    jQuery.magnificPopup.open({
        					    items: {src: '#newslater-popup'},type: 'inline'}, 0);
        					},4000)
        				});
        		    /* ------------ Newslater-popup JS End ------------- */
    </script> --}}
    {{-- <script>
        $(".search-menu .search-btn").on("click", function(){
        if ( $(window).width() > 768 ){ $(".sidebar-search-wrap").addClass("open"); } }); 
        $(".search-closer").on("click",
            function(){ if ( $(window).width() < 768 ){ $(".sidebar-search-wrap").removeClass("open"); } });
    </script> --}}
    <script>
        $('li.search-box').on('click', function(){
        $('.sidebar-search-wrap').addClass('open').siblings().removeClass('open');
        return false;
        });
        
        /*Search-box-close-button*/
        
        $('.search-closer').on('click', function() {
        var sidebar = $('.sidebar-navigation');
        var nav_icon = $('.navbar-toggle i');
        if(sidebar.hasClass('open')){
        //sidebar.removeClass('open');
        }else{
        sidebar.addClass('open');
        nav_icon.addClass('fa-search-close');
        nav_icon.removeClass('fa-search-bars');
        }
        
        $('.sidebar-search-wrap').removeClass('open');
        return false;
        });
    </script>
</body>

</html>