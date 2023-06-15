<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>HSH DESIGN FOR FUTURE | Home</title>

    <!-- Favicon  -->
   
    <link rel="icon" href="/user/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/user/css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="{{ route('search') }}" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="/resources/user/img/img/core-img/search.png" alt=""></button>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="/user/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
            <div class="container">
   
</div>

                <a href="{{route('index')}}"><img src="/user/img/core-img/logo.png" alt=""></a>
            </div>
            
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                    <li><a href="{{route('index')}}">Product</a></li>
                    <li><a href="{{route('cart')}}">Cart</a></li>
                    <li><a href="{{ route('checkoutpage') }}">Checkout</a></li>

                    <li> @if (session()->has('khachhang'))
                        <a>Xin chào: {{ session('khachhang')->HoTen }}</a>
                        
                         @endif
                    </li>
                </ul>
            </nav>
            @if(session('success'))
            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            @endif
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                @if (session()->has('khachhang'))
                    <a href="login" class="btn amado-btn mb-15"> <i class="fa-solid fa-right-to-bracket"></i>LOGOUT</a>
                @else
                    <a href="login" class="btn amado-btn mb-15"> <i class="fa-solid fa-right-to-bracket"></i>LOGIN</a>
                @endif
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
               
                <a href="#" class="fav-nav"><img src="/user/img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="/user/img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
        
        <div class="section-one">
            <div class="container1">
               
                <div class="row">
                    @foreach ($sanpham as $sp) 
                    <div class="inner-box">
                    
                    <img src="{{ asset('user/img/product-imgs/' . $sp->image) }}" alt="" width="300px">
                   <div class="product-name"><a href="{{route('editUser',$sp->MaSP)}}">{{$sp->tensp}}</a></div>
                        <div class="product-price"><a href="{{route('editUser',$sp->MaSP)}}">{{$sp->gia}} $</a></div>
                       
                    </div>
                    @endforeach
                         
                </div>
                
            </div>
            <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item">{{ $sanpham->links('pagination::bootstrap-4') }}</li>

                            </ul>
                        </nav>
                    </div>
                </div>
        </div> 
        
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="/user/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/user/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/user/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/user/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/user/js/active.js"></script>

</body>

</html>