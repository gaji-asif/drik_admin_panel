@extends('layouts.master')

@section('main-content')
    <div class="container">
        <div class="form-row mt-3 mb-3">
            <div class="col-md-6">
                <div class="left border">
                    <div class="form-row">
                        <div class="col-md-6">
                            <h4 class="">Payment</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="icons">
                                <img src="images/visa.png" />
                                <img src="images/mastercard-logo.png" />
                                <img src="images/maestro.png" />
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="card_holder_name">Cardholder's name:</label>
                                <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" value=""  placeholder="Enter Cardholder's name" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="card_number">Card Number:</label>
                                <input type="text" class="form-control" id="card_number" name="card_number" value=""  placeholder="0000 0000 0000 0000"/>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="expiry_date">Expiry date:</label>
                                <input type="text" class="form-control" id="expiry_date" name="expiry_date" value=""  placeholder="DD/MM/YYYY"/>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="card_cvv">CVV:</label>
                                <input type="text" class="form-control" id="card_cvv" name="card_cvv" value=""  placeholder="CVV"/>
                            </div>

                            <div class="form-check col-md-12">
                                <input type="checkbox" class="form-check-input" id="save_card">
                                <label class="form-check-label" for="save_card">Save card details to wallet</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="right border">
                    <div class="summary-header d-flex align-items-center">
                        <div class="w-50 text-left">
                            <h4>Order Summary</h4>
                        </div>
                        <div class="w-50 text-right">
                            <h6>2 items</h6>
                        </div>
                    </div>
                    @if(session('cart'))
                        <div class="summary-items">
                            @foreach(session('cart') as $id => $details)
                                <div class="form-row item align-items-center">
                                    <div class="col-2">
                                        <img class="img-fluid" src="{{$details->thumbnail_url}}" />
                                    </div>
                                    <div class="col-10">
                                        <table class="table table-bordered mb-0">
                                            <tr>
                                                <td class="p-1" colspan="2">
                                                    <b>৳ {{$details->price}}</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-1">Name</td>
                                                <td class="p-1">{{ $details->title }}&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;1205797237</td>
                                            </tr>

                                            <tr>
                                                <td class="p-1">Size</td>
                                                <td class="p-1">4445 x 6668 px</td>
                                            </tr>
                                            <tr>
                                                <td class="p-1" colspan="2"><b>Qty: 1</b></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="summary_footer">
                        <div class="form-row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right">৳ 859</div>
                        </div>
                        <div class="form-row lower">
                            <div class="col text-left">Delivery</div>
                            <div class="col text-right">Free</div>
                        </div>
                        <div class="form-row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b>৳ 859</b></div>
                        </div>
                    </div>
                    <button class="btn theme-btn btn-block">Place order</button>
                    <p class="text-muted text-center mt-3">Complimentary Shipping & Returns</p>
                </div>
            </div>
        </div>
    </div>
@endsection
