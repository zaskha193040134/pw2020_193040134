<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'update-admin.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Data Gagal ditambahkan!');
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

        /* Loading */
        /* LOADING */
        * {
            margin: 0;
            padding: 0;
        }

        #loading {
            background: #000;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
            align-items: center;
            min-height: 100vh;
            justify-content: center;
        }

        .loader {
            display: flex;
            align-items: flex-end;
            transform: translateY(-80px);
            transform: translateX(-80px);
            position: relative;
            top: 35%;
            left: 50%;
            margin: auto;

        }

        .loader span {
            width: 10px;
            height: 10px;
            background: #111;
            margin: 0 5px;
            height: calc(10px * var(--i));
            display: flex;
            justify-content: center;
            align-items: flex-end;
            animation: animate 2s linear infinite;
            animation-delay: calc(0.25s * var(--i));
        }

        @keyframes animate {
            0% {
                background: #fff;
                filter: blur(2px);
                box-shadow:
                    0 0 10px #00b3ff,
                    0 0 20px #00b3ff,
                    0 0 40px #00b3ff,
                    0 0 80px #00b3ff,
                    0 0 120px #00b3ff,
                    0 0 200px #00b3ff,
                    0 0 300px #00b3ff,
                    0 0 400px #00b3ff;
            }

            25%,
            75% {
                background: #111;
                filter: blur(0);
                box-shadow: none;
            }

            100% {
                background: #fff;
                filter: blur(2px);
                box-shadow:
                    0 0 10px #00b3ff,
                    0 0 20px #00b3ff,
                    0 0 40px #00b3ff,
                    0 0 80px #00b3ff,
                    0 0 120px #00b3ff,
                    0 0 200px #00b3ff,
                    0 0 300px #00b3ff,
                    0 0 400px #00b3ff;
            }
        }

        .loader span i {
            display: block;
            font-style: normal;
            color: #fff;
            font-size: 25px;
            font-weight: bold;
            transform: translateY(70px);

            animation: animate2 2s linear infinite;
            animation-delay: calc(0.25s * var(--i));
        }

        @keyframes animate2 {
            0% {
                color: #fff;
                filter: blur(2px);
                text-shadow:
                    0 0 10px #00b3ff,
                    0 0 20px #00b3ff,
                    0 0 40px #00b3ff,
                    0 0 80px #00b3ff,
                    0 0 120px #00b3ff,
                    0 0 200px #00b3ff,
                    0 0 300px #00b3ff,
                    0 0 400px #00b3ff;
            }

            25%,
            75% {
                color: #111;
                filter: blur(0);
                text-shadow: none;
            }

            100% {
                color: #fff;
                filter: blur(2px);
                text-shadow:
                    0 0 10px #00b3ff,
                    0 0 20px #00b3ff,
                    0 0 40px #00b3ff,
                    0 0 80px #00b3ff,
                    0 0 120px #00b3ff,
                    0 0 200px #00b3ff,
                    0 0 300px #00b3ff,
                    0 0 400px #00b3ff;
            }
        }
    </style>

</head>



<body>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Tambah Data</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="nama" id="nama" required>
                        <span class="text">Nama Alat Musik</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="sumber_bunyi" id="sumber_bunyi" required>
                        <span class="text">Sumber Bunyi</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="Cara_pakai" id="Cara_pakai" required>
                        <span class="text">Cara Pakai</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="fungsi" id="fungsi" required>
                        <span class="text">Fungsi</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="penjelasan" id="penjelasan" required="required"></textarea>
                        <span class="text">Penjelasan Singkat</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
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
                        <img src="../assets/img/nophoto.png" width="120" style="display: inline;" class="img-preview">
                    </div>
                </div>
                <div class="col">
                    <input type="submit" name="tambah" value="Tambah Data">
                </div>
            </div>
            <br><br><br><br>
            <!-- <div class="row100">

      </div> -->
        </form>
    </div>

    <div id="loading">
        <div class="loader">
            <span style="--i:1;"><i>L</i></span>
            <span style="--i:2;"><i>o</i></span>
            <span style="--i:3;"><i>a</i></span>
            <span style="--i:4;"><i>d</i></span>
            <span style="--i:5;"><i>i</i></span>
            <span style="--i:6;"><i>n</i></span>
            <span style="--i:7;"><i>g</i></span>
            <span style="--i:8;"><i>.</i></span>
        </div>
    </div>

    <a href="list-admin.php"><img style="
            width: 100px;
            height: 50px;
            position: absolute;
            top:20px;
            left:20px;
        " src="../assets/img_stock/back.png" alt=""></a>

    <script src="../js/script.js"></script>

    <script>
        var loading = document.getElementById("loading");

        window.addEventListener('load', function() {
            loading.style.display = "none";
        });
    </script>

</body>

</html>