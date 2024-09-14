<?php
class cquanlimt extends controller
{

    private $maytinh;
    private $phanloai;
    public function __construct()
    {
        
        $this->maytinh = $this->model('mmaytinh');
        $this->phanloai = $this->model('mphanloai');
    }
    //
    public function quanli()
    {
        $this->view('quanlikhsp');
    }
    //
    public function quanlymt()
    {
        $this->view('quanlimt');
    }
    //
    public function themmt()
    {
        $data = $this->phanloai->getPhanloai();
        $this->view("themmaytinh", ['phanloai' => $data]);
    }
    public function capnhatmt()
    {
        $data = $this->phanloai->getPhanloai();
        $this->view("themmaytinh", ['phanloai' => $data]);
    }
    public function tatcasanpham()
    {
        $maytinh = $this->maytinh->getMaytinh();
        $this->view("quanlimt", $maytinh);
    }
    public function themmaytinh()
    {
        $tenmaytinh = $_POST['tenmaytinh'];
        $maloai = $_POST['maloai'];
        $cpu = $_POST['cpu'];   
        $ram = $_POST['ram'];
        $ocung = $_POST['ocung'];
        $manhinh = $_POST['manhinh'];
        $cardmanhinh = $_POST['cardmanhinh'];
        $hedieuhanh = $_POST['hedieuhanh'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $file = $_FILES['file'];
        $hinhanhhientai = $_POST['hinhanhhientai'];
        $hinhanh = strlen($file['name']) > 0 ? $this->uploadFile($file, "anhmaytinh") : $hinhanhhientai;

        $row = $this->maytinh->insertmaytinh(
            $tenmaytinh,
            $maloai,
            $cpu,
            $ram,
            $ocung,
            $manhinh,
            $cardmanhinh,
            $hedieuhanh,
            $gia,
            $soluong,
            $hinhanh
        );
        if ($row > 0) {
            echo '<script>alert("Thêm sản phẩm thành công!")</script>';
            echo "<script>location.replace('/NYH/cquanlimt/tatcasanpham/')</script>";
        } else {
            echo '<script>alert("Thêm sản phẩm không thành công!")</script>';
        }
    }
    public function capnhatmaytinh()
    {
        $mamt = $_POST['mamt'];
        $maloai = $_POST['maloai'];
        $tenmaytinh = $_POST['tenmt'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $ocung = $_POST['ocung'];
        $manhinh = $_POST['manhinh'];
        $cardmanhinh = $_POST['cardmanhinh'];
        $hedieuhanh = $_POST['hedieuhanh'];
        $kichthuoc = $_POST['kichthuoc'];
        $thoidiemramat = $_POST['thoidiemramat'];
        $gia = $_POST['gia'];
        $hinhanh = $_POST['hinhanh'];
        $soluong = $_POST['soluong'];
        $xuatsu = $_POST['xuatsu'];
        $row = $this->maytinh->updatemaytinh($mamt, $maloai, $tenmaytinh, $cpu, $ram, $ocung, $manhinh, $cardmanhinh, $hedieuhanh, $kichthuoc, $thoidiemramat, $gia, $hinhanh, $soluong, $xuatsu);
        if ($row > 0) {
            echo '<script>alert("Cập nhật sản phẩm thành công!")</script>';
            echo "<script>location.replace('/NYH/cquanlimt/tatcasanpham/')</script>";
        } else {
            echo '<script>alert("Cập nhật sản phẩm không thành công thất bại!")</script>';
        }
    }
}
