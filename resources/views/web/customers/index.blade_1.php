@include('web.partials.header')

<div class="col-lg-12">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block" style="padding: 32px; text-align: center;">
                        <a href="#">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto" style="text-align: center;">
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Total Order</h6>
                                    <h2 class="m-b-0">50</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block" style="padding: 32px; text-align: center;">
                        <a href="#">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto" style="text-align: center;"></div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Total Delivered</h6>
                                    <h2 class="m-b-0">45</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block" style="padding: 32px; text-align: center;">
                        <a href="#">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto" style="text-align: center;">
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Total Pending</h6>
                                    <h2 class="m-b-0">3</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-block" style="padding: 32px; text-align: center;">
                        <a href="#">
                            <div class="row align-items-center m-l-0">
                                <div class="col-auto" style="text-align: center;">
                                </div>
                                <div class="col-auto">
                                    <h6 class="text-muted m-b-10">Total Cancel</h6>
                                    <h2 class="m-b-0">2</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <h3>Recent Orders</h3>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Placed On</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>608369042677065</td>
                        <td>27/07/2020</td>
                        <td></td>
                        <td>৳ 850</td>
                        <td>Deliver</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('web.partials.footer')








