<?php

// menghubungkan dengan file php lainya
require 'php/functions.php';

//melakukan query
$alat_musik = query("SELECT * FROM alat_musik");


if (isset($_POST['cari'])) {
  $alat_musik = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Righteous&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- My css -->
  <link rel="stylesheet" href="css/style-index.css">

  <title>Tugas</title>



</head>

<body>


  <div class="containerr">



    <!-- slider -->

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="assets/img_stock/5.jpg">
          <div class="caption center-align">
            <h3 style="font-family: 'Lobster', cursive;">MUSIC EVERYWHERE</h3>
            <h5 style="font-family: 'Righteous', cursive;" class="light grey-text text-lighten-3">
              "Buatlah sesuatu jadi sesimpel mungkin tapi mengena dan terkenang oleh orang-orang." - Ringo Starr, The Beatles
          </div>
        </li>
        <li>
          <img src="assets/img_stock/2.jpg">
          <div class="caption left-align">
            <h3 style="font-family: 'Lobster', cursive;">Ketahui jenis Alat Musik!</h3>
            <h5 style="font-family: 'Righteous', cursive;" class="light grey-text text-lighten-3">Berbagi pengetahuan tentang alat musik.</h5>
          </div>
        </li>
        <li>
          <img src="assets/img_stock/6.jpg">
          <div class="caption right-align">
            <h3 style="font-family: 'Lobster', cursive;">Gunakan Untuk yang baik!</h3>
            <h5 style="font-family: 'Righteous', cursive;" class="light grey-text text-lighten-3">Gunakanlah keahlian musik mu dalam hal yang baik.</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- navigation -->

    <nav class="blue darken-4 gradient4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="" class="brand-logo" style="font-family: 'Lobster', cursive;">wikimusic</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li>
              <form action="" method="post">
                <div class="tooltip">
                  <div class="input-field">
                    <input type="search" name="keyword" id="keyword" placeholder="Search..." autocomplete="off" class="keyword">

                    <label for="search" class="label-icon active">
                      <i class="material-icons">search</i>
                    </label>
                    <button style="display:none;" type="submit" name="cari">Cari</button>
                    <span class="bubble">Tekan Enter untuk mencari :)</span>

                  </div>
                </div>
              </form>
            </li>
            <!-- <li><a href="#">Components</a></li> -->
            <li><a style="font-family: 'Righteous', cursive;" href="semester1">My Portofolio</a></li>
            <li><a style="font-family: 'Righteous', cursive;" href="php/login.php">Login for Admin</a></li>
            <li><a style="font-family: 'Righteous', cursive;" href="..">Back to Index</a></li>
          </ul>
        </div>
      </div>
    </nav>






    <!-- sidenav -->

    <ul class="sidenav" id="mobile-nav">
      <li>
        <form action="" method="post">
          <div class="input-field">
            <input type="search" name="keyword" id="keyword" placeholder="Search..." style="padding: 0 0 0 50px;" autocomplete="off" class="keyword">
            <button type="submit" name="cari" class="btn waves-effect waves-light" style="width:230px;margin-left: 10%">
              <i class="material-icons">search</i>
            </button>
          </div>
        </form>
      </li>
      <!-- <li><a href="#">Components</a></li> -->
      <li><a href="semester1">My Portofolio</a></li>
      <li><a href="php/login.php">Login for Admin</a></li>
    </ul>


    <h3 class="judul">List Alat Musik</h3>



    <div class="content">
      <?php if (empty($alat_musik)) : ?>
        <div>
          <h1>Data Tidak Ditemukan</h1>
        </div>

      <?php endif; ?>

      <div class="container">
        <div class="row">
          <?php foreach ($alat_musik as $msk) : ?>
            <div class="col s6 m4 l3">
              <div class="card activator">
                <div class="card-image waves-effect waves-block waves-light">
                  <a href="php/detail.php?id=<?= $msk['id'] ?>">
                    <div class="material-placeholder images">
                      <img src="assets/img/<?= $msk["foto"] ?>">
                    </div>
                  </a>
                </div>
                <div class="card-content">
                  <div class="card-title">
                    <p style="font-family: 'Righteous', cursive;" class="nama"><a href="php/detail.php?id=<?= $msk['id'] ?>"> <?= $msk["nama"] ?> </a></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <br><br><br>


    <!-- FOOTER -->

    <footer class="page-footer blue darken-4">
      <div class="container">
        <div class="row">
          <div class="col s9 m8 l8">
            <h5 class="white-text" style="font-size:2vw;">Thanks For Help, Credit</h5>
            <br>
            <img src="assets/img_stock/code.png" alt="">
            <img src="assets/img_stock/php.png" alt="">
            <img src="assets/img_stock/mysql.jpg" alt="">
            <img src="assets/img_stock/phpmyadmin.png" alt="">
            <img src="assets/img_stock/materialize.png" alt="">
            <img src="assets/img_stock/ot.jpg" alt="">
            <img src="assets/img_stock/stack.png" alt="">
            <img src="assets/img_stock/vs.png" alt="">
            <img src="assets/img_stock/w3.png" alt="">
          </div>
          <div class="col s3 m4">
            <h5 class="white-text" style="font-size: 2vw;">My Social Media</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" style="font-family: 'Righteous', cursive; font-size:1.6vw;" target="_blank" href="https://www.instagram.com/zaskha_07/">Instagram</a></li>
              <li><a class="grey-text text-lighten-3" style="font-family: 'Righteous', cursive; font-size:1.6vw;" target="_blank" href="https://web.facebook.com/zaskha.sasmita?_rdc=1&_rdr">Facebook</a></li>
              <li><a class="grey-text text-lighten-3" style="font-family: 'Righteous', cursive; font-size:1.6vw;" target="_blank" href="https://twitter.com/zaskha_07">Twitter</a></li>
              <li><a class="grey-text text-lighten-3" style="font-family: 'Righteous', cursive; font-size:1.6vw;" target="_blank" href="https://github.com/zaskha193040134/">Github</a></li>
              <li><a class="grey-text text-lighten-3" style="font-family: 'Righteous', cursive; font-size:1.6vw;" target="_blank" href="https://www.youtube.com/channel/UC7YaJJ5h5uhyJcGcnP-hcHQ/">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue darken-4" style="background: linear-gradient(#080070, #2500ab,#2500ab,#2500ab,#2500ab,#080070);">
        <div class="container" style="font-family: 'Righteous', cursive;">
          © Copyright 2020 &nbsp;Zaskha Sasmita
          <a class="grey-text text-lighten-4 right" href="https://about.me/zaskha" target="_blank">About me</a>
          <p class="grey-text text-lighten-4 right"> <?= date('d M, Y') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        </div>
      </div>
    </footer>



    <!-- Loading -->
    <div id="loading">
      <div class="loader">
        <span style="--i:1;"><i>L</i></span>
        <span style="--i:2;"><i>o</i></span>
        <span style="--i:3;"><i>a</i></span>
        <span style="--i:4;"><i>d</i></span>
        <span style="--i:5;"><i>i</i></span>
        <span style="--i:6;"><i>n</i></span>
        <span style="--i:7;"><i>g</i></span>
        <span style="--i:8;"><i>.</i></span>
      </div>
    </div>





    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- <script src="js/script_index.js"></script> -->

    <script>
      var loading = document.getElementById("loading");

      window.addEventListener('load', function() {
        loading.style.display = "none";
      });
    </script>

    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 600,
        transition: 600,
        interval: 3000
      });
    </script>

</body>

</html>