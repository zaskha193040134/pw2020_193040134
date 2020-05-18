<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width : 70px;
            height : 70px;
        }
    </style>
</head>
<body>
    

    <?php
        $alatElektronik = [
            "alat1" => 
            ["gambar" => "<img src='assets/setrika.png'>" , "nama" => "Setrika" , "fungsi" => "Melicinkan pakaian", "merk" => "Sanyo", "harga" => 120000],
            "alat2" => 
            ["gambar" => "<img src='assets/ricecooker.png'>" , "nama" => "Rice Cooker" , "fungsi" => "Memasak Nasi", "merk" => "Cosmos", "harga" => 500000],
            "alat3" => 
            ["gambar" => "<img src='assets/ac.png'>" , "nama" => "AC" , "fungsi" => "Mendinginkan Ruangan", "merk" => "LG", "harga" => 5200000],
            "alat4" => 
            ["gambar" => "<img src='assets/televisi.png'>" , "nama" => "Televisi" , "fungsi" => "Memberikan Informasi dan Hiburan", "merk" => "Toshiba", "harga" => 3400000],
            "alat5" => 
            ["gambar" => "<img src='assets/kulkas.png'>" , "nama" => "Kulkas" , "fungsi" => "Mendinginkan dan mengawetkan makanan", "merk" => "Sanyo", "harga" => 10000000],
            "alat6" => 
            ["gambar" => "<img src='assets/blender.png'>" , "nama" => "Blender" , "fungsi" => "Membuat JUS", "merk" => "Cosmos", "harga" => 1000000],
            "alat7" => 
            ["gambar" => "<img src='assets/mesincuci.png'>" , "nama" => "Mesin Cuci" , "fungsi" => "Mencuci Pakaian", "merk" => "Samsung", "harga" => 4200000],
            "alat8" => 
            ["gambar" => "<img src='assets/vacuumcleaner.png'>" , "nama" => "Vacuum cleaner" , "fungsi" => "Membersihkan Lantai dan Karpet", "merk" => "Yamaha", "harga" => 1200000],
            "alat9" => 
            ["gambar" => "<img src='assets/smartphone.png'>" , "nama" => "Smartphone" , "fungsi" => "Berkomunikasi", "merk" => "Apple", "harga" => 15000000],
            "alat10" => 
            ["gambar" => "<img src='assets/pc.png'>" , "nama" => "PC" , "fungsi" => "Mencari informasi", "merk" => "ROG  ", "harga" => 20000000]
        ];
    ?>

    <table border = "1" cellpadding = "10px" cellspacing = "0" style="text-align: center;">

        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Fungsi</th>
            <th>Merk</th>
            <th>Harga</th>
        </tr>

        <?php
            foreach($alatElektronik as $alat){
                echo "<tr>";
                echo "<td>". $alat["gambar"]."</td>";
                echo "<td>". $alat["nama"]."</td>";
                echo "<td>". $alat["fungsi"]."</td>";
                echo "<td>". $alat["merk"]."</td>";
                echo "<td>". $alat["harga"]."</td>";
                echo "</tr>";
            }
        ?>


    </table>




</body>
</html>