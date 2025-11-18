<?php
   session_start();
   //Si el usuario no ha iniciado sesión, redirigir a la página de login
   if (!isset($_SESSION['usuario'])){
       header("Location:login.php");
       exit();
   }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pantalla de Bienvenida</title>
    </head>
    <body>
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p>La hora actual es: <?php echo date("H:i:s"); ?></p>
        <p>¡Gracias por iniciar sesión!</p>
        <form action="logout.php" method="POST">
            <button type="submit">Cerrar Sesión</button>
        </form>
    </body>
</html>