<style type="text/css">
    .nav-link{
        margin-right: 45px;
    }
</style>
<div class="row">
    <div class="top_layer text-center mb-3">
        <img width="30%" src="{{asset('public/images/Drik images logo.png')}}">
    </div>
</div>
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
                    <!-- @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('filter',['category' => $category->id])}}">{{$category->cat_name}}</a>
                        </li>
                    @endforeach -->

                    <li class="nav-item">
                       <a class="nav-link" href="#">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">About Us</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Services</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Photoghapers</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Stock</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Contact</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Faq</a>
                   </li>


                </ul>

                <div class="header_actions text-right navbar p-0">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown">
                           <!--  <a class="nav-link" href="sign-in.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-user"></i>asdasd
                            </a> -->

                            <a href="{{route('user-login')}}" class="btn btn-block theme-btn sign-up">Log In</a>
                            <div class="dropdown-menu user-custom" aria-labelledby="navbarDropdown">
                                @if(isset($user))
                                <div class="author">
                                    <div class="author-img">
                                        <img class="w-100" src="images/img-21.jpg" alt="">
                                    </div>
                                    <div class="author-info">
                                        <span class="author-name">{{$user->name}}</span>
                                    </div>
                                </div>

                                <div class="actions text-center">
                                    <button class="btn author-action-button"><i class="icofont-like"></i>&nbsp;50</button>
                                    <button class="btn author-action-button"><i class="icofont-star"></i>&nbsp;50</button>
                                    <button class="btn author-action-button"><i class="icofont-share"></i>&nbsp;50</button>

                                    <div class="form-row mt-3">
                                        <div class="col-md-6">
                                            <a href="sign-in.html" class="btn btn-block theme-btn sign-in">Profile</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('user-logout')}}" class="btn btn-block theme-btn sign-up">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                   <!--  <div class="form-row mt-3">
                                        <div class="col-md-12">
                                            <a href="{{route('user-login')}}" class="btn btn-block theme-btn sign-up">Log In</a>
                                        </div>
                                    </div> -->
                                @endif

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
