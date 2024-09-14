<div class="row">
    <form action="" method="post">
        <div class="col-12  ttkh">
            <h1>THÔNG TIN TÀI KHOẢN </h1>
        </div>
        <div class="col-md-6">
            <img src="/NYH/public/image/hinhbia/att1.jpg " alt="">
            <label for="hinhanh">Cập nhật ảnh</label>
            <input type="file" class="form-control-file" id="hinhanh">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    a</div>
                <div class="col-md-6">
                    a</div>
                <?php
                $khachhang =  isset($data['thongtinkhachhang']) ? $data['thongtinkhachhang'] : [];
                // var_dump($khachhang);
                for ($i = 0; $i < count($khachhang); $i++) {
                    echo '
                <div class="col-md-6 my-2">
                  <label for="hoten">Họ và tên</label>
                  <input type="text" class="form-control" id="hoten" name="hoten" value="' . $khachhang[$i]['hoten'] . '" >
                </div>
                <div class="col-md-6 my-2">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" disabled id="email" name="email" value="' . $khachhang[$i]['email'] . '">
                </div>

                <div class="col-md-6 my-2">
                  <label for="matkhau">Mật khẩu</label>
                  <input type="text" class="form-control" id="matkhau" name="matkhau" value="' . $khachhang[$i]['matkhau'] . '">
                </div>
                <div class="col-md-6 my-2">
                  <label for="sdt">Số điện thoại</label>
                  <input type="text" class="form-control" id="sdt" name="sdt" value="' . $khachhang[$i]['sdt'] . '">
                </div>
                ';
                }
                ?>
            </div>
            <div class="tt">
                <div class="nutql mt-5">
                    <tr class="">
                        <td>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i>
                                Lưu</button>
                            <a href="/NYH/trangchu/" class="btn btn-secondary">
                                <i class="fas fa-times"></i>
                                Thoát</a>
                        </td>
                    </tr>
                </div>
            </div>
        </div>
    </form>
</div>