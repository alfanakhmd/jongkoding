<html>

    <head>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <!-- Bootstrap Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css" />

    </head>

    <body>

        <div id="form">
            <div class="container">
                <form method="POST" action="/blog/post">
                    @csrf

                    <label for="title">Judul Blog</label>
                    <input id="title" name="title" type="text" />

                    <br />

                    <label for="text">Text Artikel</label>
                    <textarea name="text" id="text" cols="30" rows="10">
                    </textarea>

                    <input type="submit" />

                    @error('title')
                    <p>Inputan salah: {{$message}}</p>
                    @enderror
                </form>
            </div>
        </div>

    </body>
</html>