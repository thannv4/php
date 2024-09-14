<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="header">
        <?php include "./mvc/views/HG/header.php"; ?>
    </div>
    <div class="loailaptop">
        <h1>Tìm kiếm: <?= isset($data['tentimkiem']) ? $data['tentimkiem'] : ""; ?></h1>
    </div>
    <!-- sản phẩm danh mục-->

    <div class="sanpham">
        <div class="row spnb">
            <?php
            $path = "/NYH/public/image/anhmaytinh/";
            $sanphamtimkiem = isset($data['sanphamtimkiem']) ? $data['sanphamtimkiem'] : [];
            for ($i = 0; $i < count($sanphamtimkiem); $i++) {
                echo '
                            <div class="col sp">
                                <a href="/NYH/cmaytinh/getsanphambymamt/' . $sanphamtimkiem[$i]['mamt'] . '"><img src="' . $path . $sanphamtimkiem[$i]['hinhanh'] . '" alt=""><a></a>
                            <div class="sp1">
                                <p>' . $sanphamtimkiem[$i]['tenmaytinh'] . '</p>
                                <button>' . $sanphamtimkiem[$i]['ram'] . '</button>
                                <button>' . $sanphamtimkiem[$i]['ocung'] . '</button>
                                <h2>' . number_format($sanphamtimkiem[$i]['gia'], 0, ',', '.') . ' VNĐ</h2>
                            </div>
                            </div>
                        ';
            } ?>
        </div>
    </div>
    <div id="footer">
        <?php include "./mvc/views/HG/footer.php"; ?>
    </div>
</body>

</html>