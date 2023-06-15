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
    <title>HSH DESIGN FOR FUTURE | Sign-up</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>Sign-up</h1>
      </div>
      <div class="main">
      <form action="{{route('KHDK')}}" method="POST">
      @csrf
          <span>
          <i class="fas fa-user"></i>
            <input type="text" placeholder="Họ Tên" name="HoTen" required="" /> </span>
          <br/>
          <span>
              <i class="fas fa-venus-mars"></i>
              <select id="gender" name="GioTinh" required>
                  <option value="">Chọn giới tính</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
              </select>
          </span>
          <br/>
          <span>
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="User" name="tk"  required=""/> </span
          ><br />
          <span>
            <i class="fa-solid fa-key"></i>
            <input type="password" placeholder="password" name="mk" required="" /> </span
          ><br />
          <span>
            <i class="fa-solid fa-phone"></i>
            <input type="text" placeholder="SĐT" name="SDT"  required=""/> </span
          ><br />
          
          
          <span>
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" placeholder="Địa chỉ" name="diachi"  required=""/> </span
          ><br />
          
          
          <button type="submit">Sign-up</button>
          <div class="Sign-up">
            <a href="./register.html">Sign-up</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
