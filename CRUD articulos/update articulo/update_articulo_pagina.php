<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    session_start();
    session_regenerate_id();
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
    <title>Articulos Update</title>
    <link rel="stylesheet" href="update_articulo.css">
</head>
<body>
    <h1>Actualizacion de articulos</h1>
    <center>
        <a style="background-color:white" href="../../interfaz_usuarios/super_admin.php"><button>Regresar al menu</button></a>
        <p>Haga click en el nombre o area para actualziar.</p>
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
                <!--ID del articulo-->
                <td> <?php echo $fila["id_articulo"]; ?> </td>

                <!--Nombre del articulo, puede actuazlizarce-->
                <td> <a href="updates.php? 
                id=<?php echo $fila['id_articulo'];?>&prop=<?php echo 'nombre_articulo';?>"> <?php echo $fila["nombre_articulo"]; ?> </a> </td>
                
                <!--Area del articulo, puede actualizarce-->
                <td> <a href="updates.php? id=<?php echo $fila['id_articulo'];?>&prop=<?php echo "area";?>"> <?php 
                    switch($fila["id_area"]){
                        case "3001": echo "Computo"; break; 
                        case "3002": echo "Jardin"; break;
                        case "3003": echo "Laboratotio"; break;
                        default: echo "???"; break;
                    }
                ?> </a> </td>
                
                <!--Estaturs del articulo, puede actualizarce-->
                <td><?php echo $fila["estatus_ocupado"]; ?></td>

                <!--Id del usaio quien posee el articulo, puede actualizarce o quedar nulo en su caso-->
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