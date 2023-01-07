<?php
include_once 'database.php';
include_once 'User.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = (new User())->getById($id);

    if ($user && $user['password'] == $password) {
        session_start();
        $_SESSION['user'] = $user;

        header('Location: index.php');
    } else {
        echo 'Email o contraseña incorrectos';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
    <h1><strong>Login</strong></h1>
        <span><a href="signup.php">SignUp</a></span><br><br>
<!-- Formulario de inicio de sesión -->
<form method="post" action="assets\curriculum\curriculum.html">
    <input type="text" name="email" class="email1" required placeholder="Correu"><br>
    <input type="password" name="password" required placeholder="Contrasenya"><br><br>
    <input type="submit" name="submit" value="Iniciar sesión">
</form>
</body>
</html>