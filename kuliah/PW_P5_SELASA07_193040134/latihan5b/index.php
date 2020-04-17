<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:150px; padding:20px; }
        td{ text-align : center; }
    </style>
</head>
<body>

<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $alat_musik = query("SELECT * FROM alat_musik");
   
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO</th>
        <th>Foto</th>
        <th>Nama Alat Musik</th>
        <th>Sumber Bunyinya</th>
        <th>Cara memainkanya</th>
        <th>Fungsinya</th>
    </tr>

    <?php $i = 1?>
    <?php foreach ($alat_musik as $msk) :  ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src= "assets/img/<?= $msk["foto"]; ?>"></td>
            <td><?= $msk["nama"]?></td>
            <td><?= $msk["sumber_bunyi"]?></td>
            <td><?= $msk["Cara_pakai"]?></td>
            <td><?= $msk["fungsi"]?></td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
</table>
</body>