<?php
// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$alat_musik = query ( "SELECT * FROM  alat_musik" );
?>

<html>
<head>
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div> 

    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($alat_musik as $alm) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $alm['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $alm['foto']?>" alt=""></td>
                <td><?= $alm['nama']?></td>
                <td><?= $alm['sumber_bunyi']?></td>
                <td><?= $alm['Cara_pakai']?></td>
                <td><?= $alm['fungsi']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>