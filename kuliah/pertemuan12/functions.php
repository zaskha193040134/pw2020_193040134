<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("127.0.0.1" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw_193040134") or die("Database is werong!");
    
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

    $foto           = htmlspecialchars($data['foto alat']);
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
    mysqli_query($conn, "DELETE FROM alat_m                                                                    usik WHERE id = $id");

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
            WHERE id = $id ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}


//login

function login( $data ) {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    //cek username
if(query($user = "SELECT * FROM user WHERE username ='$username' ")) {
    //cek password
    if(password_verify($password, $user['password'])){
        //set session
        fetch_array($user);
        $_SESSION['login'] = true;

        header("Location: index.php");
        exit;
    }

}
    return [
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];

}

function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    //jika username atau password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "
        <script>
            alert('username/ password tidak boleh kosong');
            document.location.href= 'registrasi.php';
        </script>
        ";
        return false;
    } 

    //jika username sudah ada

    if(query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
            alert('username sudah terdaftar');
            document.location.href = 'registrasi.php'
        </script>";
    }


    //jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai');
            document.location.href = 'registrasi.php'
        </script>";
    }

    // jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
            alert('password terlalu pendek');
            document.location.href = 'registrasi.php'
        </script>";
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke table user
    $query = "INSERT INTO user VALUES (null, '$username' , '$password_baru')";
    mysqli_query($conn, $query ) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


?>