<?php

class orang
{
    //property
    public $nama;
    public $asal;

    //constructor
    function __construct($namaOrang, $asalOrang)
    {
        echo "Construct ootomatis dijalankan...<br>";

        //mengubah value property
        $this->nama = $namaOrang;
        $this->asal = $asalOrang;
    }

    //destructor
    function __destruct()
    {
        echo "Destruct dijalankan terakhir";
    }

    //method
    function kenalkan()
    {
        return "Haloo, aku " . $this->nama . " dari " . $this->asal . "<br>";
    }
}

//instansisasi dari class orang
$obj_orang = new orang("Shynta", "Malang");
echo $obj_orang->kenalkan();
