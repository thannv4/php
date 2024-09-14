<?php
if (!isset($_SESSION['idadmin'])) {
	header('Location: /NYH/ckhachhang/dangnhap');
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý máy tính</title>
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
	<div class="container-fuild my-4">
		<div class="row">
			<div class="col-12 my-2">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-4">
						<a href="/NYH/cquanlimt/quanli/";><img class="h100px mw-100" src="/NYH/public/image/hinhlogo/logo1.png" alt=""></a>
						</div>
						<div class="col-8 text-center">
							<h1>QUẢN LÍ MÁY TÍNH</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 my-2 d-flex justify-content-around" style="margin-left: 200px!important">
				<a href="/NYH/cquanlimt/themmt/" class="btn btn-primary" style="width:300px;">
					<i class="fas fa-plus"></i>
					Thêm sản phẩm</a>
				<form>
					<div class="input-group" style="width: 800px!important; margin-right:210px;">
						<input type="text" class="form-control" placeholder="Nhập tên sản phẩm..." id="timkiem-sanpham" name="searchtenmaytinh">
						<button class="btn btn-primary" id="timkiem-btn" type="button"><i class="fas fa-search"></i></button>
					</div>
				</form>
			</div>
			<div class="col-12 my-2 d-flex justify-content-center">
				<table class="table table-bordered display" style="max-width: 95%;">
					<thead>
						<tr style="background: #81BEF7" class="text-center">
							<th>STT</th>
							<th>Hình ảnh</th>
							<th>Loại sản phẩm</th>
							<th>Tên máy tính</th>
							<th>CPU</th>
							<th>RAM</th>
							<th>Ổ cứng</th>
							<th>Màn hình</th>
							<th>Card màn hình</th>
							<th>Hệ điều hành</th>
							<th>Số lượng</th>
							<th>Giá</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="tb-maytinh">

					
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<tbody>

</body>


</html>

<script>
	loadMaytinh()

	function loadMaytinh() {
		$('#tb-maytinh').empty()
		$.post("/NYH/cmaytinh/getMaytinh", {}, function(data) {
			dataSet = JSON.parse(data)
			let i = 0
			dataSet.forEach((item) => {
				i++;
				$('#tb-maytinh').append(`
					<tr>
						<td>${i}</td>
						<td>
							<button class="h100px w100px border-0 bg-white">
								<img src="/NYH/public/image/anhmaytinh/${item.hinhanh}" alt="" class="mw-100 mh-100">
							</button>
						</td>
						<td class="text-center">${item.tenloai}</td>
						<td class="">${item.tenmaytinh}</td>
						<td class="">${item.cpu}</td>
						<td class="">${item.ram}</td>
						<td class="">${item.ocung}</td>
						<td class="">${item.manhinh}</td>
						<td class="">${item.cardmanhinh}</td>
						<td class="">${item.hedieuhanh}</td>
						<td class="">${item.soluong}</td>
						<td class="">${item.gia}</td>
						<td class="text-center">
							<a href="/NYH/cmaytinh/suathongtinmaytinh/${item.mamt}" class="btn btn-primary my-1"><i class="fas fa-pen-alt"></i> Chỉnh sửa</a>
							<a href="javascript:void(0)" onclick="xoamaytinh(${item.mamt})" class="btn btn-danger my-1"><i class="fas fa-trash"></i> Xóa</a>
						</td>
					</tr>
				`)
			})
		})
	}

	function xoamaytinh(mamt) {
		$.post("/NYH/cmaytinh/xoamaytinh", {
			mamt: mamt
		}, function(data) {
			if (data > 0) {
				alert("Xóa thành công!")
				loadMaytinh()
			} else {
				alert("Xóa thất bại!")
			}
		})
	}
	$('#timkiem-sanpham').change(() => {
		if ($('#timkiem-sanpham').val().length == 0) {
			loadMaytinh()
		}
	})
	$('#timkiem-btn').click(() => {
		let tensanpham = $('#timkiem-sanpham').val()
		if (tensanpham.length > 0) {
			$.post('/NYH/cmaytinh/timkiemMaytinhByTenmaytinh', {
				tensanpham: tensanpham
			}, function(data) {
				$('#tb-maytinh').empty()
				dataSet = JSON.parse(data)
				let i = 0
				dataSet.forEach((item) => {
					i++;
					$('#tb-maytinh').append(`
						<tr>
							<td>${i}</td>
							<td>
								<button class="h100px w100px border-0 bg-white">
									<img src="/NYH/public/image/anhmaytinh/${item.hinhanh}" alt="" class="mw-100 mh-100">
								</button>
							</td>
							<td class="text-center">${item.tenloai}</td>
							<td class="">${item.tenmaytinh}</td>
							<td class="">${item.cpu}</td>
							<td class="">${item.ram}</td>
							<td class="">${item.ocung}</td>
							<td class="">${item.manhinh}</td>
							<td class="">${item.cardmanhinh}</td>
							<td class="">${item.hedieuhanh}</td>
							<td class="">${item.soluong}</td>
							<td class="">${item.gia}</td>
							<td class="text-center">
								<a href="/NYH/cmaytinh/suathongtinmaytinh/${item.mamt}" class="btn btn-primary my-1"><i class="fas fa-pen-alt"></i> Chỉnh sửa</a>
								<a href="javascript:void(0)" onclick="xoamaytinh(${item.mamt})" class="btn btn-danger my-1"><i class="fas fa-trash"></i> Xóa</a>
							</td>
						</tr>
					`)
				})
			})
		} else {
			loadMaytinh()
		}
	})
</script>