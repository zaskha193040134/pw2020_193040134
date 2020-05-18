<?php
session_start();

if (isset($_SESSION['username'])) {
  header('Location:admin.php');
} else {
  setcookie('username', '', time() - 3600);
  setcookie('hash', '', time() - 3600);
  header("Location: ../index.php");
}
