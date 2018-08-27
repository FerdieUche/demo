@extends('layouts.app')

@section('content')
    <div ng-controller="loginController">
        <div ng-if="!isAuth()">
            <!-- Header Area End Here -->
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('asset/img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home</a> -</li>
                            <li>Courses Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- About 1 Area Start Here -->
            <div class="about1-area">
                <div class="container">
                    <h2><b>Explore The Marketplace</b></h2>
                    <h4>Get inspired to build your business</h4>

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Graphic &amp; Design</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Digital Marketing</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Writing &amp; Translation</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Videos &amp; Animation</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                    </div>
                    <br/> <br/>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-microphone" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Music &amp; Audio</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-code" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Programming &amp; Tech</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Business</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="service-box3">
                                <div class="service-box-icon">
                                    <a href="#"><i class="fa fa-group" aria-hidden="true"></i></a>
                                </div>
                                <h3><a href="#">Fun &amp; Lifestyle</a></h3>
                                <p>Eimply dummy text of the printing inavailable industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- About 1 Area End Here -->
        <!-- Courses 1 Area Start Here -->
            <div class="publications-area">
                <div class="container">
                    <div class="row">
                        <h2 style="text-align: center"><bold>Take The First Step</bold></h2>
                        <h4 style="text-align: center">Whatever your goal, here a few places to get started</h4>
                    </div>
                </div>
                <div class="container">
                    <div class="rc-carousel"
                         data-loop="true"
                         data-items="4"
                         data-margin="30"
                         data-autoplay="true"
                         data-autoplay-timeout="10000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="true"
                         data-nav-speed="false"
                         data-r-x-small="1"
                         data-r-x-small-nav="true"
                         data-r-x-small-dots="false"
                         data-r-x-medium="2"
                         data-r-x-medium-nav="true"
                         data-r-x-medium-dots="false"
                         data-r-small="3"
                         data-r-small-nav="true"
                         data-r-small-dots="false"
                         data-r-medium="4"
                         data-r-medium-nav="true"
                         data-r-medium-dots="false"
                         data-r-large="4"
                         data-r-large-nav="true"
                         data-r-large-dots="false">
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Robert - Philosophy</a></h3>
                                    <span class="item-price">$350</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/2.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <span class="item-price">$250</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/3.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                    <span class="item-price">$430</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/4.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                    <span class="item-price">$190</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                    <span class="item-price">$430</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/product/3.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                    <span class="item-price">$190</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Courses 1 Area End Here -->
        <!-- Video Area Start Here -->
            <div class="video-area overlay-video bg-common-style" style="background-image: url('asset/img/banner/1.jpg');">
                <div class="container">
                    <div class="video-content">
                        <h2 class="video-title">Watch Campus Life Video Tour</h2>
                        <p class="video-sub-title">Vmply dummy text of the printing and typesetting industryorem <br>Ipsum industry's standard dum an unknowramble.</p>
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        <!-- Video Area End Here -->
        <!-- Lecturers Area Start Here -->
            <div class="lecturers-area">
                <div class="container">
                    <h2 class="title-default-left">Our Skilled Lecturers</h2>
                </div>
                <div class="container">
                    <div class="rc-carousel"
                         data-loop="true"
                         data-items="4"
                         data-margin="30"
                         data-autoplay="false"
                         data-autoplay-timeout="10000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="true"
                         data-nav-speed="false"
                         data-r-x-small="1"
                         data-r-x-small-nav="true"
                         data-r-x-small-dots="false"
                         data-r-x-medium="2"
                         data-r-x-medium-nav="true"
                         data-r-x-medium-dots="false"
                         data-r-small="3"
                         data-r-small-nav="true"
                         data-r-small-dots="false"
                         data-r-medium="4"
                         data-r-medium-nav="true"
                         data-r-medium-dots="false"
                         data-r-large="4"
                         data-r-large-nav="true"
                         data-r-large-dots="false">
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/1.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/2.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/3.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Daziy Millar</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/4.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Kazi Fahim</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/1.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Rosy Janner</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="lecturers1-item-wrapper">
                                <div class="lecturers-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="asset/img/team/2.jpg" alt="team"></a>
                                </div>
                                <div class="lecturers-content-wrapper">
                                    <h3 class="item-title"><a href="#">Mike Hussy</a></h3>
                                    <span class="item-designation">Senior Finance Lecturer</span>
                                    <ul class="lecturers-social">
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Lecturers Area End Here -->

        <!-- Students Join 1 Area Start Here -->
            <div class="students-join1-area">
                <div class="container">
                    <div class="students-join1-wrapper">
                        <div class="students-join1-left">
                            <img src="asset/img/students/all.jpg" class="img-responsive" alt="All Students">
                        </div>
                        <div class="students-join1-right">
                            <h2>Join<span> 29,12,093</span> Students.</h2>
                            <a href="#" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Students Join 1 Area End Here -->
        <!-- Brand Area Start Here -->
            <div class="brand-area">
                <div class="container">
                    <div class="rc-carousel"
                         data-loop="true"
                         data-items="4"
                         data-margin="30"
                         data-autoplay="true"
                         data-autoplay-timeout="5000"
                         data-smart-speed="2000"
                         data-dots="false"
                         data-nav="false"
                         data-nav-speed="false"
                         data-r-x-small="2"
                         data-r-x-small-nav="false"
                         data-r-x-small-dots="false"
                         data-r-x-medium="3"
                         data-r-x-medium-nav="false"
                         data-r-x-medium-dots="false"
                         data-r-small="4"
                         data-r-small-nav="false"
                         data-r-small-dots="false"
                         data-r-medium="4"
                         data-r-medium-nav="false"
                         data-r-medium-dots="false"
                         data-r-large="4"
                         data-r-large-nav="false"
                         data-r-large-dots="false">
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/1.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/2.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/3.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/4.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/1.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/2.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/3.jpg" alt="brand"></a>
                        </div>
                        <div class="brand-area-box">
                            <a href="#"><img src="asset/img/brand/4.jpg" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Brand Area End Here -->
        </div>
    </div>

    <div ng-controller="loginController">
        <div ng-if="isAuth()" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="slider1-area overlay-default index1" style="margin-top: 0;">
                                    <div class="bend niceties preview-1">
                                        <div id="ensign-nivoslider-3" class="slides">
                                            <img src="asset/img/banner/banner1.png" alt="slider" title="#slider-direction-1"/>
                                            <img src="asset/img/banner/banner6.png" alt="slider" title="#slider-direction-2"/>
                                            <img src="asset/img/banner/banner7.png" alt="slider" title="#slider-direction-3"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <h3><bold>Featured Gigs</bold></h3>
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active shop-page1-xs-width" id="grid-view">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="asset/img/product/1.jpg" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#">Robert - Philosophy</a></h3>
                                                <span>$140.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Listed product show -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                        <div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h5><bold>Hi,  [[name]]</bold></h5>
                                    <h5>Get offers from sellers for your project</h5>
                                    <div class="sidebar-find-course">
                                        <form id="checkout-form">
                                            <div class="form-group">
                                                <button class="sidebar-search-btn default"><a href="#" style="color: #ffffff; font-weight:100">Post a request</a></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Popular Tags</h3>
                                    <ul class="product-tags" style="color: white">
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">Ebook Cover</a></li>
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">3d Logo</a></li>
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">Vintage Logo</a></li>
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">Proofread</a></li>
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">Data Entry</a></li>
                                        <li style="font-size: 0.8em; font-weight: 100"><a href="#">Explainer video</a></li>
                                        <hr/>
                                        <h3 class="sidebar-title"><a href="#">Start Selling</a></h3>
                                        <h5>Sell your services to millions of people all over the world.</h5>
                                        <h5 style="color: blue"><a href="/start_selling">Start now</a></h5>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                                    <!-- Main Body Area End Here -->

