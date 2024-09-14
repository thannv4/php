<?php
if (session_status() != 2) {
    session_start();
}

if (!isset($_SESSION['makh'])) {
    header('Location: /NYH/ckhachhang/dangnhap');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../mvc/public/css/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .cart-page {
            /* margin: 80px auto; */
            margin-top: 50px;
            margin-right: 50px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-left: 10%;
            margin-top: 10px;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: white;
            background: #085dad;
            font-weight: initial;
        }

        td {
            padding: 18px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td img {
            width: 150px;
            height: 100px;

        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #0040FF;
            width: 80%;
            max-width: 300px;
            margin-right: 150px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }

        .cart-page .tt {
            margin-left: 800px;

        }
    </style>
</head>

<body>
    <div id="header">
        <?php include "./mvc/views/HG/header.php"; ?>
    </div>
    <div class="small-container cart-page">

        <table>
            <tr>
                <th>HÌNH ẢNH</th>
                <th>TÊN MÁY TÍNH</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ BÁN</th>
                <th>THÀNH TIỀN</th>
                <th>XOÁ</th>
            </tr>
            <?php
            $path = "/NYH/public/image/anhmaytinh/";
            $giohang = isset($data['hoadon']) ? $data['hoadon'] : [];
            $tongtien = 0;
            for ($i = 0; $i < count($giohang); $i++) {
                $tongtien += $giohang[$i]['thanhtien'];
                echo '
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="' . $path . $giohang[$i]['hinhanh'] . '" alt="">
                            </div>
                        </td>
                        <td>' . $giohang[$i]['tenmaytinh'] . '</td>
                        <td><input type="" value="' . $giohang[$i]['soluongsp'] . '"></td>
                        <td>' . number_format($giohang[$i]['gia'], 0, ',', '.') . ' VNĐ</td>
                        <td>' . number_format($giohang[$i]['thanhtien'], 0, ',', '.') . '</td>
                        <td><a class="btn btn-danger" href="/NYH/choadon/xoachitiethoadon/' . $giohang[$i]['idchitiethoadon'] . '">
                                <i class="fas fa-trash-alt"></i>
                                Xóa
                            </a>
                        </td>
                    </tr>
                ';
            }
            ?>
        </table>
        <form action="/NYH/choadon/thanhtoan" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row ml-5">
                        <div class="form-group col-lg-6">
                            <label for="tenkh">Họ và tên</label>
                            <input type="text" class="form-control" id="tenkh" name="tenkh" value="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="diachi">Địa chỉ</label>
                            <input type="text" class="form-control" id="diachi" name="diachi" value="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sdt">Số điện thoại</label>
                            <input type="text" class="form-control" id="sdt" name="sdt" value="">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="">
                        </div>
                    </div>
                </div>
                <input type="hidden" value="<?= $giohang[0]['mahd'] ?>" name="mahd" id="mahd">
                <input type="hidden" value="<?= $tongtien ?>" name="tongtien" id="tongtien">
                <div class="col-lg-6">
                    <div class="total-price">
                        <table>
                            <tr>
                                <td>Tổng tiền</td>
                                <td><?= number_format($tongtien, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/NYH/ctrangchu/" class="btn btn-outline-success">XEM THÊM</a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-primary">Đặt hàng</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </form>
    </div>


    </div>
    <div id="footer">
        <?php include "./mvc/views/HG/footer.php"; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>