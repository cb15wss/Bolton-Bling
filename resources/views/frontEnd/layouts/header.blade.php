<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                        <a href="{{ url('/') }}" class="navbar pull-left"><img src="{{ asset('img/Bolton.png')}}" alt="Bolton Bling logo"></a></div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="{{url('/login_page')}}"><i class="fa fa-user"></i>Register</a></li>

                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
    <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active">Home</a></li>
                           <!-- <li class="dropdown"><a href="{{url('/shop')}}">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/womenRings')}}">Rings</a></li>
                                    <li><a href="{{url('/womenNecklaces')}}">Necklaces</a></li>
                                    <li><a href="{{url('/womenBracelets')}}">Bracelets</a></li>
                                    <li><a href="{{url('/womenEarRings')}}">Earrings</a></li>
                                    <li><a href="{{url('/womenWatches')}}">Watches</a></li>
                                </ul>
                            </li>-->
                            <li><a href="{{url('/shop')}}">Shop</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <li><a href="{{url('/faq')}}">FAQ</a></li>
                        </ul>
                    </div>
            </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--/header-->
<body>
<div>
    <div class="container">

        <div><img class="banner" src="{{ asset('img/bling2.jpg')}}" alt="hero image"></div>
    </div>
</div>
</body>
