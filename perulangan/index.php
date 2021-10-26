<html>

    <head>

        <?php
        require("config/style.php");
        ?>

    </head>

    <body>
        
        <?php

        require("komponen/navbar.php");
        
        // include: jalan terus walau eror
        // require: berhenti ketika error
        require("komponen/blog.php");
        include("komponen/fitur.php");

        require("config/script.php");

        ?>

    </body>

</html>