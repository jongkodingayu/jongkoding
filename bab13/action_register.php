<?php

//panggil file connection
require_once("connection.php");

//status tidak error
$error=0;

// memvalidasi inputan
if(isset($_POST['email'])) $email= $_POST['email'];
else $error=1; //status error

if(isset($_POST['name'])) $name= $_POST['name'];
else $error=1; //status error

if(isset($_POST['password'])) $password= $_POST['password'];
else $error=1; //status error

if(isset($_POST['re-password'])) $repassword= $_POST['re-password'];
else $error=1; //status error

//mengatasi jika terdapat error inputan 
if($error==1) {
    echo "Terjadi kesalahan pada proses input data. <a href='registration.php'>Kembali</a>";
    exit();
}

//pengecekan password dan konfirmasi password
if($password != $repassword){
    echo "Password tidak sama, ulangi mengisi form pendaftaran! <a href='registration.php'>Kembali</a>";
    exit();
}else{
    $password= hash('sha256', $password);
}

//menyiapkan query MySQL untuk dieksekusi
$query= "
INSERT INTO petugas 
(email, nama, password)
VALUES
('{$email}','{$name}','{$password}')
";

//mengeksekusi MySQL query
$insert = mysqli_query($mysqli, $query);

//menangani ketika error eksekusi query
if($insert==false){
    echo "Error dalam menambahkan data. <a href='registration.php'>Kembali</a>";
}else{
    header("location:index.php");
}
