<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "tubes_193040134") or die("Database Salahaaaa!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $foto           = htmlspecialchars($data['foto']);
    $nama           = htmlspecialchars($data['nama']);
    $sumber_bunyi   = htmlspecialchars($data['sumber_bunyi']);
    $Cara_pakai     = htmlspecialchars($data['Cara_pakai']);
    $fungsi         = htmlspecialchars($data['fungsi']);

    $query = "INSERT INTO alat_musik
                VALUES 
                ('','$foto','$nama','$sumber_bunyi','$Cara_pakai' , '$fungsi')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id             = $data['id'];
    $foto           = htmlspecialchars($data['foto']);
    $nama           = htmlspecialchars($data['nama']);
    $sumber_bunyi   = htmlspecialchars($data['sumber_bunyi']);
    $Cara_pakai     = htmlspecialchars($data['Cara_pakai']);
    $fungsi         = htmlspecialchars($data['fungsi']);

    $query = "UPDATE alat_musik SET
            foto = '$foto',
            nama = '$nama',
            sumber_bunyi = '$sumber_bunyi',
            Cara_pakai = '$Cara_pakai',
            fungsi = '$fungsi'
            WHERE id = $id

    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}


// fungctions untuk registrasi
function registrasi($data){
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES ('' , '$username' , '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}



?>