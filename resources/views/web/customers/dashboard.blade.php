@include('web.partials.header')

<div class="row col-md-10 offset-md-1" style="min-height: 450px; background-color: #eff0f4; padding-top: 10px; padding-bottom: 5px;">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <p>
                    <span>
                        <img width="40" class="rounded-circle" src="{{ asset($user->upload_img) }}" class="img-radius" alt="">
                    </span>
                    <span>{{ Auth::user()->name }}</span>
                </p>
                <hr>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                       <a class="nav-link active" href="{{ ('your-dashboard') }}">Dashboard</a>
                   </li>
                    <li class="nav-item">
                       <a class="nav-link" href="{{ ('customer-profile') }}">My Profile</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ ('wishlist') }}">My Wishlist</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ ('user-logout') }}">Log Out</a>
                   </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="card">
            <div class="col-lg-12">
                <div class="container">
                    <h3>Total Purchased</h3>
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
                                    <td><img src="cinqueterre.jpg" class="img-thumbnail" alt="No Image Found"></td>
                                    <td>৳ 850</td>
                                    <td>Deliver</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('web.partials.footer')
