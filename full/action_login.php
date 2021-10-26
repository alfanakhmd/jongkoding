<?php

/**
 * 1. Email yang dimasukkan sudah ada apa belom
 * 2. Kalo ada, passwordnya sama atau tidak
 */

// Panggil File Connection.php
require_once("connection.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['email']) ) $email = $_POST['email'];
else $error = 1; // Status error

if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1; // Status error

// Mengatasi jika terdapat error pada data inputan
if ( $error == 1 ) {
    echo "Terjadi kesalahan pada data inputan <a href='login.php'>Kembali</a>";
    exit();
}

// Hashing password
$password = hash("sha256", $password);
// admin = 

// Menyiapkan Query MySQL untuk dieksekusi
$query = "SELECT * FROM petugas WHERE email = '{$email}'";

// Mengeksekusi MySQL Query
$result = mysqli_query($mysqli, $query);
$data = mysqli_fetch_assoc($result);

// print_r => nampilin isi array
// var_dump($result);
// die();

$passwordBaru = htmlentities(stripslashes($password));

if ( is_null($data) ) {
    echo 'Email tidak terdaftar <a href=\'login.php\'>Kembali</a>';
    exit();
}
else if ( $data['password'] != $passwordBaru ) {
    echo "Password salah <a href='login.php'>Kembali</a>";
    exit();
}
else {
    // Memulai fungsi SESSION, session hanya dapat digunakan setelah fungsi ini
    session_start();

    $_SESSION["status"] = true;
    $_SESSION["id"] = $data["id"];
    $_SESSION["name"] = $data["nama"];
    $_SESSION["email"] = $data["email"];

    header("Location: index.php");
}

?>