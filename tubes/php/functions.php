<?php

function koneksi()
{
  $conn = mysqli_connect("127.0.0.1", "root", "") or die("Koneksi ke DB Gagal");
  mysqli_select_db($conn, "tubes_193040134") or die("Database Salahaaaa!");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  // tidak ada gambar yg dipilih
  if ($error == 4) {
    // echo "
    //         <script>
    //             alert('pilih gambar terlebih dahulu');
    //         </script>";
    return 'nophoto.png';
  }
  // cek ekstensi files
  $daftar_foto = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_foto)) {
    echo "
        <script>
            alert('yang anda pilih bukan gambar');
        </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "
        <script>
            alert('yang anda pilih bukan gambar');
        </script>";
    return false;
  }

  // maximal ukuran gambar = 5000000 (5mb)
  if ($ukuran_file > 5000000) {
    echo "
        <script>
            alert('ukuran file terlalu besar');
        </script>";
    return false;
  }


  // lolos
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  // $foto           = htmlspecialchars($data['foto']);
  $nama           = htmlspecialchars($data['nama']);
  $sumber_bunyi   = htmlspecialchars($data['sumber_bunyi']);
  $Cara_pakai     = htmlspecialchars($data['Cara_pakai']);
  $fungsi         = htmlspecialchars($data['fungsi']);
  $penjelasan     = htmlspecialchars($data['penjelasan']);

  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO alat_musik
                VALUES 
                (NULL,'$foto','$nama','$sumber_bunyi','$Cara_pakai' , '$fungsi' , '$penjelasan')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // deleting an image in img folder
  $alm = query("SELECT * FROM alat_musik WHERE id = $id");
  if ($alm[0]['foto'] != 'nophoto.png') {
    unlink('../assets/img/' . $alm[0]['foto']);
  }


  mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id             = $data['id'];
  $foto_lama      = htmlspecialchars($data['foto_lama']);
  $nama           = htmlspecialchars($data['nama']);
  $sumber_bunyi   = htmlspecialchars($data['sumber_bunyi']);
  $Cara_pakai     = htmlspecialchars($data['Cara_pakai']);
  $fungsi         = htmlspecialchars($data['fungsi']);
  $penjelasan     = htmlspecialchars($data['penjelasan']);

  $foto = upload();
  if (!$foto) {
    return false;
  }

  if ($foto == 'nophoto.png') {
    $foto = $foto_lama;
  }

  $query = "UPDATE alat_musik SET
            foto = '$foto',
            nama = '$nama',
            sumber_bunyi = '$sumber_bunyi',
            Cara_pakai = '$Cara_pakai',
            fungsi = '$fungsi',
            penjelasan = '$penjelasan'
            WHERE id = $id

    ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "
        <script>
            alert('username sudah digunakan');
        </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES (NULL , '$username' , '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM alat_musik 
          WHERE 
          nama LIKE '%$keyword%' OR
          foto LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' OR
          sumber_bunyi LIKE '%$keyword%' OR
          Cara_pakai LIKE '%$keyword%' OR
          sumber_bunyi LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
