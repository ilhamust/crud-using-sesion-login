<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['nama'])) {
    header('Location: dasbor.php');
    exit();
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']); 

    $sql = "SELECT * FROM data WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header('Location: dasbor.php');
        exit();
    } else {
        echo "<script>alert('Email atau password anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/login.css" />
    <title>Login Test Web</title>
</head>
<body>
    <main>
        <form action="" method="POST" id="loginForm" class="login-input">
            <label for="inputEmail">Email</label>
            <input name="email" id="inputEmail" type="email" required />
            <label for="inputPassword">Password</label>
            <input name="password" id="inputPassword" type="password" required />
            <button name="login" id="buttonLogin" type="submit">Login</button>
        </form>
    </main>
</body>
</html>
