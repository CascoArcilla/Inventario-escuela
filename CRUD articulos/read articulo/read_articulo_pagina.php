<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    session_start();
    if(!isset($_SESSION['tipo_user'])){
        echo "No tiene los permisos paraacceder a esta pagina.";
        die();
    }

    $consulta = "SELECT * FROM articulos";
    $articulos = mysqli_query($conectar, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar articulos</title>
    <link rel="stylesheet" type="text/css" href="read_articulo.css">
</head>
<body>
    <h1>Lista de articulos</h1>
    <center>
        <a style="background-color:white" href="../../interfaz_usuarios/super_admin.php"><button>Regreasr al menu</button></a>
    </center>
    <br>
    <table id="tabla" border=2>
        <tr>
            <th>ID articulo</th>
            <th>Nombre articulo</th>
            <th>Area</th>
            <th>Estatus</th>
            <th>Usuario ocupando</th>
        </tr>
        <?php while($fila = mysqli_fetch_assoc($articulos)){ ?>

            <tr>
                <td> <?php echo $fila["id_articulo"]; ?> </td>
                <td> <?php echo $fila["nombre_articulo"]; ?> </td>
                
                <td> <?php 
                    switch($fila["id_area"]){
                        case "3001": echo "Computo"; break; 
                        case "3002": echo "Jardin"; break;
                        case "3003": echo "Laboratotio"; break;
                        default: echo "???"; break;
                    }
                ?> </td>
                
                <td> <?php echo $fila["estatus_ocupado"]; ?> </td>
                
                <td> <?php 
                    if($fila["id_usuario"] == null){
                        echo "No hay quien lo ocupe";
                    }
                 ?> </td>
            </tr>

        <?php } mysqli_free_result($articulos);?>
    </table>

    
</body>
</html>