<?php

require_once("connection.php");

$query = "SELECT * FROM siswa";

$result = mysqli_query($mysqli, $query);

$select = "SELECT * FROM seo";

$data = mysqli_query($mysqli, $select);

$data = mysqli_fetch_assoc($data);

if ( is_null($data) ) {
    $data["description"] = "";
    $data["keywords"] = "";
    $data["author"] = "";
    $data["robot_index"] = 1;
    $data["robot_follow"] = 1;
}

?>

<html>
<head>
    <title>PHP dan MySQL</title>

    <meta name="description" content="<?=$data["description"]?>" />
    <meta name="keywords" content="<?=$data["keywords"]?>" />
    <meta name="author" content="<?=$data["author"]?>" />
    <meta name="robots" content="<?=($data["robot_index"] ? "index" : "noindex")?>,<?=($data["robot_follow"] ? "follow" : "nofollow")?>" />

    <!-- Memanggil Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link href="style.css" rel="stylesheet" />

    <!-- Javascript -->
    <script type="text/javascript">
    function confirm_delete() {
        return confirm("Seriusan nich?");
    }
    </script>
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
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="seo.php">Pengaturan SEO</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <div id="student-list">

        <div class="container">

            <div class="row mb-4">

                <div class="col">

                    <h2>Daftar Siswa</h2>

                </div>

                <div class="col text-end">

                    <a class="btn btn-primary" href="form_siswa.php" role="button">Tambah Siswa</a>

                </div>

            </div>

            <div class="row">

                <div class="col">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Usia</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php

                        $i = 1;

                        foreach ( $result as $siswa ) {

                            // Explode("-", "2001-10-22");
                            // Array(2001, 10, 22);
                            $tglLahir = explode("-", $siswa["tgl_lahir"]);
                            $tahunSekarang = date("Y");

                            $selisihTahun = $tahunSekarang - $tglLahir[0];

                            if ( is_null($siswa['foto']) ) {
                                $siswa['foto'] = "kotak/default.png";
                            }

                            if ( !file_exists($siswa['foto']) ) {
                                $siswa['foto'] = "kotak/default.png";
                            }

                            echo '<tr>
                                <th scope="row">' . $i++ . '</th>
                                <td><img src="'.$siswa['foto'].'" /></td>
                                <td>' . $siswa["nama"] . '</td>
                                <td>' . $siswa["jk"] . '</td>
                                <td>' . $siswa["alamat"] . '</td>
                                <td>' . $selisihTahun . '</td>
                                <td>' . $siswa["telepon"] . '</td>
                                <td>
                                    <a href="form_edit.php?nis=' . $siswa["nis"] . '">Edit</a>
                                    <a href="delete.php?nis=' . $siswa["nis"] . '" onclick="return confirm_delete()">Delete</a>
                                </td>
                            </tr>';

                            // Menggunakan cara berbasis text
                            if ( !empty ( $siswa['gallery'] ) ) {

                                $gallery = explode(';', $siswa["gallery"]);

                                echo '<tr> <td colspan="7">';
                                echo '<h1>Text</h1>';

                                foreach ( $gallery as $i => $img ) {
                                    if ( $i != ( sizeof($gallery) - 1 ) )
                                    echo '<img src="' . $img . '" height="100" />';
                                }
                                        
                                echo '</td> </tr>';

                            }

                            // JSON
                            if ( !empty( $siswa['gallery2'] ) ) {

                                $gallery = json_decode($siswa['gallery2']);

                                echo '<tr> <td colspan="7">';
                                echo '<h1>JSON</h1>';

                                foreach ( $gallery as $img ) {
                                    echo '<img src="' . $img . '" height="100" />';
                                }
                                        
                                echo '</td> </tr>';
                                
                            }

                        }

                        ?>

                        </tbody>

                    </table>

                    
                </div>
                
            </div>

        </div>

    </div>

</body>
</html>