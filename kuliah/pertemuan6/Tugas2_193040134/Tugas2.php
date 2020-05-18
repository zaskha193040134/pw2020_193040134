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
    ["foto" => "<img src='assets/samsung.png'>", "merk" => "samsung", "jenis" => "android", "warna" => "cream", "harga" => 2800000], // 0
    ["foto" => "<img src='assets/xiaomi.png'>", "merk" => "xiaomi", "jenis" => "android", "warna" => "silver", "harga" => 2500000], // 1
    ["foto" => "<img src='assets/lenovo.png'>", "merk" => "lenovo", "jenis" => "android", "warna" => "hitam", "harga" => 1500000], //2
    ["foto" => "<img src='assets/huawei.png'>", "merk" => "huawei", "jenis" => "android", "warna" => "biru", "harga" => 1200000], // 3
    ["foto" => "<img src='assets/iphone11pro.png'>", "merk" => "iphone 11 pro", "jenis" => "iOS", "warna" => "grey", "harga" => 20000000], //4
    ["foto" => "<img src='assets/iphonex.png'>", "merk" => "iphone x", "jenis" => "iOS", "warna" => "white", "harga" => 15000000], //5
    ["foto" => "<img src='assets/realme.png'>", "merk" => "realme", "jenis" => "android", "warna" => "purple", "harga" => 5000000], //6
    ["foto" => "<img src='assets/nokia.png'>", "merk" => "nokia", "jenis" => "Palm", "warna" => "red", "harga" => 2900000], //7
    ["foto" => "<img src='assets/sony.png'>", "merk" => "sony", "jenis" => "android", "warna" => "black", "harga" => 1100000], //8
    ["foto" => "<img src='assets/blackberry.png'>", "merk" => "blackberry", "jenis" => "Blackberry", "warna" => "black", "harga" => 1400000] //9
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