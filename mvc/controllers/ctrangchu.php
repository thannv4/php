<?php
class ctrangchu extends controller
{
    
    private $phanloai;
    private $maytinh;
    public function __construct()
    {
        $this->maytinh = $this->model('mmaytinh');
        $this->phanloai = $this->model("mphanloai");
    }
    public function Show()
    {
        $sanphamnoibat = $this->maytinh->getSanphamnoibat();
        $phanloai = $this->phanloai->getPhanloai();
        $this->view("TrangChu", [
            'phanloai' => $phanloai,
            'sanphamnoibat' => $sanphamnoibat
        ]);
    }
    public function gioithieu(){
        $this->view("GioiThieu");
    }
    public function lienhe(){
        $this->view("LienHe");
    }
    
}
