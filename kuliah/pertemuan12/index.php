<?php

session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

    // menghubungkan dengan file php lainya
    require 'functions.php';

    //melakukan query
    $alat_musik = query("SELECT * FROM alat_musik");
   
?>

<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:150px; padding:20px; }
        td{ text-align : center; }
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
    <a href="admin.php" style="color:green;">HALAMAN ADMIN</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>