<?php
session_start();
session_destroy();
header("Location: login.php");
exit();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>No Acceso</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
<div class="card p-4 shadow text-center" style="width: 22rem;">
<h3 class="mb-3">Acceso Denegado</h3>
<p>No tienes permiso para acceder a esta página.</p>
<a href="login.php" class="btn btn-primary mt-3">Volver al Login
</a>
</div>
</body>
</html>
