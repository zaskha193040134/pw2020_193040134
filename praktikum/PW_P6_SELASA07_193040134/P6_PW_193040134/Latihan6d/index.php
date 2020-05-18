<?php

// menghubungkan dengan file php lainya
require 'php/functions.php';

//melakukan query
$alat_musik = query("SELECT * FROM alat_musik");

?>

<html>

<head>
    <title>Tugas</title>
    <style>
        img {
            width: 150px;
            padding: 20px;
        }

        td {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php foreach ($alat_musik as $msk) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $msk['id'] ?>">
                    <?= $msk["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>

    <a href="../../.."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../../../tubes/assets/img_stock/back.png" alt=""></a>

</body>

</html>