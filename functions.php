<?php

// koneksi
$host = "localhost";
$usrname = "root";
$passowrd = "";
$dbname = "dbkursus";

// table name
$tableUsers = "table_users";

$conn = mysqli_connect($host, $usrname, $passowrd, $dbname);

// create data
function daftarKursus($data) {
    global $conn;
    global $tableUsers;


    $nama = $data["nama"];
    $hp = $data["hp"];
    $email = $data["email"];
    $password = $data["password"];
    $confPassword = $data["confPassword"];
    $kursus = $data["kursus"];
    $role = "siswa";
    $status = "checking";
    $terdaftar = date('l, Y-m-d H:i:s');

    // cek password
    if ($password != $confPassword) {
       echo
       "
       <script>
            alert('password dan konfirmasi password tidak sama !');
       </script>
       ";
        return false;
    }
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    //upload foto 
    $foto = uploadFoto();
    if (!$foto) {
        echo
        "
            <script>
                 alert('upload foto terlebih dahulu !');
            </script>
        ";
    return false;
    }

    $query = "INSERT INTO $tableUsers VALUES('', '$nama', '$hp', '$email', '$hashPassword', '$foto', '$kursus', '$role', '$status', '$terdaftar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function uploadFoto() {
    $name = $_FILES["foto"]["name"];
    $size = $_FILES["foto"]["size"];
    $error = $_FILES["foto"]["error"];
    $tmp = $_FILES["foto"]["tmp_name"];

    // cek error
    if ($error === 4) {
       echo
        "
            <script>
                 alert('upload foto gagal !');
            </script>
        ";
    return false;
    }

    // cek ektensi
    $valid = ["jpg", "png", "webp"];
    $eksfile = explode(".", $name);
    $eksfile = strtolower(end($eksfile));
    if (!in_array($eksfile, $valid)) {
         echo
        "
            <script>
                 alert('yang kamu upload bukan foto');
            </script>
        ";
    return false;
    }

    // cek size
    if ($size > 2000000) {
         echo
        "
            <script>
                 alert('Foto yang kamu upload terlalu besar. max 2MB !');
            </script>
        ";
    return false;
    }

    $newName = uniqid();
    $newName .= '.';
    $newName .= $name;

    move_uploaded_file($tmp, '../../img/' . $newName);
    return $newName;
}
?>