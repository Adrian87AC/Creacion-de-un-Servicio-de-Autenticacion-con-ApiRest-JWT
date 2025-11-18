<?php
   session_start();
    //Si el usuario ya ha iniciado sesión, redirigir a la página de bienvenida
    if (isset($_SESSION['usuario'])){
        header("Location:index.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
    </head>
    <body>
        <h1>Bienvenido al sistema de inicio de sesión</h1>
        <form action="/login" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </body>
</html>

