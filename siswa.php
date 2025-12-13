<?php 

session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="containt">
        <div class="sidebar">
            <div class="logo">
                <h3>Admin Panel</h3>
                <p><i class="fa-solid fa-key"></i> Access : Admin</p>
            </div>
            <div class="menu">
                <ul>
                    <div class="menu-admin">
                        <li style="padding: 13px 12px; color: #a1e8faff; font-size: 14px;">--- Admin ---</li>
                        <li><a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                        <li><a href="users.php"><i class="fa-solid fa-users"></i> Users</a></li>
                        <li><a href="instruktur.php"><i class="fa-solid fa-thumbtack"></i> Instruktur</a></li>
                        <li><a href="siswa.php" style="background-color: #0db3dd;"><i class="fa-regular fa-address-card"></i> Siswa</a></li>
                    </div>
                    <div class="menu-user">
                        <li style="padding: 13px 12px; color: #a1e8faff; font-size: 14px;">--- User ---</li>
                        <li><a href="profile.php"><i class="fa-solid fa-circle-user"></i> Profile</a></li>
                        <li><a href="editProfile.php"><i class="fa-solid fa-pen-fancy"></i> Edit Profile</a></li>
                        <li><a href="password.php"><i class="fa-solid fa-gears"></i> Ganti Passord</a></li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="nav-main">
            <div class="navbar">
                <div class="title">
                    <h3>Siswa</h3>
                </div>
                <div class="akun">
                    <p>Username</p>
                </div>
            </div>
            <div class="main">
                <h1>Daftar Siswa</h1>
                <div class="table">
                    <table border="1" cellspacing="0">
                        <tr>
                            <th class="rowNo">No.</th>
                            <th class="rowHead">Nama Siswa</th>
                            <th class="rowHead">Bidang Kursus</th>
                            <th class="rowHead">Asal Sekolah</th>
                            <th class="action">Action</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td><a href="" class="a">T. Riska Namira</a></td>
                            <td>Pemrograman</td>
                            <td>SMK Stabat</td>
                            <td><a href="edit.php"><i class="fa-solid fa-pen" style="color: green;"></i></a> | <a href="hapus.php"><i class="fa-solid fa-trash" style="color: crimson;"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>