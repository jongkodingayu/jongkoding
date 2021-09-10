<?php
//parent class
class warga{
    protected $kota="Aku warga kota Malang";
    public function kecamatan(){
        return "<br>Aku dari kecamatan Blimbing";
    }
}

//child class
class orang extends warga{
    function kenalkan(){
        return "Haloo, Aku JongKoding. ". $this->kota;
    }
}

//instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();
echo $obj_orang->kecamatan();
