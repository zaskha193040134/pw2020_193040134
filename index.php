<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(45deg, #24006b, #f42f8c);
      width: auto;
      height: auto;
    }

    .container {
      width: 1200px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      grid-gap: 15px;
      margin: 100 auto 0;
    }

    .container .card {
      position: relative;
      width: 320px;
      height: 420px;
      margin: 0 auto;
      background: linear-gradient(45deg, red, blue);
      box-shadow: 0 15px 60px rgba(0, 0, 0, .5);
    }

    .container .card .face {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container .card .face.face1 {
      box-sizing: border-box;
      padding: 20px;
    }

    .container .card .face.face1 h2 {
      margin: 0;
      padding: 0;
    }

    .container .card .face.face2 {
      background: #111;
      transition: 0.5s;
    }

    .container .card:nth-child(1) .face.face2 {
      background: linear-gradient(45deg, #3503ad, #f7308c);
    }

    .container .card:nth-child(2) .face.face2 {
      background: linear-gradient(45deg, #ccff00, #09afff);
    }

    .container .card:nth-child(3) .face.face2 {
      background: linear-gradient(45deg, #e91e63, #ffeb3b);
    }

    .container .card:hover .face.face2 {
      height: 60px;
    }

    .container .card .face.face2:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background: rgba(255, 255, 255, .1)
    }

    .container .card .face.face2 h2 {
      margin: 0;
      padding: 0;
      font-size: 3em;
      color: #fff;
      transition: 0.5s;
      text-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    }

    .container .card:hover .face.face2 h2 {
      font-size: 2em;
    }


    h1 {
      position: absolute;
      top: 20px;
      color: white;
      font-family: 'Poppins', sans-serif;
    }

    .h2 {
      position: absolute;
      top: 60px;
      color: white;
      font-family: 'Poppins', sans-serif;
    }
  </style>

</head>

<h1>SELAMAT DATANG DI HALAMAN INDEX</h1>
<h2 class="h2">ZASKHA SASMITA - 193040134</h2>

<body>
  <div class="container">
    <div class="card">
      <div class="face face1">
        <div class="content">
          <h2><a href="kuliah" style="text-decoration:none;color:white;">KLIK UNTUK BUKA</a></h2>
        </div>
      </div>
      <div class="face face2">
        <h2>KULIAH</h2>
      </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////// -->
    <!-- ////////////////////////////PRAKTIKUM//////////////////////////////-->
    <!-- ////////////////////////////////////////////////////////////////// -->

    <div class="card">
      <div class="face face1">
        <div class="content">
          <div class="dropdown">
            <h2><a href="praktikum" style="text-decoration:none;color:white;">KLIK UNTUK BUKA</a></h2>
          </div>
        </div>
      </div>
      <div class="face face2">
        <h2>PRAKTIKUM</h2>
      </div>
    </div>

    <div class="card">
      <div class="face face1">
        <div class="content">
          <div class="dropdown ">
            <h2><a href="tubes" style="text-decoration:none;color:white;">KLIK UNTUK BUKA</a></h2>
          </div>



        </div>
      </div>
      <div class="face face2">
        <h2>TUBES</h2>
      </div>
    </div>

  </div>
</body>

</html>