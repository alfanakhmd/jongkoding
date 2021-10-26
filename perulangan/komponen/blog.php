<?php

$blog = array(
    array(
        'image' => 'https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1633511090164-910b108d3442?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1740&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1632406896548-3d5e70c8f461?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80'
    ),
);

?>

<div id="blog" class="py-4">

    <div class="container">

        <div class="row">

            <?php

            // Untuk Setiap => $blog menjadi $data
            foreach ($blog as $data) {
                require("kecil/blog_card.php");
            }

            ?>

        </div>

    </div>

</div>