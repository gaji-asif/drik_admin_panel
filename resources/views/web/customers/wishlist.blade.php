@include('web.partials.header')

<div class="row col-md-10 offset-md-1" style="min-height: 450px; background-color: #eff0f4;">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <p>
                    <span>
                        <img width="40" class="rounded-circle" src="{{ asset(Session::get('users_img')) }}" class="img-radius" alt="">
                    </span>
                    <span>{{ Auth::user()->name }}</span>
                </p>
                <hr>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ ('your-dashboard') }}">Dashboard</a>
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
            <div class="container">
        <h3>My Wishlist</h3>
        <div class="table-responsive">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Add to Card</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre"></td>
                        <td>৳ 850</td>
                        <td><button type="button" class="btn btn-info btn-sm">+<i class="fa fa-shopping-cart"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>

@include('web.partials.footer')