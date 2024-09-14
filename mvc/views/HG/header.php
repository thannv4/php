<?php
require_once __DIR__ . "/../../models/database.php";
$query = "select * from phanloai";
$db = new database();
$phanloai = $db->select($query);

if (!isset($_SESSION['login'])) {
  $linktaikhoan = '/NYH/ckhachhang/dangnhap';
} else {
  $linktaikhoan = '/NYH/ckhachhang/khcapnhatthongtin';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>THAN STORE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="/NYH /public/css/sanpham.css">
  <link rel="stylesheet" href="/NYH /public/css/logo.css">
  <link rel="stylesheet" href="/NYH /public/css/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>  
</head>

<body>
  <div id="header">
    <img class="ha" src="/NYH/public/image/hinhlogo/logo1.png" alt="">

    <nav class="navbar navbar-expand-md nv">
      <ul class="navbar-nav mn">
        <li class="nav-item">
          <a class="nav-link" href="/NYH/ctrangchu/">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/NYH/ctrangchu/gioithieu/">GIỚI THIỆU</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown">SẢN PHẨM</a>
          <div class="dropdown-content">
            <?php
            for ($i = 0; $i < count($phanloai); $i++) {
              echo '<a class="dropdown-item" href="/NYH/cmaytinh/getsanphambymaloai/' . $phanloai[$i]['maloai'] . '/">' . $phanloai[$i]['tenloai'] . '</a>
              <div class="dropdown-divider"></div>';
            }
            ?>

            
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/NYH/ctrangchu/lienhe/"> LIÊN HỆ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= $linktaikhoan ?>">TÀI KHOẢN</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="ne">
    <li class="nav-item icon search">
      <div id="wrap">
        <form autocomplete="on" action="/NYH/cmaytinh/timkiem/" method="POST">
          <i class="fas fa-search" style="font-size: 25px; margin-top: 10px;"></i>
          <input id="search" name="searchtenmaytinh" type="text" placeholder="Nhập tên sản phẩm... ">
        </form>
      </div>
    </li>
    <li class="nav-item icon gh">
      <a class="nav-link" href="/NYH/choadon/giohang  "><i class="fas fa-shopping-cart"></i></a>
    </li>
    <li class="nav-item icon fb">
      <a class="nav-link" href="https://www.facebook.com/profile.php?id=100025214472078"><i class="fab fa-facebook"></i></a>
    </li>
    <li class="nav-item icon dt">
      <a class="nav-link" href="https://chat.zalo.me/"><i class="fas fa-phone-alt"></i></a>
    </li>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>


<script>

</script>