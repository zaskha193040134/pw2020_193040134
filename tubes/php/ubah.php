<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil id dari url admin.php
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$alm = query("SELECT * FROM alat_musik WHERE id = $id")[0];
// var_dump($alm);

//memastikan kalau tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'update-admin.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'update-admin.php';
            </script>
            ";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #03080a;
        }

        .container {
            width: 80%;
            padding: 20px;
        }

        .container h2 {
            width: 100%;
            color: #45f3ff;
            font-size: 36px;
            text-align: center;
            margin-bottom: 10px;
        }

        .container .row100 {
            position: relative;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .container .row100 .col {
            position: relative;
            width: 100%;
            padding: 0 10px;
            margin: 30px 0 10px;
            transition: 0.5s;
        }

        .container .row100 .inputBox {
            position: relative;
            width: 100%;
            height: 40px;
            color: #45f3ff;
        }

        .container .row100 .inputBox input,
        .container .row100 .inputBox.textarea textarea {
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            box-shadow: none;
            border: none;
            outline: none;
            font-size: 18px;
            padding: 0 10px;
            z-index: 1;
            color: #000;
        }

        .container .row100 .inputBox .text {
            position: absolute;
            top: 0;
            left: 0;
            line-height: 40px;
            font-size: 18px;
            padding: 0 10px;
            display: block;
            transition: 0.5s;
            pointer-events: none;
        }

        .container .row100 .inputBox input:focus+.text,
        .container .row100 .inputBox input:valid+.text {
            top: -35px;
            left: -10px;
        }

        .container .row100 .inputBox .line {
            position: absolute;
            bottom: 0;
            display: block;
            width: 100%;
            height: 2px;
            background: #45f3ff;
            transition: 0.5s;
            border-radius: 2px;
            pointer-events: none;
        }

        .container .row100 .inputBox input:focus~.line,
        .container .row100 .inputBox input:valid~.line {
            height: 100%;
        }

        .container .row100 .inputBox.textarea {
            position: relative;
            width: 100%;
            height: 100px;
            padding: 10px 0;
        }

        .container .row100 .inputBox.textarea textarea {
            height: 100%;
            resize: none;
        }

        .container .row100 .inputBox textarea:focus+.text,
        .container .row100 .inputBox textarea:valid+.text {
            top: -35px;
            left: -10px;
        }

        .container .row100 .inputBox textarea:focus~.line,
        .container .row100 .inputBox textarea:valid~.line {
            height: 100%;
        }

        input[type="submit"] {
            border: none;
            padding: 14px 100px;
            /* yang ini */
            float: right;
            cursor: pointer;
            outline: none;
            background: #45f3ff;
            color: #000;
            font-size: 18px;
            border-radius: 2px;
        }


        input[type="file"] {
            display: none;
        }

        label {
            color: #000;
            height: 60px;
            border-radius: 3px;
            width: 250px;
            /*yang ini*/
            background-color: #45f3ff;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preview {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media screen and (max-width:800px) {
            input[type="submit"] {
                padding: 14px 100px;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }


            label {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        .back {
            width: 200px;
            height: 100px;
            position: relative;
            top: 0;
            left: 0;
        }
    </style>
</head>

<!-- //////////////////////////////////////////// -->
<!-- //////////////////////////////////////////// -->
<!-- //////////////////////////////////////////// -->

<body>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Ubah Data</h2>
            <input type="hidden" name="id" value="<?= $alm['id'] ?>">
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="nama" id="nama" required value="<?= $alm['nama'] ?>">
                        <span class="text">Nama Alat Musik</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="sumber_bunyi" id="sumber_bunyi" required value="<?= $alm['sumber_bunyi'] ?>">
                        <span class="text">Sumber Bunyi</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="Cara_pakai" id="Cara_pakai" required value="<?= $alm['Cara_pakai'] ?>">
                        <span class="text">Cara Pakai</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="fungsi" id="fungsi" required value="<?= $alm['fungsi'] ?>">
                        <span class="text">Fungsi</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="penjelasan" id="penjelasan" required="required"><?= $alm['penjelasan'] ?></textarea>
                        <span class="text">Penjelasan Singkat</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="hidden" name="foto_lama" value="<?= $alm['foto']; ?>">
                        <input type="file" accept="image/*" name="foto" id="foto" class="foto" onchange="previewImage()">
                        <label for="foto">
                            <i class="material-icons">add_photo_alternate</i>
                            &nbsp;
                            Upload Gambar
                        </label>
                        <!-- <span class="line"></span> -->
                    </div>
                </div>
                <div class="col">
                    <!-- <input type="submit" name="submit" value="Send"> -->
                    <div class="preview">
                        <img src="../assets/img/<?= $alm['foto']; ?>" width="120" style="display: block;" class="img-preview">
                    </div>
                </div>
                <div class="col">
                    <input type="submit" name="ubah" value="Ubah Data">
                </div>
                <!-- <button type="submit">
                    <a href="admin.php" style="text-decoration : none; color : black;">Kembali</a>
                </button> -->
            </div>
            <br><br><br><br>
            <!-- <div class="row100">

      </div> -->
        </form>
    </div>


    <a href="update-admin.php"><img style="
            width: 100px;
            height: 50px;
            position: absolute;
            top:20px;
            left:20px;
        " src="../assets/img_stock/back.png" alt=""></a>

    <script src="../js/script.js"></script>

</body>

</html>