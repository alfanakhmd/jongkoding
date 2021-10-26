<html>

    <head>

        <title>Login Petugas</title>

        <!-- Memanggil Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        
        <div id="form" class="pt-5">

            <div class="container">

                <div class="row d-flex justify-content-center">

                    <div class="col col-8 p-4 bg-light">

                        <h2 class="mb-4">Login Petugas</h2>

                        <form action="action_login.php" method="POST">

                            <div class="form-group mb-2">
                                <label for="name">Alamat Email</label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="Alamat Email" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="name">Password</label>
                                <input name="password" id="password" class="form-control" type="password" placeholder="Password" required>
                            </div>

                            <input name="submit" type="submit" value="Masuk" class="btn btn-primary mt-4">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>