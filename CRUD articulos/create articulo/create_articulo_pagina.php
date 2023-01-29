<?php
    //comprabar si el usuario tiene los permisos
    session_start();

    if(!isset($_SESSION['tipo_user'])){
        echo "No tiene los permisos paraacceder a esta pagina.";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo Articulo</title>
    <link rel="stylesheet" href="create_articulo.css">
</head>
<body>
    <div id="contenido">
        <h1>Ingresar articulo nuevo</h1>
        <h2>Ingrese la informacion para crear un articulo nuevo:</h2>
        <div id="formulario">
            <form action="create_articulo_logica.php" method="post" name="form_articulo">
                <label for="nombre">Nombre del articulo: <br> <input id="nombre" type="text" name="nombre" required></label><br><br>
                <label for="area">Area: <br> <select id="area" name="area">
                                                <option>Computo</option>
                                                <option>Jardin</option>
                                                <option>Laboratorio</option>
                                                </select>
                </label>
                
                <br><br>
                <center>
                    <button type="submit">Enviar</button>
                </center>
            </form>
        </div>
        <br>
        <center>
        <a style="background-color:white" href="../../interfaz_usuarios/super_admin.php"><button>Regreasr al menu</button></a>
        </center>
    </div>
</body>
</html>