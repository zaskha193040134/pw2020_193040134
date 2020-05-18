<?php
require '../php/functions.php';
$alat_musik = cari($_GET['keyword']);
?>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Latihan6a</title>

<a href="" style="
  width:20px;
  height:20px;
  background-color:#26a69a;
  color:white;
  padding :20px;
  border-radius:5px;
  text-shadow: 1px 1px 2px grey;
  box-shadow:0px 0px 1px 1px grey;
  margin:10px;
  font-size:20px;
">Refresh</a>

<table class="bordered striped highlight centered " style="margin-left:-70px;" cellpadding="13" cellspacing="0">
  <thead>
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>foto</th>
      <th>nama</th>
      <th>Sumber Bunyi</th>
      <th>Cara Pakai</th>
      <th>Fungsi</th>
      <th>Penjelasan</th>
      <th>Preview detail</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($alat_musik)) : ?>
      <tr>
        <td colspan="9">
          <h1>
            Data Tidak Ditemukan

          </h1>
        </td>
      </tr>

    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($alat_musik as $alm) : ?>

        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $alm['id'] ?>">
              <button class="waves-effect waves-light btn-small" style="font-family: 'Righteous', cursive;">
                <div>
                  Ubah
                </div>
              </button>
            </a>
            <a href="hapus.php?id=<?= $alm['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="tomm waves-effect waves-light btn-small" style="font-family: 'Righteous', cursive;">Hapus</button></a>
          </td>

          <td><img width="150" src="../assets/img/<?= $alm['foto'] ?>" alt=""></td>
          <td><?= $alm['nama'] ?></td>
          <td><?= $alm['sumber_bunyi'] ?></td>
          <td><?= $alm['Cara_pakai'] ?></td>
          <td><?= $alm['fungsi'] ?></td>
          <td>
            <div class="card grey lighten-3 displaydes h-10">
              <?= $alm['penjelasan'] ?>
            </div>
          </td>
          <td>
            <a href="detail.php?id=<?= $alm['id'] ?>"><button style="font-family: 'Righteous', cursive;border-radius:5px;margin:10px;background-color:indigo;height: 80px; width:160px;" class="waves-effect waves-light btn-small">Preview</button></a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>


<script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="../js/script_admin.js"></script>