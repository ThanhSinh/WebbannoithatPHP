<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('donhang') }}">
                <i class="fas fa-shopping-cart"></i> Cart
              
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('index.index') }}">
                <i class="fas fa-store"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('kh') }}">
                <i class="far fa-user"></i> User
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">ID</th>
                    <th scope="col">Manufacturer</th>
                    <th scope="col">Type Name</th>
                    <th scope="col">Product</th>
                    <th scope="col">Describe</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                   
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sanpham as $sp)
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">{{$sp->MaSP}}</td>
                    <td >{{$sp->hang}}</td>
                    <td >{{$sp->loaisanpham->TenLSP}}</td>
                    <td>{{$sp->tensp}}</td>
                    <td>{{$sp->mota}}</td>
                    <td>{{$sp->gia}}</td>
                    <td>{{$sp->sl}}</td>
                    <td><img height="70px" width="70px" src="{{ asset('user/img/product-imgs/' . $sp->image) }}"></td>
                   
                    <td>
                      <form action="{{route('index.destroy',$sp->MaSP)}}" method="post">
                          <a href="{{route('admin.edit',$sp->MaSP)}}" class="btn btn-info">Sua</a>
                      @csrf 
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Xoa</button>
                      </form>
                  </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="{{route('index.create')}}"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                @foreach ($loaisanpham as $lsp)
                  <tr>
                    <td class="tm-product-name">{{$lsp->TenLSP}}</td>
                    <td class="text-center">
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>

    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.html";
        });
      });
    </script>
  </body>
</html>