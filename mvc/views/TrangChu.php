<?php
// session_start();
// require_once "./mvc/bridge.php";
// $myApp = new App();
//  echo "abc";
//  echo $_GET["url"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        #content .hi {
            margin-top: 10px;
            width: 800px;
            height: 100px;
            /* background-color: chartreuse; */
            text-align: center;
            margin-left: 260px;
        }

        .hi h2 {
            margin-top: 50px;
            font-size: 30px;
            text-align: center;
            font-family: 'Dela Gothic One', cursive;
            color: #3A01DF;
        }

        .hi span {
            font-size: 25px;
            text-align: center;
        }

        .sanpham {
            margin-top: 10px;
        }

        .c1 {

            width: 250px;
        }

        .daylogo img {
            margin-top: 100px;
            height: 100px !important;
            width: 100px !important;
            margin-left: 75px;
        }

        .daylogo p {
            margin-top: 10px;
            text-align: center;
        }

        /* ------campus------ */
        .campus {
            width: 100%;
            height: auto;
            text-align: center;
            padding-top: 58px;
            padding-left: 5%;
        }

        .campus-col {
            flex-basis: 32%;
            border-radius: 10px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .campus-col img {
            width: 100%;
            height: 500px;
            display: block;
        }

        .layer {
            background: transparent;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: 0.5s;
        }

        .layer:hover {
            background: rgba(226, 0, 0, 0.7);
        }

        .layer p {
            width: 100%;
            font-weight: 500;
            color: #fff;
            font-size: 20px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            opacity: 0;
            transition: 0.5s;
            text-align: center;
        }

        .layer:hover p {
            bottom: 50%;
            opacity: 1;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- header-->
    <div id="header">
        <?php require_once "./mvc/views/HG/header.php"; ?>
    </div>
    <!-- slide-->
    <div id="slide">
        <?php require_once "./mvc/views/HG/slides.php"; ?>
    </div>
    <!-- content-->
    <div id="content">
        <div class="hi">
            <h2>CHÀO MỪNG BẠN ĐẾN VỚI
                <br> THAN STORE </br>
            </h2>
            <span style="border-bottom: 2px solid black;">Một số thương hiệu nổi bật</span>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row daylogo">
            <div class="col c1">

                <a href="/NYH/cmaytinh/getsanphambymaloai/1/"><img class="logomt" src="/NYH/public/image/hinhlogo/logohp3.jpg" alt=""></a>
                <p>HP - Hewlett-Packard là tập đoàn công nghệ thông tin lớn trên thế giới (1939)</p>

            </div>

            <div class="col c2">

                <a href="/NYH/cmaytinh/getsanphambymaloai/2/"><img class="logomt" src="/NYH/public/image/hinhlogo/logolenovo.png" alt=""></a>
                <p>LENOVO (Lenovo Group Ltd) là tập đoàn đa quốc gia về công nghệ máy tính (1984)</p>

            </div>

            <div class="col c3">

                <a href="/NYH/cmaytinh/getsanphambymaloai/3/"><img class="logomt" src="/NYH/public/image/hinhlogo/lodell1.png" alt=""></a>
                <p>DELL là thương hiệu lâu năm đã từng là hãng cung cấp máy tính cá nhân đứng đầu thế giới</p>

            </div>

            <div class="col c4">

                <a href="/NYH/cmaytinh/getsanphambymaloai/4/"><img class="logomt" src="/NYH/public/image/hinhlogo/logoasus.png" alt=""></a>
                <p>ASUS- một thương hiệu laptop đến từ Đài Loan</p>

            </div>

            <div class="col c5">
                <a href="/NYH/cmaytinh/getsanphambymaloai/5/"><img class="logomt" src="/NYH/public/image/hinhlogo/mb1.jpg" alt=""></a>
                <p>MACBOOK là "dòng máy tính xách tay cao cấp bán chạy nhất thế giới</p>

            </div>

        </div>
    </div>

    <div class="hi">
        <h2>THÔNG TIN</h2>
    </div>

    

    <section class="campus">
        <h3>SẢN PHẨM TIN CẬY, TIỆN ÍCH</h3>
        <p>Có phải bạn luôn bân khuân với những sản phẩm trên thị trường hiện nay</p>
        <div class="row">
            <div class="campus-col">
                <img src="/NYH/public/image/anhlaptop/1.jpg" alt="">
                <div class="layer">
                    <p>Sự phát triển của công nghệ thông tin cho phép con người ngày càng có những sản phẩm điện tử hiện đại và tiện lợi</p>
                </div>
            </div>
            <div class="campus-col">
                <img src="/NYH/public/image/anhlaptop/3.jpg" alt="">
                <div class="layer">
                    <p><br>Nhỏ gọn và thuận tiện khi di chuyển
                       <br>Công năng tra cứu thông rin hữu ích
                       <br>Thực hiện các công việc văn phòng
                       <br>Nơi lưu trữ dữ liệu an toàn và tiện lợi nhất
                       <br>Phục vụ nhu cầu giải trí
                    </p>
                </div>
            </div>
            <div class="campus-col">
                <img src="/NYH/public/image/anhlaptop/2.jpg" alt="">
                <div class="layer">
                    <p><br>Tốc độ cao
                       <br>Độ chính xác
                       <br>Lưu trữ
                       <br>Tự động hoá
                       <br>Tính thống nhất
                       <br>Tính đa dụng
                       <br>Tiết kiệm chi phí
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="haha" style="border-bottom: 1px solid #BDBDBD;margin-top: 100px; ">
        <p style="font-size: 25px; margin-left: 50px; color: #0000FF; font-weight: bold;">SẢN PHẨM NỔI BẬT</p>
    </div>
    <!-- sản phẩm nổi bậc-->


    <div class="row spnb">
        <?php
        $path = "/NYH/public/image/anhmaytinh/";
        $sanphamnoibat = isset($data['sanphamnoibat']) ? $data['sanphamnoibat'] : [];
        for ($i = 0; $i < count($sanphamnoibat); $i++) {
            echo '
            <div class="col sp">
                <a href="/NYH/cmaytinh/getsanphambymamt/' . $sanphamnoibat[$i]['mamt'] . '"><img src="' . $path . $sanphamnoibat[$i]['hinhanh'] . '" alt=""></a>
              <div class="sp1">
                <p>' . $sanphamnoibat[$i]['tenmaytinh'] . '</p>
                <button>' . $sanphamnoibat[$i]['ram'] . '</button>
                <button>' . $sanphamnoibat[$i]['ocung'] . '</button>
                <h2>' . number_format($sanphamnoibat[$i]['gia'], 0, ',', '.') . ' VNĐ</h2>
              </div>
            </div>

            ';
        } ?>
    </div>
    <!-- footer-->
    <div id="footer">
        <?php include "./mvc/views/HG/footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>