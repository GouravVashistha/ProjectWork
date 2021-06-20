<?php
include 'conn.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Circle shop - eCommerce HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap Min Css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Material Design Font Css -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">


    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- ========================
    Offcanvas Menu Area Start 
    ===========================-->
    <div class="offcanvas_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="#"><i class="zmdi zmdi-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="#"><i class="zmdi zmdi-close"></i></a>
                        </div>
                        <div class="welcome_text text-center mb-10">
                            <p><span>Customer Service: </span> (800) 123 456 789</p>
                        </div>
                        <div class="box-right text-center mb-20">
                            <ul>
                                <li class="settings">
                                    <a href="#" class="drop-toggle">
                                        <span>USD $</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a href="#" class="drop-toggle">
                                        <img src="assets/images/cuntry/1.jpg" alt="">
                                        English
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/images/cuntry/1.jpg" alt=""> English</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/cuntry/2.jpg" alt=""> Francies</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a href="compare.html">Compare (2)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget-body">
                            <div class="widget-address text-center mb-20">
                                <p><strong>ADDRESS</strong></p>
                                <p>123 Main Street, Anytown <br> CA 12345 USA.</p>
                                    <p>(800) 123 456 - (800) 123 456.</p>
                            </div>
                        </div>
                        <div class="offcanvas-search-container mb-40">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- Offcanvas Menu Start -->
                        <div class="offcanvas_menu_cover text-left">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="shopping-cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">Product details</a></li>
                                                <li><a href="product-details-external.html">Product external</a></li>
                                                <li><a href="product-details-grouped.html">Product grouped</a></li>
                                                <li><a href="product-details-variable.html">Product variable</a></li>
                                                <li><a href="product-details-bottomtab.html">Tab style - 1</a></li>
                                                <li><a href="product-details-lefttab.html">Tab style - 2</a></li>
                                                <li><a href="product-details-righttab.html">Tab style - 3</a></li>
                                                <li><a href="product-details-stickyleft.html">Product sticky left</a></li>
                                                <li><a href="product-details-stickyright.html">Product sticky right</a></li>
                                                <li><a href="product-details-galleryleft.html">Product leftside Gallery</a></li>
                                                <li><a href="product-details-galleryright.html">Product rightside Gallery</a></li>
                                                <li><a href="product-details-sliderbox.html">Product Sliderbox</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-grid-fullwidth.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog List</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-list-fullwidth.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog Single Post</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Right Sidebar</a></li>
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-fullwidth.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Standard Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-details.html">Product</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="faq.html">Frequently Question</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Offcanvas Menu End -->
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <div class="footer_social">
                                <ul class="d-flex">
                                    <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                    <li><a class="google" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================
    Offcanvas Menu Area End 
    ===========================-->

    <!-- =================
    Header Area Start 
    =====================-->
    <div class="header-area header-three">
        <!-- Header Top Start -->
        <div class="header-top full-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="header-top-left">
                            <p><span>Customer Service: </span> (800) 123 456 789</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="box-right">
                            <ul>
                                <li class="settings">
                                    <a href="#">Compare (2)</a>
                                </li>
                                <li class="settings">
                                    <a href="#" class="drop-toggle">
                                        <span>USD $</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a href="#" class="drop-toggle">
                                        <img src="assets/images/cuntry/1.jpg" alt="">
                                        English
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        <li>
                                            <a href="#"><img src="assets/images/cuntry/1.jpg" alt=""> English</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/cuntry/2.jpg" alt=""> Francis</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a href="#" class="drop-toggle">
                                        My Account
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="box-dropdown drop-dropdown">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Sign In</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <!-- Header Middle Start -->
        <div class="header-middle space-40 sticker">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-6">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/pos-circle-logo.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6">
                        <div class="header-middle-inner">
                            <!-- Main Menu Start -->
                            <div class="header-menu float-left add-sticky">
                                <div class="sticky-container">
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/images/logo/pos-circle-logo.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li>
                                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown dropdown-width">
                                                    <li><a href="index.html">Home Version 1</a></li>
                                                    <li><a href="index-2.html">Home Version 2</a></li>
                                                    <li><a href="index-3.html">Home Version 3</a></li>
                                                    <li><a href="index-4.html">Home Version 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                                <div class="mega-menu dropdown">
                                                    <ul class="mega-menu-inner d-flex">
                                                        <li>
                                                            <a href="">Shop Layouts</a>
                                                            <ul>
                                                                <li><a href="shop.html">Shop</a></li>
                                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                                <li><a href="shop-list.html">List View</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="">Other Pages</a>
                                                            <ul>
                                                                <li><a href="shopping-cart.html">Cart</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="my-account.html">My Account</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                                <li><a href="404.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="">Product Types</a>
                                                            <ul>
                                                                <li><a href="product-details.html">Product details</a></li>
                                                                <li><a href="product-details-external.html">Product external</a></li>
                                                                <li><a href="product-details-grouped.html">Product grouped</a></li>
                                                                <li><a href="product-details-variable.html">Product variable</a></li>
                                                                <li><a href="product-details-bottomtab.html">Tab style - 1</a></li>
                                                                <li><a href="product-details-lefttab.html">Tab style - 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="">Other Product Types</a>
                                                            <ul>
                                                                <li><a href="product-details-righttab.html">Tab style - 3</a></li>
                                                                <li><a href="product-details-stickyleft.html">Product sticky left</a></li>
                                                                <li><a href="product-details-stickyright.html">Product sticky right</a></li>
                                                                <li><a href="product-details-galleryleft.html">Product leftside Gallery</a></li>
                                                                <li><a href="product-details-galleryright.html">Product rightside Gallery</a></li>
                                                                <li><a href="product-details-sliderbox.html">Product Sliderbox</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <div class="mega-menu-banner mt-30">
                                                        <a href="shop.html"><img src="assets/images/bg/custom_banner.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown dropdown-width">
                                                    <li>
                                                        <a href="blog-grid-right-sidebar.html">Blog Grid<i class="fa fa-angle-right float-right"></i></a>
                                                        <ul class="sub-dropdown dropdown dropdown-width">
                                                            <li><a href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-grid-fullwidth.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="blog-list-right-sidebar.html">Blog List<i class="fa fa-angle-right float-right"></i></a>
                                                        <ul class="sub-dropdown dropdown dropdown-width">
                                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="blog-list-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-list-fullwidth.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="blog-details-right-sidebar.html">Blog Single Post<i class="fa fa-angle-right float-right"></i></a>
                                                        <ul class="sub-dropdown dropdown dropdown-width">
                                                            <li><a href="blog-details.html">Right Sidebar</a></li>
                                                            <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-details-fullwidth.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">Standard Blog<i class="fa fa-angle-right float-right"></i></a>
                                                        <ul class="sub-dropdown dropdown dropdown-width">
                                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="blog-fullwidth.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown dropdown-width">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="product-details.html">Product</a></li>
                                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="faq.html">Frequently Question</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="404.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Main Menu End -->
                            <div class="blockcart">
                                <a href="#" class="drop-toggle">
                                    <img src="assets/images/cart/cart.png" alt="" class="img-fluid">
                                    <span class="my-cart">My Cart</span>
                                    <span class="count">2</span>
                                    <span class="total-item">$200.00</span>
                                </a>
                                <div class="cart-dropdown drop-dropdown">
                                    <ul>
                                        <li class="mini-cart-details">
                                            <div class="innr-crt-img">
                                                <img src="assets/images/cart/ear-headphones.jpg" alt="">
                                                <span>1x</span>
                                            </div>
                                            <div class="innr-crt-content">
                                                <span class="product-name">
                                                <a href="#">SonicFuel Wireless Over-Ear Headphones </a>
                                            </span>
                                                <span class="product-price">$32.30</span>
                                                <span class="product-size">Size:  S</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-details mb-30">
                                            <div class="innr-crt-img">
                                                <img src="assets/images/cart/720-degree-cameras-dual.jpg" alt="">
                                                <span>1x</span>
                                            </div>
                                            <div class="innr-crt-content">
                                                <span class="product-name">
                                                <a href="#">720 Degree Panoramic HD 360.. </a>
                                            </span>
                                                <span class="product-price">$29.00</span>
                                                <span class="product-size">Dimension:  40cm X 60cm</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Subtotal</span>
                                            <span class="subtotal-price">$61.30</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Shipping</span>
                                            <span class="subtotal-price">$40.20</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Taxes</span>
                                            <span class="subtotal-price">$10.07</span>
                                        </li>
                                        <li>
                                            <span class="subtotal-text">Total</span>
                                            <span class="subtotal-price">$111.57</span>
                                        </li>
                                    </ul>
                                    <div class="checkout-cart">
                                        <a href="checkout.html">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->
        <!-- Header Bottom Start -->
        <div class="header-menu header-bottom-area theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Category Menu Start -->
                        <div class="categoryes-menu-bar">
                            <div class="categoryes-menu-btn category-toggle">
                                <div class="float-left">
                                    <a href="#">All Categories</a>
                                </div>
                                <div class="float-right">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                            <nav class="categorye-menus category-dropdown">
                                <ul class="categories-expand">
                                    <li class="categories-hover-right">
                                        <a href="#">Computer - Laptop <i class="fa fa-angle-right float-right"></i></a>
                                        <ul class="cat-submenu category-mega">
                                            <li class="cat-mega-title"><a href="#">Security Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Mirrorless Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Digital Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="categories-hover-right">
                                        <a href="#">Electronics <i class="fa fa-angle-right float-right"></i></a>
                                        <ul class="cat-submenu category-mega">
                                            <li class="cat-mega-title"><a href="#">Security Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Mirrorless Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Digital Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="categories-hover-right">
                                        <a href="#">Toys & Hobbies <i class="fa fa-angle-right float-right"></i></a>
                                        <ul class="cat-submenu category-mega">
                                            <li class="cat-mega-title"><a href="#">Security Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Mirrorless Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                            <li class="cat-mega-title"><a href="#">Digital Cameras</a>
                                                <ul>
                                                    <li><a href="#">DSLR Cameras</a></li>
                                                    <li><a href="#">Lense Camera</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Mirrorless Cameras</a></li>
                                                    <li><a href="#">Point</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children active"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Computer - Laptop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Men</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shirt</a></li>
                                                    <li><a href="shop-fullwidth.html">Pant</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Women</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shirt</a></li>
                                                    <li><a href="shop-fullwidth.html">Pant</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Kids</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shirt</a></li>
                                                    <li><a href="shop-fullwidth.html">Pant</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Shoes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Electronics</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Camera</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Cell Phone</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">TV & Video</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                        <a href="#">Toys & Hobbies</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Camera</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Cell Phone</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">TV & Video</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Cords & Cables</a></li>
                                                    <li><a href="shop-fullwidth.html">Wireless</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Sports & Outdoors</a>
                                    </li>
                                    <li>
                                        <a href="#">Smarphone & Tablets</a>
                                    </li>
                                    <li>
                                        <a href="#">Health & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#">Computers & Networking</a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#">Jewelry & Watches</a>
                                    </li>
                                    <li>
                                        <a href="#">Flashlights & Lamps</a>
                                    </li>
                                    <li>
                                        <a href="#">Cameras & Photo</a>
                                    </li>
                                    <li class="category-item-parent hidden">
                                        <a href="#">Category-01</a>
                                    </li>
                                    <li class="category-item-parent">
                                        <a href="#" class="more-btn">More Category</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Category Menu End -->
                    </div>
                    <div class="col-lg-9">
                        <div class="search-container">
                            <form action="#">
                                <div class="top-cat">
                                    <select class="select-option" name="select" id="category2">
                                        <option value="1">All categories</option>
                                        <option value="12">All categories</option>
                                        <option value="27">- - Women </option>
                                        <option value="30">- - - - Dresses</option>
                                        <option value="31">- - - - Shirts &amp; Blouses</option>
                                        <option value="32">- - - - Blazers</option>
                                        <option value="33">- - - - Lingerie</option>
                                        <option value="34">- - - - Jeans</option>
                                        <option value="28">- - Men</option>
                                        <option value="35">- - - - Shorts</option>
                                        <option value="36">- - - - Sportswear</option>
                                        <option value="37">- - - - Swimwear</option>
                                        <option value="38">- - - - Jackets &amp; Suits</option>
                                        <option value="39">- - - - T-shirts &amp; Tank Tops</option>
                                        <option value="29">- - Kids </option>
                                        <option value="40">- - - - Trousers</option>
                                        <option value="41">- - - - Shirts &amp; Tops</option>
                                        <option value="42">- - - - Knitwear</option>
                                        <option value="43">- - - - Jackets</option>
                                        <option value="44">- - - - Sandals</option>
                                        <option value="13">Electronics</option>
                                        <option value="45">- - Cameras</option>
                                        <option value="49">- - - - Cords and Cables</option>
                                        <option value="50">- - - - gps accessories</option>
                                        <option value="51">- - - - Microphones</option>
                                        <option value="52">- - - - Wireless Transmitters</option>
                                        <option value="46">- - Audio</option>
                                        <option value="53">- - - - Other Accessories</option>
                                        <option value="54">- - - - Portable Audio</option>
                                        <option value="55">- - - - Satellite Radio</option>
                                        <option value="56">- - - - Visual Accessories</option>
                                        <option value="47">- - Cell Phones</option>
                                        <option value="57">- - - - iPhone</option>
                                        <option value="58">- - - - Samsung Galaxy</option>
                                        <option value="59">- - - - SIM Cards</option>
                                        <option value="60">- - - - Prepaid Cell Phones</option>
                                        <option value="48">- - TV &amp; Video</option>
                                        <option value="61">- - - - 4K Ultra HDTVs</option>
                                        <option value="62">- - - - All TVs</option>
                                        <option value="63">- - - - Refurbished TVs</option>
                                        <option value="64">- - - - TV Accessories</option>
                                        <option value="14">Toys &amp; Hobbies</option>
                                        <option value="65">- - Books &amp; Board Games</option>
                                        <option value="67">- - - - Arts &amp; Crafts</option>
                                        <option value="68">- - - - Baby &amp; Toddler Toys</option>
                                        <option value="69">- - - - Electronics for Kids</option>
                                        <option value="70">- - - - Dolls &amp; Accessories</option>
                                        <option value="66">- - Baby Dolls</option>
                                        <option value="71">- - - - Baby Alive Dolls</option>
                                        <option value="72">- - - - Barbie</option>
                                        <option value="73">- - - - Baby Annabell</option>
                                        <option value="74">- - - - Bratz </option>
                                        <option value="15">Sports &amp; Outdoors</option>
                                        <option value="16">Smartphone &amp; Tablets</option>
                                        <option value="17">Health &amp; Beauty</option>
                                        <option value="18">Computers &amp; Networking</option>
                                        <option value="19">Accessories</option>
                                        <option value="20">Jewelry &amp; Watches</option>
                                        <option value="21">Flashlights &amp; Lamps</option>
                                        <option value="22">Cameras &amp; Photo</option>
                                        <option value="23">Holiday Supplies &amp; Gifts</option>
                                        <option value="24">Automotive </option>
                                        <option value="25">cosmetic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input class="header-search" placeholder="Enter your search key ..." type="text">
                                    <button class="header-search-button" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End  -->
    </div>
    <!-- =================
    Header Area  End 
    =====================-->

    <!--=====================
    slider area start
    =========================-->
    
    <?php
    $sql="SELECT * FROM slider_top ;";
    $res=mysqli_query($conn,$sql);
   
    ?>
    <div class="slider_section mb-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider_area slider-two slider-three slider-tools row">
                        <!-- Single Slider Start -->
                        <?php
                         while($query=mysqli_fetch_assoc($res)){
                             ?>
                        <div class="single_slider hero-bg-3">
                        <img src=<?php "assets/images/slider/".$query['product_image'];?> alt="">
                            <div class="slider_content color_two">
                                
                                <h2><?php echo $query['product_name'];?></h2>
                                    <div class="pt-des">
                                    <p><span>-50%</span>Starting <span>Rs.<?php echo $query['product_price'];?></span></p>
                                    </div>
                                    <p class="slider-text"><?php echo $query['product_desc'];?></p>
                                    <a href="shop.html">Shop Now</a>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                        <!-- =+++===================== -->
                        
                        <!-- Single Slider End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======================
            slider area End
        ==========================-->


    <!--=====================
    Home Product Aera Start
    =========================-->
    <div class="home3-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="left-side-wrapper">
                        <!-- Left Side Banner Start -->
                        <div class="banner-area">
                            <div class="single-banner mt-50">
                                <a href="#"><img src="assets/images/banner/banner3-4.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <!-- Left Side Banner End -->
                        <!-- Product List Sidebar Start -->
                        <div class="product-list-slidebar mt-50">
                            <div class="block-title">
                                <h6>New Arrivals</h6>
                            </div>
                            <div class="feature-carousel slick-custom slick-custom-default list-home3 nav-top">
                                <div class="product-list-content">
                                    <div class="single-product-list mb-20">
                                        <div class="product-list-image">
                                            <a href="product-details.html">
                                                <img src="assets/images/feature/feature-1.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-6.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-list mb-20">
                                        <div class="product-list-image">
                                            <a href="product-details.html">
                                                <img src="assets/images/feature/feature-2.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-5.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$32.67</span>
                                                <span class="old-price"><del>$35.50</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-list">
                                        <div class="product-list-image">
                                            <a href="#">
                                                <img src="assets/images/feature/feature-3.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-4.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="default-star"><i class="fa fa-star"></i></span>
                                                <span class="default-star"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$143.00</span>
                                                <span class="old-price"><del>$156.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <div class="single-product-list mb-20">
                                        <div class="product-list-image">
                                            <a href="product-details.html">
                                                <img src="assets/images/feature/feature-4.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-6.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$30.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-list mb-20">
                                        <div class="product-list-image">
                                            <a href="product-details.html">
                                                <img src="assets/images/feature/feature-2.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-5.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$32.67</span>
                                                <span class="old-price"><del>$35.50</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product-list">
                                        <div class="product-list-image">
                                            <a href="product-details.html">
                                                <img src="assets/images/feature/feature-3.jpg" alt="" class="img-fluid block-one">
                                                <img src="assets/images/feature/feature-4.jpg" alt="" class="img-fluid block-two">
                                            </a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-name">
                                                <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                            </div>
                                            <div class="rating">
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="yellow"><i class="fa fa-star"></i></span>
                                                <span class="default-star"><i class="fa fa-star"></i></span>
                                                <span class="default-star"><i class="fa fa-star"></i></span>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price">$143.00</span>
                                                <span class="old-price"><del>$156.00</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product List Sidebar End -->
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <!-- Shipping Area Start -->
                    <div class="row mt-50">
                        <div class="col-12">
                            <div class="single-shipping single-shipping-last single-delivery">
                                <div class="block-wrapper">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">Free Delivery</h5>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shipping single-shipping-last single-delivery">
                                <div class="block-wrapper2">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">Online Support 24/7</h5>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-shipping single-shipping-last single-delivery">
                                <div class="block-wrapper3">
                                    <div class="shipping-content">
                                        <h5 class="ship-title">Money Return</h5>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shipping Area End -->
                    <!-- Product Offer Area Start -->
                    <div class="product-offer-slider slick-custom-default">
                        <div class="flash-single-item">
                            <div class="product-item">
                                <span class="offer-bar"><img src="assets/images/product/sale-offer.png" alt=""></span>
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/offer/product-9.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name mb-20">
                                        <a href="product-details.html">
                                            <h6>Natus erro at congue massa commodo sit dignissim</h6>
                                        </a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box mt-15 mb-15">
                                        <span class="regular-price">$30.00</span>
                                        <span class="old-price"><del>$35.50</del></span>
                                    </div>
                                    <div class="product-pre-content mb-30">
                                        <p>The S-Series Full HD TCL Roku TV puts all your entertainment favorites in one place, allowing seamless access to...</p>
                                    </div>
                                    <div class="countdown">
                                        <div class="box-countdown">
                                            <div class="title-countdown">
                                                <h6 class="mb-20">Hurry Up! Offer ends in:</h6>
                                            </div>
                                            <div data-countdown="2021/12/24">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flash-single-item">
                            <div class="product-item">
                                <span class="offer-bar"><img src="assets/images/product/sale-offer.png" alt=""></span>
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/offer/product-12.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name mb-20">
                                        <a href="product-details.html">
                                            <h6>Mirum est notare tellus eu nibh iaculis pretium</h6>
                                        </a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="default-star"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box mt-15 mb-15">
                                        <span class="regular-price">$130.00</span>
                                        <span class="old-price"><del>$135.50</del></span>
                                    </div>
                                    <div class="product-pre-content mb-30">
                                        <p>The S-Series Full HD TCL Roku TV puts all your entertainment favorites in one place, allowing seamless access to...</p>
                                    </div>
                                    <div class="countdown">
                                        <div class="box-countdown">
                                            <div class="title-countdown">
                                                <h6 class="mb-20">Hurry Up! Offer ends in:</h6>
                                            </div>
                                            <div data-countdown="2021/12/24">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Offer Area End -->
                    <!-- Product slide home 2 start -->
                    <div class="product-slide-home2 mb-20 mt-30">
                        <div class="block-title">
                            <h6>Bestseller Products</h6>
                        </div>
                        <div class="product-carousel-home2 slick-custom slick-custom-default nav-top">
                            <div class="product-row">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-11.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>New</span>
                                            </div>
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$30.00</span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                            <div class="product-row">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-2.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>New</span>
                                            </div>
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$30.00</span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                            <div class="product-row">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$50.67</span>
                                            <span class="old-price"><del>$55.50</del></span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                            <div class="product-row">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-8.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="box-label">
                                            <div class="label-product-new">
                                                <span>New</span>
                                            </div>
                                            <div class="label-product-discount">
                                                <span>-20%</span>
                                            </div>
                                        </div>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$50.67</span>
                                            <span class="old-price"><del>$55.50</del></span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                            <div class="product-row">
                                <!-- Single-Product-Start -->
                                <div class="item-product">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/product-5.jpg" alt="" class="img-fluid">
                                        </a>
                                        <div class="action-link">
                                            <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                            <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-name">
                                            <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                        </div>
                                        <div class="rating">
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                            <span class="yellow"><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$50.67</span>
                                        </div>
                                        <div class="cart">
                                            <div class="add-to-cart">
                                                <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-Product-End -->
                            </div>
                        </div>
                    </div>
                    <!-- Product Slide Home 2 End -->
                    <!-- Banner area Start -->
                    <div class="banner-area">
                        <div class="single-banner mt-30">
                            <a href="#"><img src="assets/images/banner/banner2-4.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <!-- Banner Area End -->
                </div>
            </div>
        </div>
    </div>
    <!--======================
    Home Product Area End
    ==========================-->

    <!-- =================
    Category Product Area Start 
    =====================-->
    <div class="product-category-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs category-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="four-tab" data-toggle="tab" href="#four">
                                <span><img src="assets/images/category/thumb-1.png" alt="" class="img-fluid"></span>
                                <span>Computer - Laptop</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="five-tab" data-toggle="tab" href="#five">
                                <span><img src="assets/images/category/thumb-2.png" alt="" class="img-fluid"></span>
                                <span>Electronics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="six-tab" data-toggle="tab" href="#six">
                                <span><img src="assets/images/category/thumb-3.png" alt="" class="img-fluid"></span>
                                <span>Toys & Hobbies</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven">
                                <span><img src="assets/images/category/thumb-4.png" alt="" class="img-fluid"></span>
                                <span>Sports & Outdores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight">
                                <span><img src="assets/images/category/thumb-5.png" alt="" class="img-fluid"></span>
                                <span>Smartphone & Tablets</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nine-tab" data-toggle="tab" href="#nine">
                                <span><img src="assets/images/category/thumb-6.png" alt="" class="img-fluid"></span>
                                <span>Health & Beauty</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="product-thing-tab slick-custom-default tab-pane fade show active" id="four">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-1.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-thing-tab slick-custom-default tab-pane fade" id="five">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-10.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-11.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-7.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-thing-tab slick-custom-default tab-pane fade" id="six">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-1.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-12.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-10.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-thing-tab slick-custom-default tab-pane fade" id="seven">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-11.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-8.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-thing-tab slick-custom-default tab-pane fade" id="eight">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-10.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-9.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-6.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                        <div class="product-thing-tab slick-custom-default tab-pane fade" id="nine">
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-9.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-2.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a class="cart-plus" href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-3.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="#">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-4.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="box-label">
                                        <div class="label-product-new">
                                            <span>New</span>
                                        </div>
                                        <div class="label-product-discount">
                                            <span>-20%</span>
                                        </div>
                                    </div>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Natus erro at congue massa commodo sit dignissim</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shoppint-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-5.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                            <!-- Single-Product-Start -->
                            <div class="item-product">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-8.jpg" alt="" class="img-fluid">
                                    </a>
                                    <div class="action-link">
                                        <a class="quick-view same-link" href="#" title="Quick view" data-toggle="modal" data-target="#modal_box" data-original-title="quick view"><i class="zmdi zmdi-eye zmdi-hc-fw"></i></a>
                                        <a class="compare-add same-link" href="compare.html" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                        <a class="wishlist-add same-link" href="wishlist.html" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-name">
                                        <a href="product-details.html">Porro quisquam eget feugiat pretium sodales</a>
                                    </div>
                                    <div class="rating">
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                        <span class="yellow"><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$50.67</span>
                                        <span class="old-price"><del>$55.50</del></span>
                                    </div>
                                    <div class="cart">
                                        <div class="add-to-cart">
                                            <a href="shopping-cart.html" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single-Product-End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Product Area End
    =====================-->

    <!-- ================
    Brand Logo Area Start
    =====================-->
    <div class="brand-area mt-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="brand-logo">
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="assets/images/brand/4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================
    Brand Logo Area End
    =====================-->

    <!-- ================
    Latest Post Area Start
    =====================-->
    <div class="latest-post-area mt-50">
        <div class="container">
            <div class="row">
                <!-- Blog Post Area Start -->
                <div class="col-lg-6 col-12">
                    <div class="block-title">
                        <h6>From Our blog</h6>
                    </div>
                    <div class="blog-post-carousel slick-custom slick-custom-default nav-top">
                        <div class="blog-post-container">
                            <div class="single_blog mb-35">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-1.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                            <div class="single_blog">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-2.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-container">
                            <div class="single_blog mb-35">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-3.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                            <div class="single_blog">
                                <div class="blog_thumb single-banner">
                                    <a href="blog-fullwidth.html"><img src="assets/images/blog/blog-post-4.jpg" alt="" class="img-fluid"></a>
                                </div>
                                <div class="blog_content">
                                    <h6><a href="blog-fullwidth.html">This is Secound Post For XipBlog</a></h6>
                                    <div class="date_post mt-15 mb-15">
                                        <span>01 Jan 2020</span>
                                    </div>
                                    <p class="post-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Post Area End -->
                <!-- Testimonial Area Start -->
                <div class="col-lg-6 col-12">
                    <div class="block-title">
                        <h6>What Client Say</h6>
                    </div>
                    <div class="testimonial-carousel slick-custom slick-custom-default nav-top">
                        <div class="single_testimonial text-center">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                            <img src="assets/images/testimonial/testimonial-1.png" alt="" class="img-fluid">
                            <span class="name">Kathy Young</span>
                            <span class="job_title">CEO of SunPark</span>
                            <div class="rating">
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                        <div class="single_testimonial text-center">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feuga</p>
                            <img src="assets/images/testimonial/testimonial-2.jpg" alt="" class="img-fluid">
                            <span class="name">Alex Aya</span>
                            <span class="job_title">Art Director</span>
                            <div class="rating">
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                                <span class="yellow"><i class="fa fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Area End -->
            </div>
        </div>
    </div>
    <!-- ================
    Latest Post Area End
    =====================-->

    <!--===================
     footer area start 
    ===================-->
    <footer class="mt-30">
        <!-- Newslatter area start -->
        <div class="newsletter-group">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-inner d-flex align-items-center">
                            <i class="fa fa-envelope-open-o"></i>
                            <div class="newsletter-title">
                                <h1 class="sign-title">Sign Up For Our Newsletter</h1>
                                <p>Get e-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-box">
                            <form id="mc-form" class="mc-form">
                                <input type="email" id="mc-email" class="email-box" placeholder="enter your email" name="EMAIL">
                                <button id="mc-submit" class="newsletter-btn" type="submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter area End -->
        <!-- Footer Top Start -->
        <div class="footer-top mt-50 mb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-single-widget">
                            <div class="footer-logo mb-40">
                                <a href="index.html"><img src="assets/images/logo/pos-circle-logo.jpg" alt=""></a>
                            </div>
                            <div class="widget-body">
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                                <div class="widget-address mt-30 mb-20">
                                    <p><strong>Address:</strong> 123 Main Street, Anytown, CA 12345 USA.</p>
                                    <p><strong>Number Phone:</strong> (800) 123 456 - (800) 123 456.</p>
                                    <p><strong>Address Email:</strong> support@circleshop.com</p>
                                </div>
                            </div>
                            <div class="footer_social">
                                <ul class="d-flex">
                                    <li><a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                    <li><a class="google" href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="widgets_container">
                                    <h6>Information</h6>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html"> Contact us</a></li>
                                            <li><a href="#"> Privecy Policy</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="widgets_container">
                                    <h6>My Account</h6>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Older History</a></li>
                                            <li><a href="#">Wishlist</a></li>
                                            <li><a href="#">Newslatter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="widgets_container">
                                    <h6>Find It Fast</h6>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">Desktop</a></li>
                                            <li><a href="#">Laptop & Mobile</a></li>
                                            <li><a href="#">Components</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <div class="widgets_container">
                                    <h6>Customer Service</h6>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Delivery Information</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-box mt-30">
                                    <div class="widget-single-box">
                                        <p><strong>Address:</strong></p>
                                        <ul>
                                            <li><a href="#">Order</a></li>
                                            <li><a href="#">Affiliate</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Sourcing</a></li>
                                            <li><a href="#">Gadgets</a></li>
                                            <li><a href="#">Accessories</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-single-box">
                                        <p><strong>Headphones:</strong></p>
                                        <ul>
                                            <li><a href="#">Beats</a></li>
                                            <li><a href="#">Headphone Bose</a></li>
                                            <li><a href="#">Headphone Nocx</a></li>
                                            <li><a href="#">Wireless</a></li>
                                            <li><a href="#">Headphone</a></li>
                                            <li><a href="#">Headphone Mini</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-single-box">
                                        <p><strong>Computers:</strong></p>
                                        <ul>
                                            <li><a href="#">Mini Laptops</a></li>
                                            <li><a href="#">Computers</a></li>
                                            <li><a href="#">Laptop Mouse</a></li>
                                            <li><a href="#">Laptop Pad</a></li>
                                            <li><a href="#">GB Laptop</a></li>
                                            <li><a href="#">XL Laptop</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget-single-box">
                                        <p><strong>Camera:</strong></p>
                                        <ul>
                                            <li><a href="#">Lense Camera</a></li>
                                            <li><a href="#">Frame Camera</a></li>
                                            <li><a href="#">Box Camera</a></li>
                                            <li><a href="#">Mini Camera</a></li>
                                            <li><a href="#">XL Camera</a></li>
                                            <li><a href="#">Point shoot camera</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="footer-bottom-content">
                            <div class="footer-copyright">
                                <p>© 2021 Copyright <strong>CIRCLESHOP</strong> Made With <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"> <strong>HasThemes</strong></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12">
                        <div class="payment">
                            <a href="#">
                                <img src="assets/images/payment/footerend.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </footer>
    <!--===================
     footer area end 
    ===================-->

    <!-- Scroll To Top Start -->
    <a class="scroll-to-top" href=""><i class="fa fa-angle-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-1.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-2.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-3.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/images/product/product-details/product-details-4.jpg" alt="" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-1.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-2.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-3.jpg" alt="" class="img-fluid"></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/images/product/product-details/product-thumb-4.jpg" alt="" class="img-fluid"></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product Summery Start -->
                                <div class="product-summery mt-50">
                                    <div class="product-head">
                                        <h1 class="product-title">Porro quisquam eget feugiat pretium</h1>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$30.00</span>
                                    </div>
                                    <div class="product-description">
                                        <p>Porro first 4K UHD Camcorder, the GX10 has a compact and portable design that delivers outstanding video quality with remarkable detail. With a combination of incredible features and functionality, the GX10 is the ideal camcorder for aspiring filmmakers.</p>
                                    </div>
                                    <div class="product-tax mb-20">
                                        <ul>
                                            <li><span><strong>Ex Tax :</strong>£60.24</span></li>
                                            <li><span><strong>Brands :</strong>Canon</span></li>
                                            <li><span><strong>Product Code :</strong>Digital</span></li>
                                            <li><span><strong>Reward Points :</strong>200</span></li>
                                            <li><span><strong>Availability :</strong>In Stock</span></li>
                                        </ul>
                                    </div>
                                    <div class="product-buttons grid_list">
                                        <div class="action-link">
                                            <a href="#" title="Add to compare"><i class="zmdi zmdi-refresh-alt"></i></a>
                                            <button class="btn-secondary">Add To Cart</button>
                                            <a href="#" title="Add to wishlist"><i class="zmdi zmdi-favorite-outline zmdi-hc-fw"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="desc-content">
                                            <div class="social_sharing d-flex">
                                                <h5>share this post:</h5>
                                                <ul>
                                                    <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Summery End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.8.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/plugins.js"></script>
    <!-- Jquery ui JS -->
    <script src="assets/js/plugins/jquery.ui.js"></script>
    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Magnific Popup JS -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Modal JS -->
    <script src="assets/js/plugins/modal.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/sticky-sidebar.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/countdown.min.js"></script>
    <!-- jQuery Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>