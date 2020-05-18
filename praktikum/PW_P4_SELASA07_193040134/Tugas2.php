<html>

<head>
    <title>Tugas</title>
    <style>
        img {
            width: 150px;
            padding: 20px;
        }

        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $alatMusik = [
        ["foto" => "<img src='assets/flute.png'>", "nama" => "Flute", "bunyi" => "Aerophone", "pakai" => "Ditiup", "fungsi" => "Melodis"],
        ["foto" => "<img src='assets/gitar.png'>", "nama" => "Gitar", "bunyi" => "Chordophone", "pakai" => "Dipetik", "fungsi" => "Harmonis"],
        ["foto" => "<img src='assets/drum.png'>", "nama" => "Drum", "bunyi" => "Membranophone", "pakai" => "Dipukul", "fungsi" => "Ritmis"],
        ["foto" => "<img src='assets/clarinet.png'>", "nama" => "Clarinet", "bunyi" => "Aerophone", "pakai" => "Ditiup", "fungsi" => "Melodis"],
        ["foto" => "<img src='assets/piano.png'>", "nama" => "Piano", "bunyi" => "Chordophone", "pakai" => "Ditekan", "fungsi" => "Harmonis"],
        ["foto" => "<img src='assets/biola.png'>", "nama" => "Biola", "bunyi" => "Chordophone", "pakai" => "Digesek", "fungsi" => "Melodis"],
        ["foto" => "<img src='assets/pianika.png'>", "nama" => "Pianika", "bunyi" => "Aerophone", "pakai" => "Ditiup, <br>Ditekan", "fungsi" => "Melodis"],
        ["foto" => "<img src='assets/harmonica.png'>", "nama" => "Harmonica", "bunyi" => "Aerophone", "pakai" => "Ditiup", "fungsi" => "Ritmis"],
        ["foto" => "<img src='assets/kendang.png'>", "nama" => "Kendang", "bunyi" => "Membranophone", "pakai" => "Dipukul", "fungsi" => "Ritmis"],
        ["foto" => "<img src='assets/rebana.png'>", "nama" => "Rebana", "bunyi" => "Membranophone", "pakai" => "Dipukul", "fungsi" => "Ritmis"]
    ];
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Foto</th>
            <th>Nama Alat Musik</th>
            <th>Sumber Bunyinya</th>
            <th>Cara memainkanya</th>
            <th>Fungsinya</th>
        </tr>
        <?php for ($i = 0; $i < count($alatMusik); $i++) { ?>
            <tr>
                <td><?= $alatMusik[$i]["foto"] ?></td>
                <td><?= $alatMusik[$i]["nama"] ?></td>
                <td><?= $alatMusik[$i]["bunyi"] ?></td>
                <td><?= $alatMusik[$i]["pakai"] ?></td>
                <td><?= $alatMusik[$i]["fungsi"] ?></td>
            </tr>
        <?php } ?>
    </table>

    <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>

</body>