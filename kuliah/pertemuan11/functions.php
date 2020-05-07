<?php

// Koneksi ke DB & Pilih Database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_193040134');
}

// query
function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// tambah data
function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $img = htmlspecialchars($data['img']);

  $query = "INSERT INTO
            mahasiswa
            VALUES
            (null, '$img', '$nrp', '$nama', '$email', '$jurusan' );
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//ubah data 
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $img = htmlspecialchars($data['img']);

  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            img = '$img'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

//cari data
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa 
          WHERE 
          nama LIKE '%$keyword%' OR
          nrp LIKE '%$keyword%' OR
          jurusan LIKE '%$keyword%' OR
          email LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
