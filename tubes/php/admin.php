<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$alat_musik = query("SELECT * FROM  alat_musik");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query("SELECT * FROM alat_musik WHERE
                foto LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                sumber_bunyi LIKE '%$keyword%' OR
                Cara_pakai LIKE '%$keyword%' OR
                penjelasan LIKE '%$keyword%' OR
                fungsi LIKE '%$keyword%'  ");
} else {
  $alat_musik = query("SELECT * FROM alat_musik");
}

if (isset($_POST['logout'])) {
  if ($_SESSION['username']) {
    session_destroy();
    header('Location: logout.php');
  }
}

if (isset($_POST['back'])) {
  header('Location: ..');
}

?>
<!-- ==================================================================== -->

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Righteous&display=swap" rel="stylesheet">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Latihan6a</title>
  <link rel="stylesheet" href="../css/style-admin.css">

</head>

<body style="font-family: 'Righteous', cursive;">



  <div class="navbar-fixed">
    <nav class="blue darken-4 gradient4">
      <div class="nav-wrapper">
        <a href="" class="judulwel brand-logo">Welcome <?= $_SESSION['username'] ?> </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="tambah.php">Tambah Data</a></li>
          <li><a href="update-admin.php">Update Data</a></li>
          <li><a href="list-admin.php">List Data</a></li>
          <li>
            <form action="" method="POST">
              <div class="logout">
                <button style="font-family: 'Righteous', cursive;" type="submit" class="tom waves-effect waves-light btn-large" name="logout">Logout</button>
                <!-- <a href="logout.php">Logout</a> -->
              </div>
            </form>
          </li>
          <li>
            <form action="" method="post">
              <button type="submit" name="cari" class="tom tombol-cari">Cari</button>
              <button style="display:none;font-family: 'Righteous', cursive;" type="submit" class="waves-effect waves-light btn-large" name="back">Kembali</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>




  <form action="" method="get">
    <div class="row">
      <div class="col s12 m12 l12 input-field">
        <i class="material-icons prefix">search</i>
        <input type="text" id="icon_prefix" class="validate keyword" name="keyword" autocomplete="off">
        <label for="icon_prefix">Masukan keyword pancarian...</label>
      </div>
    </div>
  </form>