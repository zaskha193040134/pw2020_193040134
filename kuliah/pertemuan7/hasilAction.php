<?php

// function br(){
//     echo "<br>";
// }

// function hr(){
//     echo"<hr>";
// }

// echo "ini adalah tampilan result";

// br();
// hr(); 
// echo "username anda adalah : " . $                                                                                                                                                                                    ['username'];
// br();
// echo "password anda adalah : " . $_GET['password'];

function cekLogin($username, $password){
    if($username == 'zaskha' && $password == '123'){

        
?>



<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="icon" href="assets/img/malcolm.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">

    <title>
      My Portfolio
    </title>
  </head>

  <body>

  <!-- NAVBAR -->
  <div class="navbar-fixed">
      <nav class="z-depth-1">
        <div class="container">
            <div class="nav-wrapper">
              <a href="#home" class="brand-logo">
                <img src="assets/img/logonav.png" width="100" alt="">
              </a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                  <li><a href="#home">Home</a></li>
                  <li><a href="#profile">Profile</a></li>
                  <li><a href="#about">About Me</a></li>
                  <li><a href="#history">History</a></li>                
                  <li><a href="#contact">Contact</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="form.php">Logout</a></li>
              </ul>
            </div>
      </div>
      </nav>
    </div>
 
    

    
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#home">Home</a></li> 
        <li><a href="#profile">Profile</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#history">History</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
    </ul>

    <!-- Home -->
    <section class="home scrollspy" id="home">
      <div class="row">
          <div class="col l12 s12">
          <h2 style="font-size: 4vw;">Mahasiswa Teknik Informatika</h2>
          <p class="home">I edit video, photos and code simple things that are beautiful, and I like what I do.</p>
          <p class="home"><img src="assets/img/zaskha.png" width="280" alt="zaskha_sasmita"></p>
        </div>
      </div>
    </section>


    <!-- Profile -->
    <section class="profile scrollspy" id="profile">
    <div class="parallax-container">
      <div class="parallax"><img src="assets/img/macbook-pro-2148220.jpg"></div>
      <div class="container profile"> 
        <div class="row flow-text center">
          <div class="col s12"><h4>Profile</h4></div>
          <div class="col s12 l6 m6"><p class="flow-text">Nama saya Zaskha Sasmita. Saya lahir di Jakarta, 22 Agustus 2001. Saya sekarang tinggal di daerah Lembang.                                                          
              Agama saya adalah Islam begitu juga dengan orang tua dan saudara saya. Saya memiliki rambut hitam yang lurus.Tinggi sekitar 165 dan berat sekitar 50 </p></div>
          <div class="col s12 l6 m6"><p class="flow-text">Warna biru dan hijau adalah warna kesukaan saya. Salah satu tempat kesukaan saya adalah Gunung. Rasanya bila memandang pemandangan yang luas , suasana hati saya menjadi tenang dan segala pikiran berat yang sedang dirasakan bisa berkurang.</p></div>
        </div>
      </div>
    </div>
  </section>

    <!-- about me -->
    <section id="about" class="about purple lighten-4 scrollspy">
      <div class="container ">
        <div class="row">
          <h4>About Me</h4>
          <div class="col s12 m6 border">
            <p>Saya Zaskha, Mahasiswa dari Universitas Pasundan Bandung</p>
            <p class="flow-text">Saya suka bepergian kemanapun.dan tempat yang paling saya suka untuk saya kunjungi yaitu gunung dan pantai. Saya suka makan udang, apalagi makanan yang gratis. jika anda ingin mengetahui saya lebih lanjut, anda boleh klik icon yang ada di kanan bawah </p>
          </div>
          <div class="col m6 s12 border_skill">          
              <h5>Skill</h5>
            <p class="flow-text">FRONT-END DEVELOPMENT</p>
            <div class="progress">
                <div class="determinate blue" style="width: 70%"></div>
            </div>
            <p class="flow-text">PHOTOS-VIDEO EDITING</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                  
            <div class="progress">
                <div class="determinate green" style="width: 30%"></div>
            </div>
            <p class="flow-text">OPERATE THE MACHINE</p>
            <div class="progress">
                <div class="determinate red" style="width: 80%"></div>
            </div>
          </div>
        </div>
      </div>    
      </section>


    <!-- History -->
    <section id="history" class="history scrollspy">
        <div class="container">
          <div class="row">
            <h4>My History</h4>
            <div class="col m6 s12">

              <table class="highlight responsive-table centered">
                <thead>
                  <tr class="text-lighten-3">
                    <h5 class="center">Riwayat Pendidikan</h5>
                    <th></th>
                    <th>Pendidikan</th>
                    <th>Tahun Masuk</th>
                    <th>tahun Lulus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="assets/img/sdn.png" class="materialboxed" alt="sdnpancasila" width="70"></td>
                    <td>SDN PANCASILA</td>
                    <td>2007</td>
                    <td>2013</td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/smpn15bandung.png" class="materialboxed" alt="smpn15bandung" width="70"></td>
                    <td>SMPN 15 BANDUNG</td>
                    <td>2013</td>
                    <td>2016</td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/smkn2bandung.png" class="materialboxed" alt="smkn2bandung" width="70"></td>
                    <td>SMKN 2 BANDUNG</td>
                    <td>2016</td>
                    <td>2019</td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/unpas.png" class="materialboxed" alt="universitaspasundan" width="70"></td>
                    <td>UNIVERSITAS PASUNDAN</td>
                    <td>2019</td>
                    <td>2023 AAMIIN, SECEPATNYA</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col m6 s12">

                <table class="highlight responsive-table centered">
                  <thead>
                    <tr class="text-lighten-3">
                      <h5 class="center">Riwayat Organisasi</h5>
                      <th></th>
                      <th>Organisasi</th>
                      <th>Tahun Bergabung</th>
                      <th>tahun Lengser</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="assets/img/paskibra.png" class="materialboxed" alt="paskibra" width="70"></td>
                      <td>PASKIBRA KOTA BANDUNG</td>
                      <td>2016</td>
                      <td>2019</td>
                    </tr>
                    <tr>
                      <td><img src="assets/img/karate.png" class="materialboxed" alt="karate" width="70"></td>
                      <td>BANDUNG KARATE CLUB</td>
                      <td>2016</td>
                      <td>2019</td>
                    </tr>
                    <tr>
                      <td><img src="assets/img/silat.png" class="materialboxed" alt="silat" width="70"></td>
                      <td>IKATAN PENCAK SILAT INDONESIA</td>
                      <td>2016</td>
                      <td>SEKARANG</td>
                    </tr>
                    <tr>
                      <td><img src="assets/img/pramuka.png" class="materialboxed" alt="pramuka" width="70"></td>
                      <td>PRAMUKA</td>
                      <td>2013</td>
                      <td>2019</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          
          </div>
        </div>    
    </section>




    <!-- Contact me -->

    <section class="contact purple lighten-4 scrollspy" id="contact">
      <div class="container"><br>
        <h4>Contact Me</h4><br><br>
        <div class="row">
          <div class="col m5 s12">
            <div class="card-panel purple darken-4 white-text">
              <!-- <i class="material-icons">email</i> -->
              <h5 class="white-text">Contact</h5>
              <p class="white-text">Jika ada yang ingin ditanyakan atau dikeluhkan, kirim pesan pada saya</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h5>Sekian</h5></li>
              <li class="collection-item">Zaskha Sasmita</li>
              <li class="collection-item">Kp.Babakan Laksana Rt.03/07 No.88</li>
              <li class="collection-item">West Java, Indonesia</li>
            </ul>
          </div>
          <div class="col m7 s12">
            <form>
              <div class="card-panel">
                <h5>Tolong Diisi</h5>
                <div class="input-field">
                  <input type="text" name="name" id="name" required class="validate">
                  <label for="name">Name</label>
                </div>
                <div class="input-field">
                  <input type="email" name="email" id="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="number" name="phone" id="phone" required class="validate">
                  <label for="phone">Phone Number</label>
                </div>
                <div class="input-field">
                  <textarea name="message" id="message" class="materialize-textarea" required class="validate"></textarea>
                  <label for="message">Message</label>
                </div>
                <button class="btn waves-effect waves-light purple darken-4" type="submit" name="action">Kirim
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>



    <!-- Portfolio -->

    <section id="portfolio" class="portfolio scrollspy">
      <div class="container">
        <h4>Portfolio</h4>
        <div class="row">
          <div class="col m3 s12">
            <img src="assets/img/edit.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/guitar.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/lari.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/musik.jpg" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="row">
          <div class="col m3 s12">
            <img src="assets/img/ngoding.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/disc.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/karatai.jpg" class="responsive-img materialboxed">
          </div>
          <div class="col m3 s12">
            <img src="assets/img/pasukan.jpg" class="responsive-img materialboxed">
          </div>
        </div>
      </div>
    </section>







    <!-- Footer -->
    <footer class="purple darken-4 white-text center">
      <p>Zaskha Sasmita, Copyright 2019 &copy;</p>
      
    </footer>




    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red">
        <i class="large material-icons purple darken-2">menu</i>
      </a>
      <ul>
        <li><a class="btn-floating red" href="https://www.youtube.com/channel/UC7YaJJ5h5uhyJcGcnP-hcHQ" target="_blank"><p>Youtube</p></a></li>
        <li><a class="btn-floating blue darken-4" href="https://web.facebook.com/zaskha.sasmita" target="_blank"><p>Facebook</p></a></li>
        <li><a class="btn-floating purple" href="https://www.instagram.com/zaskha_07/" target="_blank"><p>Instagram</p></a></li>
        <li><a class="btn-floating blue" href="https://twitter.com/SZaskha" target="_blank"><p>Tweeter</p></a></li>
      </ul>
    </div>
          


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      const scroll = document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll,{scrollOffset:100});
         document.addEventListener('DOMContentLoaded', function() {
         var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
      direction: 'left',
      hoverEnabled: false
    });
  });
     
</script>
  </body>
</html>


<?php
    }else{
        echo "<h1 style='color:red'>GAGAL LOGIN</h1>";
    }
}

$username = $_GET['username'];
$password = $_GET['password'];

cekLogin($username, $password);

?>