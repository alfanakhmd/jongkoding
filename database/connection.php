<?php

// Driver Koneksi ke MySQL: mysqli, pdo
$mysqli = new mysqli("127.0.0.1", "root", "", "coba_sekolah");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Gagal menyambungkan ke MySQL: " . $mysqli -> connect_error;
  exit();
}

?>