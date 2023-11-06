<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $name = $_POST['login_name'];
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];
        $role = "user";

        if (empty($name) || empty($email) || empty($password)) {
            echo "";
            exit;
        }

        $password_hash = hash('sha256', $password);

        $query = "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password_hash, $role);

            if (mysqli_stmt_execute($stmt)) {
                echo ": ";
            } else {
                echo ": " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo ": " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } elseif (isset($_POST['login'])) {

        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        if (empty($email) || empty($password)) {
            echo "";
            exit;
        }


        $query = "SELECT id, password FROM users WHERE email=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['password'];

            $entered_password_hash = hash('sha256', $password);

            if ($entered_password_hash === $stored_password) {
                session_start(); // Mulai sesi
                $_SESSION['user_id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                echo "";
            }
        } else {
            echo "";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/sign.css">

</head>

<body>
    <!DOCTYPE html>
    <html lang="es" dir="ltr">

    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main">
            <div class="container a-container" id="a-container">
                <form class="form" id="a-form" method="post" action="">
                    <h2 class="form_title title">Create Account</h2>
                    <span class="form__span">or use email for registration</span>
                    <input class="form__input" type="text" name="login_name" placeholder="Name" required>
                    <input class="form__input" type="email" name="login_email" placeholder="Email" inputmode="email"
                        required>
                    <input class="form__input" type="password" name="login_password" placeholder="Password" required>
                    <button class="btn" type="submit" name="register">SIGN UP</button>
                </form>
            </div>
            <div class="container b-container" id="b-container">
                <form class="form" id="b-form" method="post" action="">
                    <h2 class="form_title title">Sign in to Website</h2>
                    <input class="form__input" type="email" name="login_email" placeholder="Email" inputmode="email"
                        required>
                    <input class="form__input" type="password" name="login_password" placeholder="Password" required>
                    <button class="btn" type="submit" name="login">SIGN IN</button>
                </form>
            </div>
            <div class="switch" id="switch-cnt">
                <div class="switch__circle"></div>
                <div class="switch__circle switch__circle--t"></div>
                <div class="switch__container" id="switch-c1">
                    <h2 class="switch__title title">Welcome Back !</h2>
                    <p class="switch__description description">To keep connected with us please login with your personal
                        info</p>
                    <button class="switch__button button switch-btn">SIGN IN</button>
                </div>
                <div class="switch__container is-hidden" id="switch-c2">
                    <h2 class="switch__title title">Hello Friend !</h2>
                    <p class="switch__description description">Enter your personal details and start journey with us</p>
                    <button class="switch__button button switch-btn">SIGN UP</button>
                </div>
            </div>
        </div>
        <script src="main.js"></script>
    </body>

    </html>

    <script src="js/script.js"></script>

</body>

</html>