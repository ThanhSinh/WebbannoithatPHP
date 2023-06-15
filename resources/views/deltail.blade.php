<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>HSH DESIGN FOR FUTURE | Product Details</title>

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
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="/user/img/core-img/search.png" alt=""></button>
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
                <a href="{{route('index')}}"><img src="/user/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                    <li class="active"><a href="{{route('index')}}">Product</a></li>
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

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url('/user/img/product-imgs/{{ $sanpham->image }}');">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url('/user/img/product-imgs/{{ $sanpham->image1 }}');">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url('/user/img/product-imgs/{{ $sanpham->image2 }}');">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url('/user/img/product-imgs/{{ $sanpham->image }}');">        
                                    </li>
                                         
                                    
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="/user/img/product-imgs/{{ $sanpham->image }}">
                                            <img class="d-block w-100" src="/user/img/product-imgs/{{ $sanpham->image }}" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="/user/img/product-imgs/{{ $sanpham->image1 }}">
                                            <img class="d-block w-100" src="/user/img/product-imgs/{{ $sanpham->image1 }}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="/user/img/product-imgs/{{ $sanpham->image2 }}">
                                            <img class="d-block w-100" src="/user/img/product-imgs/{{ $sanpham->image2 }}" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                    <div id="canvas-container"></div>
                                        <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/loaders/GLTFLoader.js"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js"></script>
                                        <script>
                                          const scene = new THREE.Scene();
                                          const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
                                          const renderer = new THREE.WebGLRenderer({ alpha: true }); // Set alpha to true for transparent background
                                          renderer.setSize(window.innerWidth * 0.8, window.innerHeight * 0.8);
                                          const canvasContainer = document.getElementById('canvas-container');
                                          canvasContainer.appendChild(renderer.domElement);
                                      
                                          const loader = new THREE.GLTFLoader();
                                          let model;
                                          loader.load('/user/3D/{{ $sanpham->image3d }}', function(gltf) {
                                              model = gltf.scene;
                                              model.scale.set(0.4, 0.4, 0.4); // thu nhỏ hình ảnh 3D đến 50%
                                              scene.add(model);
                                          });
                                      
                                          const light = new THREE.HemisphereLight(0xffffff, 0x000000, 2);
                                          scene.add(light);
                                      
                                          camera.position.set(0, 0, 2);
                                      
                                          function animate() {
                                            requestAnimationFrame(animate);
                                            renderer.render(scene, camera);
                                          }
                                      
                                          // Set the background color to white
                                          renderer.setClearColor(0xffffff, 0);
                                      
                                          // Center the canvas container
                                          canvasContainer.style.display = 'flex';
                                          canvasContainer.style.justifyContent = 'center';
                                          canvasContainer.style.alignItems = 'center';
                                      
                                          const img = new Image();
                                          img.onload = function() {
                                            const canvas = document.createElement('canvas');
                                            canvas.width = this.naturalWidth;
                                            canvas.height = this.naturalHeight;
                                            const context = canvas.getContext('2d');
                                            context.drawImage(this, 0, 0);
                                            const dataURL = canvas.toDataURL();
                                            document.querySelector('.carousel-item.active .gallery_img img').src = dataURL;
                                          }
                                      
                                          // Add event listener to canvas for mousedown event
                                          renderer.domElement.addEventListener('mousedown', function() {
                                            // Initialize OrbitControls and add to renderer
                                            const controls = new THREE.OrbitControls(camera, renderer.domElement);
                                            animate();
                                            // Remove event listener to prevent further initialization of controls
                                            renderer.domElement.removeEventListener('mousedown', arguments.callee);
                                          });
                                        </script>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">{{ $sanpham->tensp }}</p>
                                <a href="product-details.html">
                                    <h6>{{ $sanpham->gia }} $</h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid quae eveniet culpa officia quidem mollitia impedit iste asperiores nisi reprehenderit consequatur, autem, nostrum pariatur enim?</p>
                            </div>

                            <!-- Add to Cart Form -->
                            
                            <form action="{{ route('save-cart', $sanpham->MaSP) }}" method="POST">
                                @csrf
                                <div class="cart-btn d-flex mb-50">
                                   
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) && qty > 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">

                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" class="btn amado-btn w-100">Add to Cart</button>
                                <input type="hidden" name="MaSP" value="{{ $sanpham->MaSP }}">
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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