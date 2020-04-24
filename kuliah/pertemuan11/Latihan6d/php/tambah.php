<?php
    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Tambah Data Alat Musik</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">NAMA : </label><br>
            <input type="text" name = "nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="sumber_bunyi">SUMBER BUNYI : </label><br>
            <input type="text" name = "sumber_bunyi" id="sumber_bunyi" required><br><br>
        </li>
        <li>
            <label for="Cara_pakai">CARA PAKAI : </label><br>
            <input type="text" name = "Cara_pakai" id="Cara_pakai" required><br><br>
        </li>
        <li>
            <label for="fungsi">FUNGSI : </label><br>
            <input type="text" name = "fungsi" id="fungsi" required><br><br>
        </li>
        <li>
            <label for="foto">FOTO : </label><br>
            <input type="text" name = "foto" id="foto" required><br><br>
        </li>
        <li>
            <br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>