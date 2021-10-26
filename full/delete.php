<?php

require_once("connection.php");

// Mendapatkan Data NIS
if ( isset($_GET["nis"]) ) $nis = $_GET["nis"];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

// Query Get Data Siswa
$query = "DELETE FROM siswa WHERE nis = '{$nis}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

if ( ! $result ) {
    exit("Gagal menghapus data!");
}

header("Location: index.php");

?>