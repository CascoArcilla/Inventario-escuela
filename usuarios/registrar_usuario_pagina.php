<?php
    require "../login_in.php";
    //comprabar si el usuario tiene los permisos para acceder a este sitio
    session_start();
    
    comprobarSesion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrar_usuario_pagina.css">
    <title>Nuevo usuario</title>
</head>
<body>
    <h1>Registrar nuevo usuario</h1>
    <p>Rellene todos los campos</p>
    <div id="formulario">
        <form action="registrar_usuario_logica.php" method="post">
            <label for="id_user">Identificaion(numero de control): <br> <input class="campo" type="text" name="id_user" id="id_user" required></label><br><br>
            <label for="nombre">Nombre: <br> <input class="campo" type="text" name="nombre" id="nombre" required></label><br><br>
            <label for="contrasena">Contraseña: <br> <input class="campo" type="text" name="contrasena" id="contrasena" required></label><br><br>
            <label for="correo">Correo: <br> <input class="campo" type="email" name="correo" id="correo" required></label><br><br>
            <fieldset>
                <legend>Tipo de usuario:</legend>
                <input type="radio" name="tipo_user" value="Super" id="super"><label for="super">Super</label>
                <input type="radio" name="tipo_user" value="alumno" id="alumno" checked><label for="alumno">Alumno</label>
            </fieldset><br>
    
            <center><button type="submit">Registrar</button></center><br>
        </form>
        <center><a href="../interfaz_usuarios/super_admin.php"><button>Cancelar</button></a></center><br>
    </div>
</body>
</html>