<?php

// Pemanggilan File Koneksi
require_once("connection.php");

// Status tidak error
$error = 0;

// Mendapatkan Data NIS
if ( isset($_GET["nis"]) ) $nis = $_GET["nis"];
else echo "NIS Tidak Ditemukan! <a href='index.php'>Kembali</a>";

$query = "SELECT * FROM siswa WHERE nis = '{$nis}'";

$result = mysqli_query($mysqli, $query);

foreach ( $result as $siswa ) {

    $foto = $siswa["foto"];
    $nis = $siswa["nis"];
    $name = $siswa["nama"];
    $address = $siswa["alamat"];
    $placeOfBirth = $siswa["tmp_lahir"];
    $dateOfBirth = $siswa["tgl_lahir"];
    $phone = $siswa["telepon"];

    $maleChecked = "";
    $femaleChecked = "";

    if ( $siswa["jk"] == "L" ) {
        $maleChecked = "checked";
    }
    else if ( $siswa["jk"] == "P" ) {
        $femaleChecked = "checked";
    }

}

?>

<html>

    <head>

        <title>Input Form</title>

        <!-- Memanggil Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">
                    
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="#">

                    <img src="jong_koding_logo.png" />

                </a>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Collapse -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Daftar Siswa</a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>
        
        <div id="form" class="pt-5">

            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col col-8 p-4 bg-light">

                        <form action="action_edit.php" method="POST" enctype="multipart/form-data">

                            <?php if (!is_null($foto) && !empty($foto)) : ?>
                            <div class="form-group mb-2">
                                <img src="<?=$foto?>" class="preview" />

                                <a href="hapus_foto.php?nis=<?=$nis?>">Hapus Foto</a>
                            </div>
                            <?php endif; ?>

                            <div class="form-group mb-2">
                                <label for="foto">Foto</label>
                                <input name="foto" id="foto" class="form-control" type="file" />
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">NIS</label>
                                <input name="nis" id="nis" value="<?=$nis?>" class="form-control" type="text" placeholder="Nomor Induk Siswa" readonly>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Nama Lengkap</label>
                                <input name="name" id="name" value="<?=$name?>" class="form-control" type="text" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group mb-2">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" <?=$maleChecked?> type="radio" name="gender" id="male" value="L" required>
                                    <label class="form-check-label" for="male">Laki-laki</label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" <?=$femaleChecked?> type="radio" name="gender" id="female" value="P" required>
                                    <label class="form-check-label" for="female">Perempuan</label>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label for="address">Alamat</label>
                                <textarea name="address" class="form-control" id="address" rows="3" required><?=$address?></textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Tempat Lahir</label>
                                <input name="placeOfBirth" id="tmp_lahir" value="<?=$placeOfBirth?>" class="form-control" type="text" placeholder="Tempat Lahir" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Tanggal Lahir</label>
                                <input name="dateOfBirth" id="tgl_lahir" value="<?=$dateOfBirth?>" class="form-control" type="date" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Telepon</label>
                                <input name="phone" id="phone" class="form-control" value="<?=$phone?>" type="text" placeholder="Nomor Telepon/Handphone" required>
                            </div>

                            <input name="submit" type="submit" value="Kirim" class="btn btn-primary">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>