<?php
if (!isset($_SESSION['idadmin'])) {
	header('Location: /NYH/ckhachhang/dangnhap');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>quan li khach hàng</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="/NYH/public/css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
	<div class="container my-4">
		<div class="row">
			<div class="col-12 my-2">
				<div class="row d-flex align-items-center">
					<div class="col-4">
						<a href="/NYH/cquanlimt/quanli/";><img class="h100px mw-100" src="/NYH/public/image/hinhlogo/logo1.png" alt=""></a>
					</div>
					<div class="col-8 text-center">
						<h1>QUẢN LÍ KHÁCH HÀNG</h1>
					</div>
				</div>
			</div>
			<div class="col-12  my-2 input-group mt-5">
				<input type="text" class="form-control" placeholder="Nhập tên khách hàng..." id="timkiem-khachhang">
				<div class="input-group-append">
					<button class="btn btn-primary" id="timkiem-btn"><i class="fas fa-search"></i></button>
				</div>
			</div>
			<div class="col-12 my-2">
				<table class="table table-bordered">
					<thead>
						<tr style="background: #81BEF7" class="text-center">
							<th>STT</th>
							<th>Họ & tên</th>
							<th>Số điện thoại</th>
							<th></th>
							<th></th>

						</tr>
					</thead>
					<tbody id="table-khachhang">

					<tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>



</body>

</html>

<!-- Form hien thi thong tin khach hang -->
<div class="container" id="dialog-thongtinkhachhang">
	<div class="card">
		<div class="row">
			<div class="col-md-6">
				<!-- hinh anh nguoi dung -->
				<div class="row px-5 py-2">
					<div class="col-12 my-2 text-center">
						<label for="">Ảnh đại diện</label>
					</div>
					<div class="col-12">
						<button class="w-100 h300px bg-white ">
							<img src="" id="hinhanh" class="mw-100 mh-100" alt="">
						</button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row px-5 py-2">
					<div class="col-12 my-2">
						<label for="hoten">Họ và tên:</label>
						<input type="text" class="form-control" id="hoten" readonly>
					</div>
					<div class="col-12 my-2">
						<label for="hoten">Email:</label>
						<input type="text" class="form-control" id="email" readonly>
					</div>
					<div class="col-12 my-2">
						<label for="hoten">Số điện thoại:</label>
						<input type="text" class="form-control" id="sodienthoai" readonly>
					</div>
					<div class="col-12 my-2 d-flex justify-content-end">
						<button class="btn btn-secondary" id="btn-thoat">
							<i class="fas fa-times"></i>
							Thoát</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	loadKhachhang()
	function loadKhachhang() {
		$.post("/NYH/ckhachhang/getKhachhang", {}, function(data) {
			dataSet = JSON.parse(data)
			let i = 1;
			$('#table-khachhang').empty()
			dataSet.forEach((item) => {
				let duyet = "<i class='fas fa-pen'></i> Duyệt"
				let classitem = "btn btn-primary"
				let onclick = `href='/NYH/ckhachhang/duyetkhachhang/${item.makh}'`;
				if (item.kichhoat == 1) {
					duyet = "Đã duyệt";
					classitem = "btn btn-success text-white";
					onclick = "";
				}
				$('#table-khachhang').append(`
						<tr> 
							<td>${i}</td>
							<td>${item.hoten}</td>
							<td>${item.sdt}</td>
							<td class="text-center">
								<button class="btn btn-primary" onclick="hienthithongtinkhachhang(${item.makh})">
									<i class="fas fa-eye"></i>
									Xem chi tiết
								</button>
							</td>
							<td class="text-center"><a ${onclick} class="${classitem}">${duyet}</a></td>
						</tr>
					`)
				i++;
			})
		})
	}
	dialog_thongtinkhachhang = $('#dialog-thongtinkhachhang').dialog({
		title: 'Thông tin khách hàng',
		autoOpen: false,
		modal: true,
		width: 'auto',
	})

	function hienthithongtinkhachhang(makh) {
		dialog_thongtinkhachhang.dialog('open')
		$.post('/NYH/ckhachhang/getKhachhangByMakh', {
			makh: makh
		}, function(data) {
			data = JSON.parse(data)
			khachhang = data[0]
			$('#dialog-thongtinkhachhang #hoten').val(khachhang['hoten'])
			$('#dialog-thongtinkhachhang #email').val(khachhang['email'])
			$('#dialog-thongtinkhachhang #sodienthoai').val(khachhang['sdt'])
			$('#dialog-thongtinkhachhang #hinhanh').attr('src', '/NYH/public/image/khachhang/' + khachhang['hinhanh'])
		})
	}
	$('#dialog-thongtinkhachhang #btn-thoat').click(() => {
		dialog_thongtinkhachhang.dialog('close')
	})
	$('#timkiem-btn').click(() => {
		let tenkhachhang = $('#timkiem-khachhang').val()
		if (tenkhachhang.length > 0) {
			$.post("/NYH/ckhachhang/timkiemkhachhang", {
				tenkhachhang: tenkhachhang
			}, function(data) {
				dataSet = JSON.parse(data)
				let i = 1;
				$('#table-khachhang').empty()
				dataSet.forEach((item) => {
					let duyet = "<i class='fas fa-pen'></i> Duyệt"
					let classitem = "btn btn-primary"
					let onclick = `href='/NYH/ckhachhang/duyetkhachhang/${item.makh}'`;
					if (item['kichhoat'] == 1) {
						duyet = "Đã duyệt";
						classitem = "btn btn-success text-white";
						onclick = "";
					}
					$('#table-khachhang').append(`
						<tr> 
							<td>${i}</td>
							<td>${item.hoten}</td>
							<td>${item.sdt}</td>
							<td class="text-center">
								<button class="btn btn-primary" onclick="hienthithongtinkhachhang(${item.makh})">
									<i class="fas fa-eye"></i>
									Xem chi tiết
								</button>
							</td>
							<td class="text-center"><a ${onclick} class="${classitem}">${duyet}</a></td>
						</tr>
					`)
					i++;
				})
			})
		} else {
			loadKhachhang()
		}
	})
</script>