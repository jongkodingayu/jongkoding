<?php

require_once("connection.php");

//mendapatkan data nis
if (isset($_GET['nis'])) $nis = $_GET['nis'];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//query get data siswa
$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";

//eksekusi query
$result = mysqli_query($mysqli, $query);

//fetaching data
foreach ($result as $siswa) {
    $foto = $siswa['foto'];
}

if (!is_null($foto) && !empty($foto)) {
    $remove = unlink($foto);

    if ($remove) {
        //menyiapkan query mysql untuk dieksekusi
        $query = "UPDATE siswa SET 
        foto = NULL
        WHERE nis = '{$nis}'";

        //mengeksekusi mysql query
        $update = mysqli_query($mysqli, $query);
    }
}

header("location:form_edit.php?nis={$nis}");
