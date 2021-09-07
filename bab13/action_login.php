<?php

//panggil file connection
require_once("connection.php");

//status tidak error
$error = 0;

//memvalidasi inputan
if (isset($_POST['email'])) $email = $_POST['email'];
else $error = 1; // status error

if (isset($_POST['password'])) $password = $_POST['password'];
else $error = 1; // status error

//mengatasi jika terdapat error
if ($error == 1) {
    echo "Terjadi kesalahan pada data inputan. <a href='login.php'>Kembali</a> ";
    exit();
}

//hashing password
$password = hash("sha256", $password);

//menyiapkan Query MySQL untuk dieksekusi
$query = "SELECT * FROM petugas WHERE email= '{$email}'";

//mengeksekusi MySQL query
$result = mysqli_query($mysqli, $query);

$data = mysqli_fetch_assoc($result);

if (is_null($data)) {
    echo "Email tidak terdaftar. <a href='login.php'>Kembali</a>";
    exit();
} else if ($data['password'] != $password) {
    echo "Password salah. <a href='login.php'>Kembali</a> ";
    exit();
} else {

    //memulai fungsi SESSION, session ini hanya dapat digunakan setelah fungsi ini
    session_start();
    $_SESSION["status"] = true;
    $_SESSION["name"] = $data['nama'];
    $_SESSION["email"] = $data['email'];


    header("location:index.php");
}
