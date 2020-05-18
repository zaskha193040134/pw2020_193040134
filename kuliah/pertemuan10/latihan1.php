<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040134');

// Query isi table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam bentuk array
// $row = mysqli_fetch_array($result); //dua duanya
// $row = mysqli_fetch_row($result); //array numerik
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
} //array associative
// var_dump($rows);


// tampung ke variable mahasiswa
$mahasiswa  = $rows;

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img width="75" src="img/<?= $m['img'] ?>"></td>
        <td><?= $m['nrp'] ?></td>
        <td><?= $m['nama'] ?> </td>
        <td><?= $m['email'] ?></td>
        <td><?= $m['jurusan'] ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
  <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>
</body>

</html>