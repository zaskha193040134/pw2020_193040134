<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img{
        height : 75px;
    }
    </style>
</head>
<body>
<?php
$smartPhone = [
    "hp1" => ["foto" => "<img src='assets/samsung.png'>", "merk" => "samsung", "jenis" => "android", "warna" => "cream", "harga" => 2800000],
    "hp2" => ["foto" => "<img src='assets/xiaomi.png'>", "merk" => "xiaomi", "jenis" => "android", "warna" => "silver", "harga" => 2500000],
    "hp3" => ["foto" => "<img src='assets/lenovo.png'>", "merk" => "lenovo", "jenis" => "android", "warna" => "hitam", "harga" => 1500000],
    "hp4" => ["foto" => "<img src='assets/huawei.png'>", "merk" => "huawei", "jenis" => "android", "warna" => "biru", "harga" => 1200000],
    "hp5" => ["foto" => "<img src='assets/iphone11pro.png'>", "merk" => "iphone 11 pro", "jenis" => "iOS", "warna" => "grey", "harga" => 20000000],
    "hp6" => ["foto" => "<img src='assets/iphonex.png'>", "merk" => "iphone x", "jenis" => "iOS", "warna" => "white", "harga" => 15000000],
    "hp7" => ["foto" => "<img src='assets/realme.png'>", "merk" => "realme", "jenis" => "android", "warna" => "purple", "harga" => 5000000],
    "hp8" => ["foto" => "<img src='assets/nokia.png'>", "merk" => "nokia", "jenis" => "Palm", "warna" => "red", "harga" => 2900000],
    "hp9" => ["foto" => "<img src='assets/sony.png'>", "merk" => "sony", "jenis" => "android", "warna" => "black", "harga" => 1100000],
    "hp10" => ["foto" => "<img src='assets/blackberry.png'>", "merk" => "blackberry", "jenis" => "Blackberry", "warna" => "black", "harga" => 1400000],
];
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Foto</th>
        <th>Merk</th>
        <th>Jenis</th>
        <th>Warna</th>
        <th>Harga</th>
    </tr>
    <?php
    foreach($smartPhone as $hape){
        echo "<tr>";
        echo    "<td>".$hape["foto"]."</td>";
        echo    "<td>".$hape["merk"]."</td>";
        echo    "<td>".$hape["jenis"]."</td>";
        echo    "<td>".$hape["warna"]."</td>";
        echo    "<td>".$hape["harga"]."</td>";
        echo "</tr>";
    }
    ?>


</table>
</body>
</html>