<?php
require "../../../functions.php";

if (isset($_POST["daftar"])) {
   if (daftarKursus($_POST) > 0 ) {
    echo
    "
        <script>
            alert('Registrasi berhasil, status akan di tinjau olah admin');
        </script>
    ";
   } else {
      echo
    "
        <script>
            alert('Registrasi Gagal !');
        </script>
    ";
   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus</title>
    <link rel="stylesheet" href="../../../kursus.css">
</head>
<body>
    
    <div class="loginForm">
        <h1 class="title-head">Daftar Kursus</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="name">
                <label for="name">Nama Lengkap</label>
                <input type="name" id="name" name="nama" placeholder="Jhon Smith">
            </div>
            <div class="hp">
                <label for="hp">Handphone</label>
                <input type="text" id="hp" name="hp" placeholder="081287648907">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com">
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="******">
            </div>
            <div class="confPassword">
                <label for="confPassword">Konfirmasi Password</label>
                <input type="password" id="confPassword" name="confPassword" placeholder="******">
            </div>
            <div class="foto">
                <label for="foto">Upload Foto</label>
                <input type="file" id="foto" name="foto">
            </div>
            <div class="kursus">
                <label for="kursus">Pilih Kursus</label>
                <select name="kursus" id="kursus">
                    <option value="Teknik Komuter Jaringan">Teknik Komputer Jaringan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                </select>
            </div>
            <button type="submit" name="daftar">Daftar Kursus</button>
            <div class="back">
                <a href="../../../">Back to Home</a>
            </div>
        </form>
    </div>
</body>
</html>