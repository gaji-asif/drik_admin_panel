@extends('layouts.master')

@section('main-content')

<body class="hold-transition skin-blue sidebar-mini search_result">

<!--Cart sidebar start-->
<div class="cart_sidebar w3-bar-block w3-card w3-animate-left" id="mySidebar">
    <div class="cart">
        <div class="cart-header d-flex align-items-center justify-content-between">
            <button class="btn btn-sm border px-2" onclick="cart_close()">Close &times;</button>
            <h5 class="mb-0 text-total"><i class="icofont-prestashop"></i> 15 Items</h5>
        </div>

        <div class="product-list">
            <table class="table mb-0">
                <tbody>
                <tr>
                    <td class="v-align-middle w-5">
                        <button class="qty_plus_btn"><i class="icofont-simple-up"></i></button>
                        <input type="text" class="qty" id="qty" name="" value="0" />
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-12.jpg" alt="" />
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
                        <input type="text" class="qty" id="qty" name="" value="0" />
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-13.jpg" alt="" />
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
                        <input type="text" class="qty" id="qty" name="" value="0" />
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-14.jpg" alt="" />
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
                        <input type="text" class="qty" id="qty" name="" value="0" />
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-6.jpg" alt="" />
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
                        <input type="text" class="qty" id="qty" name="" value="0" />
                        <button class="qty_minus_btn"><i class="icofont-simple-down"></i></button>
                    </td>

                    <td class="v-align-middle">
                        <div class="product d-flex align-items-center">
                            <div class="product-image">
                                <img class="w-100" src="images/img-8.jpg" alt="" />
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
<!--Cart sidebar End-->

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="index.html" class="logo">
            <span class="logo-mini"><i class="fas fa-filter"></i></span>
            <span class="logo-lg">Filter <i class="fas fa-filter"></i></span>
        </a>
        <nav class="navbar navbar-static-top p-0 pr-3">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </nav>
    </header>

    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu" data-widget="tree">
                <!-- <li class="header">MAIN NAVIGATION</li> -->
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-arrows-alt"></i> <span>SORT BY</span>
                        <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu" id="sort-menu">
                        <li class="active" data-value="asc">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Newest</a>
                        </li>
                        <li data-value="desc">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Oldest</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Most Popular</a>--}}
{{--                        </li>--}}
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="far fa-clock"></i> <span>TIME</span>
                        <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                    </a>
                    <ul class="treeview-menu" id="time-menu">
                        <li data-value="1">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 24 Hours</a>
                        </li>
                        <li data-value="2">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 48 Hours</a>
                        </li>
                        <li data-value="3">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 72 Hours</a>
                        </li>
                        <li data-value="7">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 7 Days</a>
                        </li>
                        <li data-value="30">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 30 Days</a>
                        </li>
                        <li data-value="365">
                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Last 12 Months</a>
                        </li>
                    </ul>
                </li>

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fas fa-expand"></i> <span>ORIENTATION</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Vertical</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Horizontal</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Square</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Panoramic Horizontal</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fas fa-compress"></i> <span>IMAGE RESOLUTION</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;All</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;12 MP and larger</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;16 MP and larger</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;21 MP and larger</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-users"></i> <span>PEOPLE</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;People-1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;People-2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;People-3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;People-4</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fas fa-file-image"></i> <span>IMAGE STYLE</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Image Style-1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Image Style-2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Image Style-3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Image Style-4</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fa fa-camera-retro"></i> <span>PHOTOGRAPHERS</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Photographer-1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Photographer-2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Photographer-3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Photographer-4</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fas fa-map-marker-alt"></i> <span>LOCATION</span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Location-1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Location-2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Location-3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;Location-4</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="treeview">--}}
{{--                    <a href="#">--}}
{{--                        <i class="fas fa-certificate"></i> <span>LICENSE TYPE </span>--}}
{{--                        <span class="pull-right-container">--}}
{{--                                <i class="fa fa-angle-left pull-right"></i>--}}
{{--                            </span>--}}
{{--                    </a>--}}
{{--                    <ul class="treeview-menu">--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;License-1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fas fa-circle-notch"></i>&nbsp;&nbsp;License-2</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="gallery-2 m-0 p-2">
            <div class="conrainer">
                <div class="grid">
                    @foreach($images as $image)
                        <div class="grid-item grid-image">
                            <div class="img">
                                <img class="w-100" src="{{$image->thumbnail_url}}" alt="" />

                                <div class="img-details">
                                    <p class="category-name">Mountains</p>
                                    <h4 class="image-name">Mountains with Cloud and Lake</h4>
                                </div>
                                <div class="corner-top"></div>
                                <div class="corner-bottom"></div>
                                <a href="#" class="image-popup" data-toggle="modal" data-target="#image_details"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="image_details" tabindex="-1" role="dialog" aria-labelledby="image_detailsTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-close" data-dismiss="modal">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-md-9">
                            <div class="full-img">
                                <img class="w-100" src="images/img-10.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-3">
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

                            <div class="purchase">
                                <h6>PURCHASE A LICENSE</h6>

                                <div class="list-group">
                                    <div class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="image-sizes" id="smallRadio" value="">
                                            <label class="form-check-label" for="smallRadio">Small</label>
                                        </div>

                                        <span class="badge badge-pill">$100</span>
                                    </div>

                                    <div class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="image-sizes" id="mediumRadios" value="">
                                            <label class="form-check-label" for="mediumRadios">Medium</label>
                                        </div>

                                        <span class="badge badge-pill">$200</span>
                                    </div>

                                    <div class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="image-sizes" id="largeRadio" value="">
                                            <label class="form-check-label" for="largeRadio">Large</label>
                                        </div>

                                        <span class="badge badge-pill">$500</span>
                                    </div>
                                </div>

                                <div class="enter-promo_code">
                                    <div class="form-group form-row align-items-center">
                                        <label for="promo_code" class="col-sm-7 col-form-label">Discount/Promo Code&nbsp;&nbsp;:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="promo_code" placeholder="Promo Code">
                                        </div>
                                    </div>
                                    <div class="form-group form-row align-items-center">
                                        <label for="price" class="col-sm-7 col-form-label">Price (After discount)&nbsp;&nbsp;:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="price" placeholder="0.00">
                                        </div>
                                    </div>
                                </div>

                                <div class="download">
                                    <button class="btn btn-block download-btn" data-dismiss="modal"><i class="icofont-download"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
<script src="{{asset('public/js/filter.js')}}"></script>
@endsection
