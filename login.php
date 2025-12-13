<?php 

    session_start();
    require "functions.php";

    if (isset($_SESSION["login"])) {
        header("location: index.php");
        exit;
    }

    $error = false;
    if (isset($_POST["login"])) {
        $_SESSION["login"] = true;
        login($_POST);
        $error = true;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="auth">
        <div class="form">
            <div class="logoUser">
                <i class="fa-solid fa-circle-user"></i>
            </div>
            <?php if($error) : ?>
                <p style="color:crimson; font-size: 14px; text-align: center;">Email atau Password Salah</p>
            <?php endif; ?>
            <form action="" method="post">
                <div class="email">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="password">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
            <hr>
            <a href="register.php">Register ?</a>
        </div>
    </div>
</body>
</html>