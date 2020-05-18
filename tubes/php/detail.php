<?php
//mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET["id"])) {
  header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang mengambil dari url
$alat_musik  = query("SELECT * FROM alat_musik WHERE id = $id")[0];

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Righteous&display=swap" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- my css -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    body {
      background: linear-gradient(45deg, red, blue);
      color: white;
      font-family: 'Righteous', cursive;
      letter-spacing: .7px;
    }

    /* imageshake */
    img:hover {
      /* Start the shake animation and make the animation last for 0.5 seconds */
      animation: shake 0.5s;

      /* When the animation is finished, start again */
      animation-iteration-count: infinite;
    }

    @keyframes shake {
      0% {
        transform: translate(1px, 1px) rotate(0deg);
      }

      10% {
        transform: translate(-1px, -2px) rotate(-1deg);
      }

      20% {
        transform: translate(-3px, 0px) rotate(1deg);
      }

      30% {
        transform: translate(3px, 2px) rotate(0deg);
      }

      40% {
        transform: translate(1px, -1px) rotate(1deg);
      }

      50% {
        transform: translate(-1px, 2px) rotate(-1deg);
      }

      60% {
        transform: translate(-3px, 1px) rotate(0deg);
      }

      70% {
        transform: translate(3px, 1px) rotate(-1deg);
      }

      80% {
        transform: translate(-1px, -1px) rotate(1deg);
      }

      90% {
        transform: translate(1px, 2px) rotate(0deg);
      }

      100% {
        transform: translate(1px, -2px) rotate(-1deg);
      }
    }



    .penjelasan {
      text-align: justify;
      margin-top: -20px;
    }

    .container {
      background-color: white;
      padding: 20px;
    }

    .card {
      padding: 20px;
      border-radius: 5px;
      background: linear-gradient(45deg, red, blue);
    }

    .gambar {
      align-items: center;
      justify-content: center;
      display: flex;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col m4">
        <div class="card">
          <div class="gambar">
            <img width="200" src="../assets/img/<?= $alat_musik["foto"]; ?>" alt="">
          </div>
        </div>
      </div>
      <div class="col m8">
        <div class="card">
          <div class="keterangan">

            <table>
              <tr>
                <td><b>Nama</b></td>
                <td><b> : </b></td>
                <td><?= $alat_musik['nama'] ?></td>
              </tr>
              <tr>
                <td><b>Sumber</b></td>
                <td><b> : </b></td>
                <td><?= $alat_musik['sumber_bunyi'] ?></td>
              </tr>
              <tr>
                <td><b>Cara Pakai</b></td>
                <td><b> : </b></td>
                <td><?= $alat_musik['Cara_pakai'] ?></td>
              </tr>
              <tr>
                <td><b>Fungsi</b></td>
                <td><b> : </b></td>
                <td><?= $alat_musik['fungsi'] ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col m12">

        <div class="card">
          <div class="penjelasan">
            <h3>Penjelasan Singkat</h3>
            <p><?= $alat_musik['penjelasan'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>