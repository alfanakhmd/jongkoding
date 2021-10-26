<html>

    <head>

        <title>Registrasi Petugas</title>

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

                        <form action="action_register.php" method="POST">

                            <div class="form-group mb-2">
                                <label for="name">Alamat Email</label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="Alamat Email" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Nama Lengkap</label>
                                <input name="name" id="name" class="form-control" type="text" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Password</label>
                                <input name="password" id="password" class="form-control" type="password" placeholder="Password" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Konfirmasi Password</label>
                                <input name="re-password" id="re-password" class="form-control" type="password" placeholder="Ulangi Password" required>
                            </div>

                            <input name="submit" type="submit" value="Kirim" class="btn btn-primary mt-4">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>