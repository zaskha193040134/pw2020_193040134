<?php
require '../php/functions.php';
$alat_musik = cari($_GET['keyword']);
?>

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- My css -->
<link rel="stylesheet" href="css/style-index.css">

<div class="row">
  <?php foreach ($alat_musik as $msk) : ?>
    <div class="col s6 m4 l3">
      <div class="card activator">
        <div class="card-image waves-effect waves-block waves-light">
          <a href="php/detail.php?id=<?= $msk['id'] ?>">
            <img class="activator" height="150" width="auto" src="assets/img/<?= $msk["foto"] ?>">
          </a>
        </div>
        <div class="card-content">
          <div class="card-title">
            <p class="nama"><a href="php/detail.php?id=<?= $msk['id'] ?>"> <?= $msk["nama"] ?> </a></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>