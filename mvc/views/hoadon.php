<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container-fuild my-4">
		<div class="row">
			<div class="col-12 my-2">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-4">
						<a href="/NYH/cquanlimt/quanli/";><img class="h100px mw-100" src="/NYH/public/image/hinhlogo/logo1.png" alt=""></a>
						</div>
						<div class="col-8 text-center">
							<h1>QUẢN LÍ HOÁ ĐƠN</h1>
						</div>
					</div>
				</div>
			</div>
        </div>
</div>

    </div>
    <div class="container">
        <div class="row">
        <?php foreach ($data as $invoice) { ?>
                <div class="col-lg-3 my-2">
                    <div class="card h-100 w-100">
                        <div class="card-body">
                            <h4 class="card-title text-secondary"><?php echo '<strong>Số hoá đơn :</strong> ' . $invoice['mahd']; ?></h4>
                            <p class="card-text text-secondary"><?php echo '<strong>Tên khách hàng :</strong> ' . $invoice['tenkh']; ?></p>
                            <p class="card-text text-secondary"><?php echo '<strong>Địa chỉ :</strong> ' . $invoice['diachi']; ?></p>
                            <p class="card-text text-secondary"><?php echo '<strong>SĐT :</strong> ' . $invoice['sdt']; ?></p>
                            <p class="card-text text-secondary"><?php echo '<strong>Email :</strong> ' . $invoice['email']; ?></p>
                            <p class="card-text text-secondary"><?php echo '<strong>Tổng tiền :</strong> ' . $invoice['tongtien'] . '.VNĐ'; ?></p>
                            <hr>
                            <p class="card-text text-secondary"><?php echo '<strong>Thành tiền :</strong> ' . $invoice['tongtien'] . '.VNĐ'; ?></p>
                            
                            
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>