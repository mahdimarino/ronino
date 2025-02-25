@extends('web_layout')
@section('content')

<style>
    .banner {
        background-color: #f8f9fa;
        padding: 20px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .banner h1 {
        font-size: 2.5rem;
        color: #dc3545;
        margin-bottom: 10px;
    }

    .banner h2 {
        font-size: 2rem;
        color: #000;
        margin-bottom: 10px;
    }

    .banner p {
        font-size: 1.5rem;
        color: #6c757d;
    }
</style>




<!-- Banner start -->
<div class="container">
    <div class="row">
        <div class="col-12 banner">
            <h1>Up to 40% Off</h1>
            <h2>MEN SUIT</h2>
            <p>NEW COLLECTION</p>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Sub banner section Start -->
<div class="sub-banner-part pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sub-banner-box">
                    <a href="shop.html">
                        <img class="d-none d-md-block" src="{{asset('images/webimages/sub-banner1.jpg')}}" alt="Xpoge">
                        <img class="d-block d-md-none" src="{{asset('images/webimages/sub-responsive-banner1.jpg')}}"
                            alt="Xpoge">
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sub-banner-box">
                            <a href="shop.html">
                                <img class="d-none d-md-block" src="{{asset('images/webimages/sub-banner2.jpg')}}"
                                    alt="Xpoge">
                                <img class="d-block d-md-none"
                                    src="{{asset('images/webimages/sub-responsive-banner2.jpg')}}" alt="Xpoge">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sub-banner-box">
                            <a href="shop.html">
                                <img class="d-none d-md-block" src="{{asset('images/webimages/sub-banner3.jpg')}}"
                                    alt="Xpoge">
                                <img class="d-block d-md-none"
                                    src="{{asset('images/webimages/sub-responsive-banner3.jpg')}}" alt="Xpoge">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="sub-banner-box">
                            <a href="shop.html">
                                <img class="d-none d-md-block" src="{{asset('images/webimages/sub-banner4.jpg')}}"
                                    alt="Xpoge">
                                <img class="d-block d-md-none"
                                    src="{{asset('images/webimages/sub-responsive-banner4.jpg')}}" alt="Xpoge">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner section End -->

<!-- Site Services Block Start -->
<section id="services-part" class="menu-section services-part position-r pb-100">
    <div class="container">
        <div class="ser-feature-block mb_-30 center-sm">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="services-box mb-30">
                        <div class="services-box-inner">
                            <div class="services-icon services1">
                                <img src="{{asset('images/webimages/ser-icon1.svg')}}" alt="xpoge">
                            </div>
                            <div class="services-detail">
                                <h3 class="ser-title">Free Shipping</h3>
                                <div class="ser-subtitle">Free Shipping on orders over $99</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="services-box mb-30">
                        <div class="services-box-inner">
                            <div class="services-icon services2">
                                <img src="{{asset('images/webimages/ser-icon2.svg')}}" alt="xpoge">
                            </div>
                            <div class="services-detail">
                                <h3 class="ser-title">Special Gift</h3>
                                <div class="ser-subtitle">Perfect gift to your loved ones</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="services-box mb-30">
                        <div class="services-box-inner">
                            <div class="services-icon services3">
                                <img src="{{asset('images/webimages/ser-icon3.svg')}}" alt="xpoge">
                            </div>
                            <div class="services-detail">
                                <h3 class="ser-title">Money Back</h3>
                                <div class="ser-subtitle">Not receiving an item applied to</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Site Services Block End -->








@endsection