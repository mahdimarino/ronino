@extends('web_layout')
@section('content')


<div class="contant">
    <div id="banner-part" class="banner inner-banner">
        <div class="container">
            <div class="bread-crumb-main">
                <h1 class="banner-title">Shop</h1>
                <div class="breadcrumb">
                    <ul class="inline">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li>Shop Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="align-center mb-md-30">
                        <ul id="glasscase" class="gc-start">
                            @foreach($product->images as $image)
                            <li><img src="{{$image->url}}" alt="Xpoge" /></li>
                            @endforeach

                            {{-- <li><img src="{{asset('images/webimages/1.jpg')}}"
                                    data-gc-caption="Your caption text" />
                            </li> --}}



                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="product-detail-main">
                        <div class="product-item-details">
                            <h1 class="product-item-name">{{$product->title}}</h1>
                            <div class="price-box"> <span class="price">{{$product->prix}} AED</span>
                                <del class="price old-price">{{$product->prix*2}} AED</del>
                            </div>
                            <div class="rating-main">
                                <div class="rating-summary-block">
                                    <div title="90%" class="rating-result"> <span style="width:90%"></span> </div>
                                </div>
                                <span>1 Review (s)</span>
                            </div>
                            <div class="product-des">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in oluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <ul class="product-list">
                                <li><i class="fa fa-check"></i> Satisfaction 100% Guaranteed</li>
                                <li><i class="fa fa-check"></i> Free shipping on orders over $99</li>
                                <li><i class="fa fa-check"></i> 14 day easy Return</li>
                            </ul>
                            <hr class="mb-20">
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-listing qty mb-20">
                                            <div class="row">
                                                <div class="col-xl-2 col-md-3 col-sm-12">
                                                    <span>Qty:</span>
                                                </div>
                                                <div class="col-xl-10 col-md-9 col-sm-12">
                                                    <div class="custom-qty">
                                                        <button
                                                            onclick="var result = document.getElementById('qty1'); var qty1 = result.value; if( !isNaN( qty1 ) &amp;&amp; qty1 > 1 ) result.value--;return false;"
                                                            class="reduced items" type="button"> <i
                                                                class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1"
                                                            maxlength="8" id="qty1" name="quantity">
                                                        <button
                                                            onclick="var result = document.getElementById('qty1'); var qty1 = result.value; if( !isNaN( qty1 )) result.value++;return false;"
                                                            class="increase items" type="button"> <i
                                                                class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-listing product-size select-arrow mb-20">
                                            <div class="row">
                                                <div class="col-xl-2 col-md-3 col-sm-12">
                                                    <span>Size:</span>
                                                </div>
                                                <div class="col-xl-10 col-md-9 col-sm-12">
                                                    <select class="selectpicker full" id="select-by-size" name="size">
                                                       <option selected="selected" value="small">Small</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="large">Large</option>
                                                        <option value="extra-large">Extra Large</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="table-listing product-color select-arrow mb-20">
                                            <div class="row">
                                                <div class="col-xl-2 col-md-3 col-12">
                                                    <span>Color:</span>
                                                </div>
                                                <div class="col-xl-10 col-md-9 col-12">
                                                    <select class="selectpicker full" id="select-by-color">
                                                        <option selected="selected" value="#">Blue</option>
                                                        <option value="#">Green</option>
                                                        <option value="#">Orange</option>
                                                        <option value="#">White</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-20">
                                <div class="product-details-btn">
                                    <!-- detail-page-btn  -->
                                    <ul>
                                        <li class="icon cart-icon">
                                            <button type="submit" class="btn btn-color"><span></span>Add to
                                                cart</button>
                                            {{-- <a href="cart.html" class="btn btn-color"><span></span>Add to cart</a>
                                            --}}
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html" class="btn btn-transparent"><span></span></a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#" class="btn btn-transparent"><span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="product-tab-part position-r pb-100">
    <div class="container">
        <div class="product-tab-inner">
            <div class="row">
                <div class="col-12">
                    <div id="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="tab-Description selected" title="Description">Description</a></li>
                            <li><a class="tab-Tags" title="Tags">Product Tags</a></li>
                            <li><a class="tab-Review" title="Review">Review</a></li>
                        </ul>
                    </div>
                    <div id="items">
                        <div class="tab_content">
                            <ul>
                                <li>
                                    <div class="items-Description selected">
                                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                        sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                                        mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi
                                        tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum
                                        tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                                        libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
                                        placerat eleifend leo.
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Tags">
                                        <p>Mauris felis neque, hendrerit id velit a, sollicitudin gravida nunc in velit
                                            lectus, varius quis pretium fermentum, faucibus vel ante etiam justo nulla,
                                            condimentum sit amet urna eget, rutrum auctor massa suspendisse sit amet
                                            odio et dui lobortis iaculis phasellus sagittis interdum neque, fermentum
                                            gravida ante maximus sed nunc lobortis bibendum elementum integer rhoncus et
                                            libero ut suscipit aliquam non ligula id dui consequat viverra a ut sem
                                            pellentesque et sapien eget lorem viverra dignissim.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Review">
                                        <div class="comment-part">
                                            <h3 class="head-three">03 Comments</h3>
                                            <ul class="comment-list mt-30">
                                                <li>
                                                    <div class="comment-user">
                                                        <img src="images/comment-img1.jpg" alt="comment-img">
                                                    </div>
                                                    <div class="comment-detail">
                                                        <span class="commenter"><span>John Doe</span> (05 Jan
                                                            2020)</span>
                                                        <p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that
                                                            sed do eiusmod tempor labore dolore that magna aliqua. Ut
                                                            enim ad minim veniam, exercitation.</p>
                                                        <a href="#" class="reply-btn btn btn-color small">Reply</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <ul class="comment-list child-comment">
                                                        <li>
                                                            <div class="comment-user">
                                                                <img src="images/comment-img2.jpg" alt="comment-img">
                                                            </div>
                                                            <div class="comment-detail">
                                                                <span class="commenter"><span>John Doe</span> (12 Jan
                                                                    2020)</span>
                                                                <p>Lorem ipsum dolor sit amet adipiscing elit labore
                                                                    dolore that sed do eiusmod tempor labore dolore that
                                                                    magna aliqua. Ut enim ad minim veniam, exercitation.
                                                                </p>
                                                                <a href="#"
                                                                    class="reply-btn btn btn-color small">Reply</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-user">
                                                                <img src="images/comment-img3.jpg" alt="comment-img">
                                                            </div>
                                                            <div class="comment-detail">
                                                                <span class="commenter"><span>John Doe</span> (15 Jan
                                                                    2020)</span>
                                                                <p>Lorem ipsum dolor sit amet adipiscing elit labore
                                                                    dolore that sed do eiusmod tempor labore dolore that
                                                                    magna aliqua. Ut enim ad minim veniam, exercitation.
                                                                </p>
                                                                <a href="#"
                                                                    class="reply-btn btn btn-color small">Reply</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="leave-comment-part pt-100">
                                            <h3 class="head-three">Leave A Comment</h3>
                                            <form class="main-form">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-30">
                                                            <input type="text" placeholder="Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-30">
                                                            <input type="text" placeholder="Subject" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-30">
                                                            <input type="text" placeholder="Email" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group mb-30">
                                                            <textarea placeholder="Message" rows="5"
                                                                required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn-color">Post Comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Section Start -->
<section class="product-section pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="heading-part text-center mb-30 mb-sm-20">
                    <h2 class="main_title">Related Product</h2>
                </div>
            </div>
        </div>
        <div class="position-r">
            <div class="row">
                <div class="product-slider owl-carousel position-initial">
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="sale-label"><span>Sale</span></div>
                                <a href="product-page.html">
                                    <img src="images/1.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Men's Full Sleeves Collar Shirt</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$95.50</span>
                                        <del class="price old-price">$100.00</del>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-page.html">
                                    <img src="images/2.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Women's Cape Jacket</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$30.22</span>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="new-label"><span>New</span></div>
                                <a href="product-page.html">
                                    <img src="images/3.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Men's Regular Fit T-Shirt</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$56.00</span>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-page.html">
                                    <img src="images/4.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Women's Cotton Plain T-Shirts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$65.23</span>
                                        <del class="price old-price">$70.00</del>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="product-page.html">
                                    <img src="images/5.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Men's Printed Regular Shirt</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$45.25</span>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <div class="product-image">
                                <div class="sale-label"><span>Sale</span></div>
                                <div class="new-label"><span>New</span></div>
                                <a href="product-page.html">
                                    <img src="images/6.jpg" alt="Xpoge">
                                </a>
                            </div>
                            <div class="product-details-outer">
                                <div class="product-details">
                                    <div class="product-title">
                                        <a href="product-page.html">Polyester Printed T-Shirts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$88.54</span>
                                        <del class="price old-price">$100.00</del>
                                    </div>
                                </div>
                                <div class="product-details-btn">
                                    <ul>
                                        <li class="icon cart-icon">
                                            <a href="cart.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon wishlist-icon">
                                            <a href="wishlist.html">
                                                <span></span>
                                            </a>
                                        </li>
                                        <li class="icon compare-icon">
                                            <a href="#">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Section End -->





@endsection