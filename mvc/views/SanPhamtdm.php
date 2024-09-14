<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <div id="header">
        <?php include "./mvc/views/HG/header.php";
            $path = "/NYH/public/image/hinhlogo/";
            ?>
    </div>
    <div class="haha" style="margin-top: 30px;">
        <p class="sp" style="font-size: 30px; color: black; font-weight: bold; text-align: center; border-bottom: 2px solid black;">SẢN PHẨM THEO DANH MỤC</p>
    </div>
    <div class="container-fluid">
        <div class="row daylogo">
            <div class="col c1">

                <a href="/NYH/cmaytinh/getsanphambymaloai/1/"><img class="logomt" src="<?= $path ?>logohp3.jpg" alt=""></a>

            </div>

            <div class="col c2">

                <a href="/NYH/cmaytinh/getsanphambymaloai/2/"><img class="logomt" src="<?= $path ?>logolenovo.png" alt=""></a>

            </div>

            <div class="col c3">

                <a href="/NYH/cmaytinh/getsanphambymaloai/3/"><img class="logomt" src="<?= $path ?>lodell1.png" alt=""></a>

            </div>

            <div class="col c4">

                <a href="/NYH/cmaytinh/getsanphambymaloai/4/"><img class="logomt" src="<?= $path ?>logoasus.png" alt=""></a>

            </div>

            <div class="col c5">
                <a href="/NYH/cmaytinh/getsanphambymaloai/5/"><img class="logomt" src="<?= $path ?>mb1.jpg" alt=""></a>

            </div>

        </div>
    </div>
    <div class="loailaptop">
        <h1>
            <?= isset($data['sanphambymaloai']) ? $data['sanphambymaloai'][0]['tenloai'] : []; ?>
        </h1>
    </div>
    <!-- sản phẩm danh mục-->

    <div class="sanpham">
        <div class="row spnb">
            <?php
                $path = "/NYH/public/image/anhmaytinh/";
                $sanphamnoibat = isset($data['sanphambymaloai']) ? $data['sanphambymaloai'] : [];
                $sanphamnoibat = array_reverse($sanphamnoibat);
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
    </div>

    <div id="footer">
        <?php include "./mvc/views/HG/footer.php"; ?>
    </div>
</body>

</html>