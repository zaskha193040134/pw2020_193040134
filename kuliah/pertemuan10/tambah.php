<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "<script>
    alert('data gagal ditambahkan');
    document.location.href = 'latihan3.php';
  </script>";
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
          <label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
          <label>
      </li>
      <li>
        <label>
          E-Mail:
          <input type="text" name="email" required>
          <label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
          <label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="img" required>
          <label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>




  <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>
</body>

</html>