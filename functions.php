<?php 

// koneksi
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dbkursus";
$tableUsers = "users";

$dbConn = mysqli_connect("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

// register
function register($data) {
    // koneksi
    global $dbConn;
    global $tableUsers;

    // ambil data
    $nama = trim($data["nama"]);
    $email = trim($data["email"]);
    $password = $data["password"];
    $confPassword = $data["confPassword"];
    $bidang = $data["bidang"];
    $foto = "user.jpg";
    $role = "Instruktur";
    $status = "Nonaktif";
    $terdaftar = date("l, Y-m-d H:i:s");

    // cek email pakai prepared statement
    $stmt = $dbConn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>
                alert('Email sudah terdaftar!');
                document.location.href = 'register.php';
              </script>";
        return false;
    }
    $stmt->close();

    // cek password
    if ($password !== $confPassword) {
        echo "<script>
                alert('Password dan Konfirmasi Password tidak sama!');
                document.location.href = 'register.php';
              </script>";
        return false;
    }

    // hash password
    $hasPassword = password_hash($password, PASSWORD_DEFAULT);

    // insert data
    $stmt = $dbConn->prepare("INSERT INTO $tableUsers (nama, email, password, role, bidang, foto, status, terdaftar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nama, $email, $hasPassword, $role, $bidang, $foto, $status, $terdaftar);
    $stmt->execute();
    $row = $stmt->affected_rows;
    $stmt->close();

    return $row > 0;
}

// login 
function login($data) {
    global $dbConn;
    global $tableUsers;

    // ambil data
    $email = $data["email"];
    $password = $data["password"];

    // cek user
    $checkUser = "SELECT * FROM $tableUsers WHERE email='$email'";
    $result = mysqli_query($dbConn, $checkUser);
    if (mysqli_num_rows($result) === 1) {
        // data user
        $data = mysqli_fetch_assoc($result);

        // cek status user
        $status = $data["status"];

        if ($status != "Aktif") {
            echo
            "
                <script>
                    alert('Login gagal, akun anda belum aktif. Silahkan hubungi admin !');
                    document.location.href = 'login.php';
                </script>
            ";
            exit;
        }

        // verify password
        $verifyPassword = password_verify($password, $data["password"]);

        // cek password
        if ($verifyPassword) {
            header("location: index.php");
            exit;
        }
    }

}

// users
function users(){
    // koneksi
    global $dbConn;
    global $tableUsers;

    // ambil data
    $query = "SELECT * FROM $tableUsers";
    $result = mysqli_query($dbConn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// users end

// instruktur
function instruktur() {
    // koneksi
    global $dbConn;
    global $tableUsers;

    // ambil data
    $query = "SELECT * FROM $tableUsers WHERE role != 'Admin'";
    $result = mysqli_query($dbConn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// instruktur end



?>