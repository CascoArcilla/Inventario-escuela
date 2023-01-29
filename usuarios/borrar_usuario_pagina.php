<?php
    require "../login_in.php";
    //comprabar si el usuario tiene los permisos
    session_start();
    
    comprobarSesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Usuario</title>
    <link rel="stylesheet" href="borrar_usuario.css">
</head>
<body>
    <div id="contenido">
        <h1>Borrar Usuario</h1>
        <h2>Ingrese el ID del usuario</h2>
        <div id="formulario">
            <form action="borrar_usuario_logica.php" method="post" name="form-usuario">
                <label for="id_user">ID del articulo: <br> <input id="id_user" class="barras" type="text" name="id_user" required></label>
                <br><br>
                <center>
                    <button id="boton-enviar" type="submit">Borrar</button>
                </center>
            </form>
        </div>
        <br>
        <center>
        <a style="background-color:white" href="../interfaz_usuarios/super_admin.php"><button>Regreasr al menu</button></a>
        </center>
    </div>
</body>
</html>