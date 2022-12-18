<?php
function Login()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ("admin" == $username && 1234 == $password) {
            echo "<script>alert('Login Berhasil. Terima Kasih!');document.location='admin/'</script>";
        }
        echo "<script>alert('Username atau Password yang Anda masukan salah, Coba Lagi!');</script>";
    }
}
Login();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="form">
        <h3>LOGIN ADMIN</h3>

        <form action="" method="POST" id="form-login">
            <div class="input">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username..">
                <br><small>*</small>
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password..">
                <br><small>*</small>
            </div>

            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>