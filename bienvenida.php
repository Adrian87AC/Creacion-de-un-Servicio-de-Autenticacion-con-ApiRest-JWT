<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Bienvenida</title>
    </head>
    <body>
        <h2>Bienvenida</h2>
        <div id ="informacion"></div>

        <button onclick="cerrarSesion()">Cerrar Sesión</button>

        <script>
            const token = localStorage.getItem("token");

            if (!token){
                window.location.href = "noAcceso.php";
            }

            fetch("api/welcome.php", {
                headers: {
                    "Autorization" : "Bearer" + token
                }
            })
            .then(async response => {
                if(response.status === 403){
                    window.location.href = "noAcceso.php";
                }

                const data = await response.json();
                document.getElementById("informacion").innerHTML =
                    
            })


        
</html>