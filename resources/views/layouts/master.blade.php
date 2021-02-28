<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drikimages | Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/logo.png" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/drik/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/drik/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/drik/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/drik/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/drik/css/responsive.css')}}">
</head>

<body>
<!-- Preloader -->
<div class="preloader-wrap">
    <div class="preloader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- Cart sidebar start-->
<div class="cart_sidebar w3-bar-block w3-card w3-animate-left"id="mySidebar">
    <div class="cart">
        <div class="cart-header d-flex align-items-center justify-content-between">
            <button class="btn btn-sm border px-2" onclick="cart_close()">Close &times;</button>
            <h5 class="mb-0 text-total"><i class="icofont-prestashop"></i> 15 Items </h5>
        </div>

        <div class="product-list">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" >
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-12.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <table class="table table-bordered m-0">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Creative image&nbsp;&nbsp;|&nbsp;&nbsp;1205797237</td>
                                    </tr>

                                    <tr>
                                        <td>Size</td>
                                        <td>4445 x 6668 px (14.82 x 22.23 in.) - 300 dpi - RGB File size on download 15 MB</td>
                                    </tr>

                                    <tr>
                                        <td>License type:</td>
                                        <td>Royalty-free|View license summaries</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>

                    <td class="v-align-middle w-10 text-right">৳ 859</td>
                    <td class="v-align-middle w-5 text-right">
                        <button class="product-minus"><i class="icofont-close"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" >
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-13.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <table class="table table-bordered m-0">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Creative image&nbsp;&nbsp;|&nbsp;&nbsp;1205797237</td>
                                    </tr>

                                    <tr>
                                        <td>Size</td>
                                        <td>4445 x 6668 px (14.82 x 22.23 in.) - 300 dpi - RGB File size on download 15 MB</td>
                                    </tr>

                                    <tr>
                                        <td>License type:</td>
                                        <td>Royalty-free|View license summaries</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>

                    <td class="v-align-middle w-10 text-right">৳ 859</td>
                    <td class="v-align-middle w-5 text-right">
                        <button class="product-minus"><i class="icofont-close"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" >
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-14.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <table class="table table-bordered m-0">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Creative image&nbsp;&nbsp;|&nbsp;&nbsp;1205797237</td>
                                    </tr>

                                    <tr>
                                        <td>Size</td>
                                        <td>4445 x 6668 px (14.82 x 22.23 in.) - 300 dpi - RGB File size on download 15 MB</td>
                                    </tr>

                                    <tr>
                                        <td>License type:</td>
                                        <td>Royalty-free|View license summaries</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>

                    <td class="v-align-middle w-10 text-right">৳ 859</td>
                    <td class="v-align-middle w-5 text-right">
                        <button class="product-minus"><i class="icofont-close"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" >
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-6.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <table class="table table-bordered m-0">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Creative image&nbsp;&nbsp;|&nbsp;&nbsp;1205797237</td>
                                    </tr>

                                    <tr>
                                        <td>Size</td>
                                        <td>4445 x 6668 px (14.82 x 22.23 in.) - 300 dpi - RGB File size on download 15 MB</td>
                                    </tr>

                                    <tr>
                                        <td>License type:</td>
                                        <td>Royalty-free|View license summaries</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>

                    <td class="v-align-middle w-10 text-right">৳ 859</td>
                    <td class="v-align-middle w-5 text-right">
                        <button class="product-minus"><i class="icofont-close"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" >
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-8.jpg" alt="">
                            </div>
                            <div class="product-info">
                                <table class="table table-bordered m-0">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Creative image&nbsp;&nbsp;|&nbsp;&nbsp;1205797237</td>
                                    </tr>

                                    <tr>
                                        <td>Size</td>
                                        <td>4445 x 6668 px (14.82 x 22.23 in.) - 300 dpi - RGB File size on download 15 MB</td>
                                    </tr>

                                    <tr>
                                        <td>License type:</td>
                                        <td>Royalty-free|View license summaries</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>

                    <td class="v-align-middle w-10 text-right">৳ 859</td>
                    <td class="v-align-middle w-5 text-right">
                        <button class="product-minus"><i class="icofont-close"></i></button>
                    </td>
                </tr>






                </tbody>
            </table>
        </div>

        <div class="cart-footer d-flex align-items-center justify-content-between">
            <div class="">
                <!-- <h6 class="mb-0 text-secondary">Items selected for purchase: 2</h6> -->
                <h5 class="mb-0 text-total">Subtotal : ৳998.00 BDT</h5>
            </div>
            <div class="text-right">
                <a href="checkout.html" class="btn btn-sm theme-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- Cart sidebar End-->



<div class="page">
    <!-- Header Part Start -->
    <div class="header">
        <nav class="navbar navbar-expand-lg bg-transparent bg-white">
            <a class="navbar-brand" href="index-2.html">
                <img class="w-100" src="images/logo-ts.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="search-result.html">Nature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search-result.html">Creative</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search-result.html">Food</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="search-result.html">Flowers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="search-result.html">City</a>
                    </li>
                </ul>

                <div class="header_actions text-right navbar p-0">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="sign-in.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-user"></i>
                            </a>
                            <div class="dropdown-menu user-custom" aria-labelledby="navbarDropdown">
                                <div class="author">
                                    <div class="author-img">
                                        <img class="w-100" src="images/img-21.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <span class="author-name">Author Name</span>
                                    </div>
                                </div>

                                <div class="actions text-center">
                                    <button class="btn author-action-button"><i class="icofont-like"></i>&nbsp;50</button>
                                    <button class="btn author-action-button"><i class="icofont-star"></i>&nbsp;50</button>
                                    <button class="btn author-action-button"><i class="icofont-share"></i>&nbsp;50</button>
                                </div>


                                <div class="form-row mt-3">
                                    <div class="col-md-6">
                                        <a href="sign-in.html" class="btn btn-block theme-btn sign-in">Profile</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-block theme-btn sign-up">Log Out</a>
                                    </div>
                                </div>




                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="openNav" onclick="cart_open()"><i class="icofont-cart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Header Part End -->

    <!-- Hero section start -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-9 col-lg-6 search">
                    <div class="hero-text">
                        <h1>Bring the World’s Best Visual Content to Your Work</h1>
                        <h5>Over 1.9 million+ high quality stock images shared by our talented community.</h5>
                    </div>
                    <div class="form-group search_form">
                        <input type="text" class="form-control" id="" placeholder="Search images, vectors and videos">
                        <button type="submit" class="btn search_submit_button"><i class="fas fa-search"></i></button>
                    </div>
                    <small id="" class="form-text text-muted">You can search whatever you want.</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero section end -->

@yield('main-content')

    <!-- Footer start -->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_widget">
                        <div class="footer_widget_title">
                            <h2>SUPPORT</h2>
                        </div>
                        <ul class="footer_widget_content">
                            <li><span>Phone: &nbsp;&nbsp;&nbsp;&nbsp;</span>+000 333 879 788</li>
                            <li><span>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> support@gmail.com</li>
                            <li><span>Address: &nbsp;</span> king street,avenue</li>
                        </ul>

                        <div class="footer_social">
                            <ul class="footer_social_icons">
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_widget">
                        <div class="footer_widget_title">
                            <h2>PRODUCTS</h2>
                        </div>
                        <ul class="footer_widget_content">
                            <li><i class="icofont-double-right"></i><a href="#">Drik Images API</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Media Manager</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Drikimages.com</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">DrikGallery</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">200k Stock Images</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_widget">
                        <div class="footer_widget_title">
                            <h2>SOLUTIONS</h2>
                        </div>
                        <ul class="footer_widget_content">
                            <li><i class="icofont-double-right"></i><a href="#">Pricing and solutions</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Premium Access</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Rights and clearance</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Image collections</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Custom solutions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_widget">
                        <div class="footer_widget_title">
                            <h2>COMPANY</h2>
                        </div>
                        <ul class="footer_widget_content">
                            <li><i class="icofont-double-right"></i><a href="#">Press room</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Careers</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Affiliates</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">Grants and giving</a></li>
                            <li><i class="icofont-double-right"></i><a href="#">200 + Photographers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright">© 2021 All Rights Reserved <a target="_blank" href="#">Drik Gallery</a></p>
                </div>
                <div class="col-md-6">
                    <p class="design_by">Design & Developed by <a target="_blank" href="http://nextgenitltd.com/">NEXTGEN IT</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer end -->
</div>



<script src="{{asset('public/js/drik_js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/drik_js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/drik_js/main.js')}}"></script>

<script>
    function cart_open() {
        document.getElementById("mySidebar").style.marginRight = "0%";
        document.getElementById("mySidebar").style.transition = "all 0.3s";
        document.getElementById("openNav").style.display = "none";
    }
    function cart_close() {
        document.getElementById("mySidebar").style.marginRight = "-110%";
        document.getElementById("mySidebar").style.transition = "all 0.3s";
        document.getElementById("openNav").style.display = "inline-block";
    }
</script>
</body>
</html>
