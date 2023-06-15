<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/user/fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="/user/css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <!-- Title  -->
    <title>HSH DESIGN FOR FUTURE | Login</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>Login</h1>
        
      </div>
      <div class="main">
      <form method="POST" action="{{ route('kh.login') }}">
  @csrf
  <span>
    <i class="fa-solid fa-user"></i>
    <input type="text" placeholder="Username" name="tk" required="" />
  </span><br />
  <span>
    <i class="fa-solid fa-key"></i>
    <input type="password" placeholder="password" name="mk" required=""/>
  </span><br />
  
    <input type="submit" value="Đăng nhập" style="text-align: center; padding: 0; margin: 0; background-color: #BF00FF; border-radius: 45px;">
 
  
  <div class="Sign-up">
    <a href="{{ route('showforget') }}">Sign-up</a>
  </div>
</form>

      </div>
    </div>
  </body>
</html>
