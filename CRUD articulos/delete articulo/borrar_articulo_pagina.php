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
    <title>Borrar Articulo</title>
    <link rel="stylesheet" href="borrar_articulo.css">
</head>
<body>
    <div id="contenido">
        <h1>Borrar aticulo por ID</h1>
        <h2>Id y area del artiuclo para borrarlo:</h2>
        <div id="formulario">
            <form action="borrar_articulo_logica.php" method="post" name="form_alumno">
                <label for="id_articulo">ID del articulo: <br> <input id="id_articulo" class="barras" type="number" name="id_articulo" required></label><br>
                <label for="area">Area a la que pertenece:<br> <select id = "area" class="barras" name="area">
                    <option>Computo</option>
                    <option>Jardin</option>
                    <option>Laboratorio</option>
                </select> </label>
                
                <br><br>
                <center>
                    <button id="boton-enviar" type="submit">Borrar</button>
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