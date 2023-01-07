<?php
include_once 'database.php';
include_once 'User.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $cognoms = $_POST['cognoms'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    echo (new User())->create($name, $cognoms, $user, $email, $password) . '<br>';

    echo 'Usuario creado correctamente';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SignUp</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">





    </head>
    <body>
        <h1><strong>SignUp</strong></h1>
        <span><a href="login.php">Login</a></span><br><br>
        <!-- Formulario de registro -->
        <form method="post" action="signup.php">
            <input type="text" name="name" required placeholder="Nom">
            <input type="text" name="cognoms" required placeholder="Cognoms">
            <input type="text" name="user" required placeholder="Usuari">
            <input type="text" name="email" required placeholder="Correu">
            <input type="password" name="password" required placeholder="Contrasenya"><br>
            <input type="submit" name="submit" value="Registrarse">
        </form>
</body>
</html>

