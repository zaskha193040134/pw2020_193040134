<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if (isset($_SESSION['username'])) {
  header("Location: list-admin.php");
  exit;
}

// cek cookie 
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  //ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: list-admin.php");
    exit;
  }
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokan USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: list-admin.php");
        die;
      }
    }
    // header("Location:list-admin.php");
    // die;
  }
  $error = true;
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
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


  <div class="form">
    <form action="" method="post">
      <h2><b>Login</b></h2>
      <div class="input">
        <div class="inputBox">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="//username: admin" autocomplete="off" required>
        </div>
        <div class="inputBox">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="//password: 12345" autocomplete="off" required>
        </div>
        <div class="tooltip">
          <div class="remember">
            <label>
              <input type="checkbox" name="remember">
              <span class="tooltiptext">Mengingat anda ketika keluar dari Browser.<br>Anda bisa langsung masuk tanpa harus
                melakukan Login</span>
              <span class="remtext">Remember me</span>
            </label>
          </div>
        </div>
        <div class="inputBox">
          <input type="submit" name="submit" value="Sign In">
        </div>
      </div>
      <div class="registrasi">
        <p class="ingat">Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
        <p class="ingat"><a href="../"><b>Back to Home</b></a></p>
      </div>
      <?php if (isset($error)) : ?>
        <p style="color : red; font-style : italic; font-size : 12px;">Username Atau Password salah</p>
      <?php endif; ?>
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

  <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            left:20px;
        " src="../assets/img_stock/back.png" alt=""></a>

  <script>
    var loading = document.getElementById("loading");

    window.addEventListener('load', function() {
      loading.style.display = "none";
    });
  </script>

</body>

</html>