<?php

require_once("connection.php");

//mendapatkan nis
if(isset($_GET["nis"])) $nis= $_GET["nis"];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//query delete data siswa
$query="DELETE FROM siswa WHERE nis='{$nis}'";

//eksekusi query
$result=mysqli_query($mysqli, $query);

if(!$result){
    exit("Gagal menghapus data!");
}

header("location:index.php");
