<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .spnb .sp {
            width: 100%;
            height: 400px;
            /* background-color: darkgray; */
        }

        .spnb .sp {
            border: 0.5px solid #e5e5e5;
            margin-right: 5px;
        }

        .sp img {
            width: 170px;
            height: 180px;
            margin-top: 10px;
            margin-left: 20px;
        }

        .sp1 {
            margin-left: 30px;
        }

        .spnb .sp1 button {
            border: none;
        }

        .sp1 h2 {
            font-size: 20px;
            color: red;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="row spnb">
        <?php
        $path = "/NYH/public/image/anhmaytinh/";
        $sanphamnoibat = isset($data['sanphamnoibat']) ? $data['sanphamnoibat'] : [];
        for ($i = 0; $i < count($sanphamnoibat); $i++) {
            echo '
            <div class="col sp">
                <img src="' . $path . $sanphamnoibat[$i]['hinhanh'] . '" alt="">
              <div class="sp1">
                <p>' . $sanphamnoibat[$i]['tenmaytinh'] . '</p>
                <button>' . $sanphamnoibat[$i]['ram'] . '</button>
                <button>' . $sanphamnoibat[$i]['ocung'] . '</button>
                <h2>' . $sanphamnoibat[$i]['gia'] . '</h2>
              </div>
            </div>

            ';
        } ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>