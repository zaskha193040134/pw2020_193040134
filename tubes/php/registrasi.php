<?php

require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "
        <script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>
    ";
  } else {
    echo "
            <script>
                alert('Registrasi Gagal');
            </script>
        ";
  }
}

?>
<html>

<head>
  <title>LOGIN</title>
  <style>
    /* Loading */
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


    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */
    /* /////////////////////////////////////////////////////////// */






    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:700');

    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto Condensed', sans-serif;
      letter-spacing: .5px;
    }

    section {
      width: 100%;
      height: 100vh;
      background: url('../assets/img_stock/reg.jpg');
      background-size: cover;
      position: relative;
      top: 0;
      left: 0;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 340px;
      text-align: center;

    }

    .login-form {
      position: relative;
      box-sizing: border-box;
      padding: 60px 30px;
      transition: .5s;
      background: rgba(255, 255, 255, .05);
    }

    .login-form:hover {
      background: rgba(255, 255, 255, .1);
      box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    }

    .login-form h1 {
      margin: 0 0 20px;
      color: #fff;
      font-size: 30px;
      text-transform: uppercase;
    }

    .login-form input {
      display: block;
      width: 100%;
      padding: 10px 20px;
      box-sizing: border-box;
      margin-bottom: 20px;
      border-radius: 20px;
      outline: none;
      font-size: 14px;
      letter-spacing: 1px;
      color: #fff;
      /* text-transform: uppercase; */
      border: none;
      background: rgba(255, 255, 255, .1);
      font-family: 'Roboto Condensed', sans-serif;
    }

    .login-form input::placeholder {
      color: fff;
    }

    .login-form input[type="submit"] {
      color: #fff;
      background: #0072ff;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
      background: #005aca;
    }

    .login-form a {
      text-decoration: none;
      font-weight: bold;
      color: #fff;
      text-transform: uppercase;
    }

    .login-form a:hover {
      text-decoration: none;
      font-weight: bold;
      color: #0072ff;
      text-transform: uppercase;
    }




    /* ////////////////////////////////////////////////// */
    /* ////////////////////////////////////////////////// */
  </style>
</head>

<body>


  <section>
    <div class="container">
      <div class="login-form">
        <h1>DAFTAR</h1>
        <form action="" method="post">
          <input type="text" name="username" autocomplete="off" placeholder="username" required>
          <input type="password" name="password" autocomplete="off" placeholder="password" required>
          <input type="submit" name="register" value="Daftar"><br>
          <a href="admin.php" class="back">Back to login page</a>
          <br><br>
          <a href="../" class="back">Back to Home</a>
        </form>
      </div>
    </div>
  </section>


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

  <a href="login.php"><img style="
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