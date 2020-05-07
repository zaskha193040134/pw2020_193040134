<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$alat_musik = query ( "SELECT * FROM  alat_musik" );

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $alat_musik = query("SELECT * FROM alat_musik WHERE
                'foto alat' LIKE '%$keyword%' OR
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
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <a href="tambah.php">Tambah Data</a><br>
        <a href="logout.php">Logout</a>
    </div> 

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

   


    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>foto alat</th>
            <th>nama</th>
            <th>Sumber Bunyi</th>
            <th>Cara Pakai</th>
            <th>Fungsi</th>
        </tr>


    <?php if(empty($alat_musik)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($alat_musik as $alm) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $alm['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $alm['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="assets/img/<?= $alm['foto']?>" alt=""></td>
                <td><?= $alm['nama']?></td>
                <td><?= $alm['sumber_bunyi']?></td>
                <td><?= $alm['Cara_pakai']?></td>
                <td><?= $alm['fungsi']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    <?php endif;?>
    </table>

</body>
</html>