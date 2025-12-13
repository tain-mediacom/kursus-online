<?php 

    require "functions.php";

    if (isset($_POST["register"])) {
        if (register($_POST) > 0) {
            echo
            "
                <script>
                    alert('Registerasi Berhasil !');
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo
            "
                <script>
                    alert('Registerasi Gagal !');
                    document.location.href = 'register.php';
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
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="auth">
        <div class="form">
            <div class="logoUser">
                <i class="fa-solid fa-file-pen"></i>
            </div>
            <form action="" method="post">
                <div class="nama">
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="email">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="bidang">
                    <select name="bidang" id="bidang">
                        <option value="">---Pilih Bidang---</option>
                        <option value="Networking">Networking</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Microsoft Office">Microsoft Office</option>
                        <option value="Programming">Programming</option>
                    </select>
                </div>
                <div class="password">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="confPassword">
                    <input type="password" id="confPassword" name="confPassword" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" name="register">Register</button>
            </form>
            <hr>
            <a href="login.php">Login ?</a>
        </div>
    </div>
</body>
</html>