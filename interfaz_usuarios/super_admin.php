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
    <link rel="stylesheet" href="super_admin.css">
    <title>Usuario administrador</title>
</head>
<body>
    <header id="header">
        <img id="logo" src="logo_itsz.png" alt="logo itsz">
        <h1>Bienvenido</h1>
    </header>
    <h3>Seleciona la operacion a realizar</h3>
    <div id="principal">
        <ul id="operaciones-articulo" class = "item">
            <li><a href="../CRUD articulos/create articulo/create_articulo_pagina.php"><button id="boton_ingresa" class="boton">Ingresar nuevo articulo</button></a></li>
            <li><a href="../CRUD articulos/delete articulo/borrar_articulo_pagina.php"><button id="boton_borra" class="boton">Borrar aticulo</button></a></li>
            <li><a href="../CRUD articulos/read articulo/read_articulo_pagina.php"><button id="boton_ver" class="boton">Ver articulos</button></a></li>
            <li><a href="../CRUD articulos/update articulo/update_articulo_pagina.php"><button id="boton_update" class="boton">Actualizar articulo</button></a></li>
        </ul>
        <ul id = "operaciones-usuarios" class ="item"> 
            <li><a href="../usuarios/ registrar_usuario_pagina.php"><button id="new_user" class="boton">Registrar usuario</button></a></li>
            <li><a href="../usuarios/borrar_usuario_pagina.php"><button id="delate_user" class="boton">Borrar un usuario</button></a></li>
            <li><a href="../usuarios/ver_usuarios.php"><button id="show_user" class="boton">Mostrar usuarios</button></a></li>
        </ul>
    </div><br>
    <center><a href="../usuarios/cerrar_sesion.php"><button class="boton">Cerrar Sesion</button></a></center>
</body>
</html>