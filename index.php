<?php
    session_start();
    //Si el usuario no h iniciado sesión, redirigir a la página de login
    if (!isset($_SESSION('usuario'))){
        header("Location:login.php");
        exit();
    };
    ?>
