<?php
session_start();


if (!isset($_SESSION['usuario'])) {
header("Location: permisos.php");
exit();
}


$usuario = $_SESSION['usuario'];
$hora = date("H:i:s");
$mensaje = "¡Bienvenido a la aplicación de ejemplo!";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4">
<h2 class="text-center">Pantalla de Bienvenida</h2>
<p><strong>Usuario:</strong> <?= $usuario ?></p>
<p><strong>Hora actual:</strong> <?= $hora ?></p>
<p>Bienvenido a la pagina de inicio</p>


<a href="login.php" class="btn btn-danger mt-3">Cerrar sesión</a>
</div>
</div>
</body>
</html>