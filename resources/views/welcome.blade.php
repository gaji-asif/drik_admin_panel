@extends('layouts.master')
@section('main-content')
    <div class="gallery-2">
        <div class="container-fluid">
            <div class="form-row">
                <!-- <div class="col-md-12 p-0 grid-image">
                    <div class="ads-banner-img">
                        <div class="img">
                            <img class="w-100" src="{{asset('public/images/img-16.jpg')}}" alt="">
                            <div class="ads-details">
                                <p class="category-name">Mountains</p>
                                <h4 class="image-name">How sustainable images can make your projects resonate</h4>
                            </div>

                            <div class="logo">
                                <img class="w-100" src="images/logo.png" alt="">
                            </div>
                            <div class="corner-top"></div>
                            <div class="corner-bottom"></div>
                        </div>
                    </div>
                </div> -->
                @foreach($images as $image)
                    <div class="col-xs-6 col-sm-6 col-md-3 col-xl-3 p-0 grid-image">
                        <div class="img">
                            <img class="w-100" src="{{$image->thumbnail_url}}" alt="">

                            <div class="img-details">
                                <p class="category-name">Mountains</p>
                                <h4 class="image-name">Mountains with Cloud and Lake</h4>
                            </div>
                            <div class="corner-top"></div>
                            <div class="corner-bottom"></div>
                            <a href="#" class="image-popup" data-toggle="modal" data-target={{"#image_details-".$image->id}}></a>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id={{"image_details-".$image->id}} tabindex="-1" role="dialog" aria-labelledby="image_detailsTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="form-row align-items-center">
                                        <div class="col-md-9">
                                            <div class="full-img">
                                                <img class="w-100" src="{{$image->image_main_url}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="author">
                                                <div class="author-img">
                                                    <img class="w-100" src="{{$image->thumbnail_url}}" alt="">
                                                </div>
                                                <div class="author-info">
                                                    <span class="author-name">{{$image->imageAuthor->name}}</span>
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
                                                            <input class="form-check-input" type="radio" name="image-sizes" id="smallRadio" value="small_price">
                                                            <label class="form-check-label" for="smallRadio">Small</label>
                                                        </div>

                                                        <span class="badge badge-pill">${{$image->small_price}}</span>
                                                    </div>

                                                    <div class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="image-sizes" id="mediumRadios" value="medium_price">
                                                            <label class="form-check-label" for="mediumRadios">Medium</label>
                                                        </div>

                                                        <span class="badge badge-pill">${{$image->medium_price}}</span>
                                                    </div>

                                                    <div class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="image-sizes" id="largeRadio" value="large_price">
                                                            <label class="form-check-label" for="largeRadio">Large</label>
                                                        </div>

                                                        <span class="badge badge-pill">${{$image->large_price}}</span>
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
                                                    <button onclick="addToCart('{{$image->id}}')" class="btn btn-block download-btn" data-dismiss="modal"><i class="icofont-download"></i> Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
