<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Modul 2 - Latihan 1</title>
</head>

<body>
  <table border="1" cellpadding="3" cellspacing="0">
    <tr>
      <th>Kolom 1</th>
      <th>Kolom 2</th>
      <th>Kolom 3</th>
      <th>Kolom 4</th>
      <th>Kolom 5</th>
    </tr>

    <!-- TULIS SCRIPT PHP DIBAWAH BARIS INI -->

    <?php
    $b = 1;
    while ($b <= 5) {

      echo "<tr>"; //pembuka baris

      if ($b % 2) {
        for ($k = 1; $k <= 5; $k++) {
          echo "<td>Baris $b, Kolom $k</td>"; //kolom 
        }
      } else {
        for ($k = 1; $k <= 5; $k++) {
          echo "<td>&nbsp;</td>"; //kolom 
        }
      }


      echo "</tr>"; //penutup baris
      $b++;
    }
    ?>



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