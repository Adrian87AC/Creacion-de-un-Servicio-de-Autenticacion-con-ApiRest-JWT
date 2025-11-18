<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
    </head>
    <body>
        <h1>Iniciar sesión</h1>
        <form id = "loginForm" action="/login" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Iniciar Sesión</button>
        </form>

        <script>
            document.getElementById("LoginForm").addEventListener("submit", async (e) =>{
                e.preventDefault();

                const username = document.getElementById("username").value;
                const password = document.getElementById("password").value;

                const response = await fetch("api/login.php", {
                    method = "POST",
                    headers: { 
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        username, password
                    });

                    if (response.ok){
                        const data = await response.json();
                        localStorage.setItem("token", data.token);
                        window.location.href = "bienvenida.php";
                    }else{
                        alert("Credenciales son incorrectas");
                    }
                })
            });
            </script>
    </body>
</html>

