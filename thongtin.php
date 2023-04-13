<!DOCTYPE html>
<html lang="en">
<?php
include "xuli/connect.php";
session_start();
// session_destroy();
?>
<link rel="stylesheet" href="assets/css/login-form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<body>
  <?php
  if (empty($_SESSION['email'])) {
    
    echo "<script>
                    alert('Chưa có thông tin tài khoản nào !') ;
                    window.location.href='account.php';
                         </script>
             ";
  }
  ?>
  <section class="container">
    <header>Thông tin tài khoản</header>

    <form action="handle_register.php" method="POST" name="TK" onsubmit="return validateform()" enctype="multipart/form-data" class="form">

      <div class="input-box">
        <label>Họ và tên</label>
        <input type="text" name="Ten_KH" placeholder="Tên khách hàng" value="<?php
                                                                              if (isset($_SESSION['tenkh'])) {
                                                                                echo $_SESSION['tenkh'];
                                                                              }
                                                                              ?>" />
      </div>

      <div class="input-box">
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="Email" value="<?php
                                                                              if (isset($_SESSION['email'])) {
                                                                                echo $_SESSION['email'];
                                                                              }
                                                                              ?>" />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Giới tính</label>
          <input type="text" name="telephone" id="telephone" placeholder="Giới tính" value="<?php
                                                                                                  if (isset($_SESSION['gender'])) {
                                                                                                    echo $_SESSION['gender'];
                                                                                                  }
                                                                                                  ?>" />
        </div>
        <div class="input-box">
          <label>Số điện thoại</label>
          <input type="text" name="date" placeholder="Số điện thoại" value="<?php
                                                                        if (isset($_SESSION['phone'])) {
                                                                          echo $_SESSION['phone'];
                                                                        }
                                                                        ?>" />
        </div>

        <div class="input-box">
          <label>Đại chỉ</label>
          <input type="text" name="date" placeholder="Đại chỉ" value="<?php
                                                                        if (isset($_SESSION['address'])) {
                                                                          echo $_SESSION['address'];
                                                                        }
                                                                        ?>" />
        </div>
     </div>
        <p><a style="margin-left: 800px; " href="http://localhost:8080/Project-sushi-/index.php#home">Trở về</a></p>
      </div>

    </form>
    
  </section>
  
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="../general/script/chat.js"></script>
<script src="../general/script/responses.js"></script>
<script src="../general/script/slider.js"></script>

</html>