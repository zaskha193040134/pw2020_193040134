<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    $smartPhone = [
        "hp1" => ["no" => 1, "namaPerangkat" => "MotherBoard", "fungsi" => "Papan Sirkuit komponen komputer", "hargaBaru" => 500000, "hargaSekon" => 200000],
        "hp2" => ["no" => 2, "namaPerangkat" => "Processor", "fungsi" => "Sebuah IC yang mengontrol seluruh jalanya sistem komputer", "hargaBaru" => 300000, "hargaSekon" => 200000],
        "hp3" => ["no" => 3, "namaPerangkat" => "Hard Disk", "fungsi" => "Media Penyimpanan Sekunder", "hargaBaru" => 800000, "hargaSekon" => 500000],
        "hp4" => ["no" => 4, "namaPerangkat" => "PC Cooler", "fungsi" => "Mengurangi panas yang dihasilkan Komputer", "hargaBaru" => 200000, "hargaSekon" => 100000],
        "hp5" => ["no" => 5, "namaPerangkat" => "VGA Card", "fungsi" => "Mengolah Data Grafik Yang akan ditampilkan oleh monitor", "hargaBaru" => 900000, "hargaSekon" => 800000],
        "hp6" => ["no" => 6, "namaPerangkat" => "Optical Drive", "fungsi" => "Membaca, maupun menulis data dari kepingan CD", "hargaBaru" => 500000, "hargaSekon" => 300000],
        "hp7" => ["no" => 7, "namaPerangkat" => "Card Reader", "fungsi" => "Untuk membaca data-data yang tersimpan didalam memory card", "hargaBaru" => 10000, "hargaSekon" => 5000],
        "hp8" => ["no" => 8, "namaPerangkat" => "Modem", "fungsi" => "Mengubah Sinyal Digital menjadi Sinyal Analog", "hargaBaru" => 200000, "hargaSekon" => 150000],
    ];
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>Nama Perangkat</th>
            <th>Fungsi</th>
            <th>Harga Baru</th>
            <th>Harga Sekon</th>
        </tr>
        <?php
        foreach ($smartPhone as $hape) {
            echo "<tr>";
            echo    "<td>" . $hape["no"] . "</td>";
            echo    "<td>" . $hape["namaPerangkat"] . "</td>";
            echo    "<td>" . $hape["fungsi"] . "</td>";
            echo    "<td> Rp." . $hape["hargaBaru"] . "</td>";
            echo    "<td> Rp." . $hape["hargaSekon"] . "</td>";
            echo "</tr>";
        }
        $hargaBaru1 = $smartPhone['hp1']['hargaBaru'];
        $hargaBaru2 = $smartPhone['hp2']['hargaBaru'];
        $hargaBaru3 = $smartPhone['hp3']['hargaBaru'];
        $hargaBaru4 = $smartPhone['hp4']['hargaBaru'];
        $hargaBaru5 = $smartPhone['hp5']['hargaBaru'];
        $hargaBaru6 = $smartPhone['hp6']['hargaBaru'];
        $hargaBaru7 = $smartPhone['hp7']['hargaBaru'];
        $hargaBaru8 = $smartPhone['hp8']['hargaBaru'];
        $hargaBaru = $hargaBaru1 + $hargaBaru2 + $hargaBaru3 + $hargaBaru4 + $hargaBaru5 + $hargaBaru6 + $hargaBaru7 + $hargaBaru8;

        $hargaSekon1 = $smartPhone['hp1']['hargaSekon'];
        $hargaSekon2 = $smartPhone['hp2']['hargaSekon'];
        $hargaSekon3 = $smartPhone['hp3']['hargaSekon'];
        $hargaSekon4 = $smartPhone['hp4']['hargaSekon'];
        $hargaSekon5 = $smartPhone['hp5']['hargaSekon'];
        $hargaSekon6 = $smartPhone['hp6']['hargaSekon'];
        $hargaSekon7 = $smartPhone['hp7']['hargaSekon'];
        $hargaSekon8 = $smartPhone['hp8']['hargaSekon'];
        $hargaSekon = $hargaSekon1 + $hargaSekon2 + $hargaSekon3 + $hargaSekon4 + $hargaSekon5 + $hargaSekon6 + $hargaSekon7 + $hargaSekon8;

        echo "<tr>";
        echo "<td>#</td>";
        echo "<td colspan='2' style='text-align:center;'><b>Jumlah</b></td>";
        echo "<td>  Rp." . $hargaBaru . "</td>";
        echo "<td>  Rp." . $hargaSekon . "</td>";
        echo "</tr>";
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