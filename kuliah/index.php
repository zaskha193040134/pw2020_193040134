<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
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
      padding: 0 100px;
    }



    /* Dropdown Button */
    .dropbtn {

      background: linear-gradient(45deg, blue, red);
      border: 1px solid #fff;
      color: white;
      padding: 20px 30px;
      font-size: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;

    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
      margin: 10px;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 240px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      margin: 0 auto;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
      background: linear-gradient(45deg, #ccff00, #09afff)
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
  </style>

</head>

<body>

  <div class="container">
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan1</button>
      <div class="dropdown-content">
        <a href="pertemuan1/hello.php">Hello.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan2</button>
      <div class="dropdown-content">
        <a href="pertemuan2/latihan1a.php">latihan1a.php</a>
        <a href="pertemuan2/latihan1b.php">latihan1b.php</a>
        <a href="pertemuan2/latihan1c.php">latihan1c.php</a>
        <a href="pertemuan2/tipedata.php">tipedata.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan3</button>
      <div class="dropdown-content">
        <a href="pertemuan3/latihan2a.php">latihan2a.php</a>
        <a href="pertemuan3/latihan2b.php">latihan2b.php</a>
        <a href="pertemuan3/latihan2c.php">latihan2c.php</a>
        <a href="pertemuan3/latihan2d.php">latihan2d.php</a>
        <a href="pertemuan3/latihan2e.php">latihan2e.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan4</button>
      <div class="dropdown-content">
        <a href="pertemuan4/fungsi.php">fungsi.php</a>
        <a href="pertemuan4/hitungkubus.php">hitungkubus.php</a>
        <a href="pertemuan4/hitunglingkaran.php">hitunglingkaran.php</a>
        <a href="pertemuan4/strReplace.php">strReplace.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan5</button>
      <div class="dropdown-content">
        <a href="pertemuan5/latihanarray.php">latihanarray.php</a>
        <a href="pertemuan5/latihanarray2.php">latihanarray2.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan6</button>
      <div class="dropdown-content">
        <a href="pertemuan6/latihan4a.php">latihan4a.php</a>
        <a href="pertemuan6/latihan4b.php">latihan4b.php</a>
        <a href="pertemuan6/latihan4c.php">latihan4c.php</a>
        <a href="pertemuan6/latihan4d.php">latihan4d.php</a>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="dropdown ">
      <button class="dropbtn ">pertemuan 7</button>
      <div class="dropdown-content">
        <a href="pertemuan7/form.php">form.php</a>
        <a href="pertemuan7/kalkulator.php">kalkulator.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan 9</button>
      <div class="dropdown-content">
        <a href="pertemuan9/pw_193040134.sql">pw_193040134.sql</a>
        <a href="pertemuan9/tubes_193040134.sql">tubes_193040134.sql</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan10</button>
      <div class="dropdown-content">
        <a href="pertemuan10/latihan1.php">latihan1.php</a>
        <a href="pertemuan10/latihan2.php">latihan2.php</a>
        <a href="pertemuan10/latihan3.php">latihan3.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan11</button>
      <div class="dropdown-content">
        <a href="pertemuan11/index.php">index.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan12</button>
      <div class="dropdown-content">
        <a href="pertemuan12/index.php">index.php</a>
      </div>
    </div>
    <div class="dropdown ">
      <button class="dropbtn ">pertemuan13</button>
      <div class="dropdown-content">
        <a href="pertemuan13/index.php">index.php</a>
      </div>
    </div>
  </div>


  <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            left:20px;
        " src="../tubes/assets/img_stock/back.png" alt=""></a>


</body>

</html>