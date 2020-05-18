<?php

echo "<b>Macam-macam perangkat keras komputer dan fungsinya</b><br><br>";

$hardware = [
    'Motherboard' => 'Papan Sirkuit komponen komputer',
    'Processor' => 'Sebuah IC yang mengontrol seluruh jalanya sistem komputer',
    'Hard Disk' => 'Media Penyimpanan Sekunder',
    'PC Cooler' => 'Mengurangi panas yang dihasilkan Komputer',
    'VGA Card' => 'Mengolah Data Grafik Yang akan ditampilkan oleh monitor',
    'Optical Drive' => 'Membaca, maupun menulis data dari kepingan CD',
    'Card Reader' => 'Untuk membaca data-data yang tersimpan didalam memory card',
    'Modem' => 'Mengubah Sinyal Digital menjadi Sinyal Analog'
];

echo "<table>";
foreach ($hardware as $h => $value) {
    echo "<tr>";
    echo "<td>$h</td>";
    echo "<td> : $value</td>";
    echo "</tr>";
}
echo "</table>";

?>


<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>