<?php

// menghubungkan dengan file php lainya
require 'php/functions.php';

//melakukan query
$alat_musik = query("SELECT * FROM alat_musik");

// Tugas no 2
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                    foto LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    sumber_bunyi LIKE '%$keyword%' OR
                    Cara_pakai LIKE '%$keyword%' OR
                    fungsi LIKE '%$keyword%'  ");
} else {
    $alat_musik = query("SELECT * FROM alat_musik");
}



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


    <!-- Tugas No 2 : Tambahkan kolom pencarian pada halaman front-end(index) dari web kalian.   -->

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>




    <?php if (empty($alat_musik)) : ?>
        <div>
            <h1>Data Tidak Ditemukan</h1>
        </div>
    <?php else : ?>
        <div class="container">
            <?php foreach ($alat_musik as $msk) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $msk['id'] ?>">
                        <?= $msk["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <a href="php/login.php">
        <button type="">KE HALAMAN ADMIN</button>
    </a>

    <a href="../../.."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../../../tubes/assets/img_stock/back.png" alt=""></a>
</body>

</html>