<?php
require_once("connection.php");

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
        
        <div id="form" class="pt-5">

            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col col-8 p-4 bg-light">

                        <form action="action_seo.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group mb-2">
                                <label for="description">Author</label>
                                <input name="author" id="author" class="form-control" type="text" value="<?=$data["author"]?>" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control" required><?=$data["description"]?></textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label for="keywords">Keywords / Kata kunci</label>
                                <textarea name="keywords" id="keywords" class="form-control" required><?=$data["keywords"]?></textarea>
                            </div>

                            <div class="form-group mb-2">
                                <label>Robots Index</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="robots_index" id="index" value="1" required <?=($data["robot_index"] ? "checked" : "")?>>
                                    <label class="form-check-label" for="index">Index</label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="robots_index" id="noindex" value="0" required <?=(!$data["robot_index"] ? "checked" : "")?>>
                                    <label class="form-check-label" for="noindex">No-Index</label>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <label>Robots Follow</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="robots_follow" id="follow" value="1" required <?=($data["robot_follow"] ? "checked" : "")?>>
                                    <label class="form-check-label" for="follow">Follow</label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="robots_follow" id="nofollow" value="0" required <?=(!$data["robot_follow"] ? "checked" : "")?>>
                                    <label class="form-check-label" for="nofollow">No-Follow</label>
                                </div>
                            </div>

                            <input name="submit" type="submit" value="Kirim" class="btn mt-2 btn-primary">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>