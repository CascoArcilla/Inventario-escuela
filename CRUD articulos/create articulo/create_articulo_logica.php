<?php
require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

$nombre = $_POST['nombre'];
$area = $_POST['area'];
$estatus_ocupado = "Desocupado";

$id_area;

switch($area){
    case "Computo": $id_area = 3001; break;
    case "Jardin": $id_area = 3002; break;
    case "Laboratorio": $id_area = 3003; break;
    default: header("Locatio: create_articulo_pagina.php"); break;
}

$insertarDato = "INSERT INTO articulos VALUES (null, '$nombre', '$id_area', '$estatus_ocupado', null)";

$consulta = mysqli_query($conectar, $insertarDato);

if($consulta){
    echo <<<end
    <div style="width: 300px; margin: auto;">
        <h3>Articulo creado<h3>
        <br><a href="create_articulo_pagina.php"><button id="boton">Crear otro articulo</button></a><br>
        <br><a href="../../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal</button></a>
    </div>
    end;
    
}else{
    echo "<script>
    alert('Ah ocurrido un error');
    </script>";
    exit();
}

?>