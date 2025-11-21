<?php
session_start();


// Lista de usuarios válidos
$usuarios = [
"admin" => "1234",
"usuario" => "abcd",
"adrian" => "Adrian12@"
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';


if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
$_SESSION['usuario'] = $username;
header("Location: bienvenida.php");
exit();
} else {
$error = "Credenciales incorrectas";
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Verificar si el usuario existe en la lista
    if (!isset($usuarios[$username])) {
        // Usuario no registrado
        header("Location: permisos.php");
        exit();
    }

    // Verificar contraseña
    if ($usuarios[$username] !== $password) {
        // Contraseña incorrecta → también sin permisos
        header("Location: permisos.php");
        exit();
    }

    // Si llega aquí, usuario válido
    $_SESSION['usuario'] = $username;
    header("Location: bienvenida.php");
    exit();
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
<div class="card p-4 shadow" style="width: 22rem;">
<h3 class="text-center mb-3">Iniciar Sesión</h3>


<?php if (!empty($error)) : ?>
<div class="alert alert-danger" role="alert">
<?= $error ?>
</div>
<?php endif; ?>


<form method="POST" action="">
<div class="mb-3">
<label class="form-label">Usuario</label>
<input type="text" name="username" class="form-control" required>
</div>


<div class="mb-3">
<label class="form-label">Contraseña</label>
<input type="password" name="password" class="form-control" required>
</div>


<button type="submit" class="btn btn-primary w-100">Entrar</button>
</form>
</div>
</body>
</html>