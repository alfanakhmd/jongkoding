<?php

require_once("connection.php");

// Mendapatkan Data NIS
if ( isset($_GET["nis"]) ) $nis = $_GET["nis"];
else {
    echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

// Query Get Data Siswa
$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";

// Eksekusi Query
$result = mysqli_query($mysqli, $query);

// Fetching Data
foreach ( $result as $siswa ) {
    $foto = $siswa["foto"];
}

if ( !is_null($foto) && !empty($foto) ) {
    $remove = unlink($foto);

    if ( $remove ) {

        // Menyiapkan Query MySQL untuk dieksekusi
        $query = "
        UPDATE siswa SET
            foto = NULL
        WHERE nis = '{$nis}'";

        // Mengeksekusi MySQL Query
        $insert = mysqli_query($mysqli, $query);

    }
}

header("Location: form_edit.php?nis={$nis}");

?>