<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    $id_articulo = $_POST['id_articulo'];
    $nombre_area = $_POST['area'];
    $id_area;

    switch($nombre_area){
        case "Computo": $id_area = 3001; break;
        case "Jardin": $id_area = 3002; break;
        case "Laboratorio": $id_area = 3003; break;
    }
    
    $borrar_articulo = "DELETE FROM articulos WHERE id_articulo = '$id_articulo' and id_area = '$id_area'";
    $consulta = mysqli_query($conectar, $borrar_articulo);

    if($consulta){
        echo '<h3>Articulo borrado<h3>';
        echo '<br><a href="borrar_articulo_pagina.php"><button id="boton">Borrar otro articulo</button></a><br>';
        echo '<br><a href="../../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal</button></a>';
    }else{
        echo "Sucedio un error";
        echo '<br><a href="../../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal</button></a>';
    }
?>