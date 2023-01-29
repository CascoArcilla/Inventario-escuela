<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    session_start();
    if(!isset($_SESSION['tipo_user'])){
        echo "No tiene los permisos paraacceder a esta pagina.";
        die();
    }

    $id = $_GET['id'];
    //$nombre_ar = $_GET['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando</title>
</head>
<body>
    <h1>Datos para actualizar: </h1>
    <form action="update_articulo_formulario.php" method="post" >
        <label for="nombre">
            Nombre articulo: <input id="nombre" type="text">
        </label>
        <br>
        <label for="area">Area: 
            <select name="area" id="area">
                <option>Computo</option>
                <option>Jardin</option>
                <option>Laboratorio</option>
            </select>
        </label>
        <br>
        <label for="seleccion">Estatus: 
            <select name="estado" id="seleccion">
                <option>Ocupando</option>
                <option>Desocupado</option>
            </select>
        </label>
        <br>
        <?php $estado = $_GET["estado"];
        echo "Estatus: " . $estado; ?>
    </form>
</body>
</html>