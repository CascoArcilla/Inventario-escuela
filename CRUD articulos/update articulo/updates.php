<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    $id = $_GET["id"];
    $prop = $_GET["prop"];

    //comprobar si hay un post, y si lo hay guardar el valor en la variable
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['value']) ) {
        $new_value = $_POST['value'];

        //segun la propiedad de prop, usar algna de las sisguientes funciones
        switch($prop){
            case "nombre_articulo": updateNombre($new_value, $id); break;
            case "area": updateArea($new_value, $id); break;
            default: echo "Error ha ocurrido mientras se intentaba actualizar la propiedad."; break;
        }
    }else{
        switch($prop){
            case "nombre_articulo": optenerNombre(); break;
            case "area": optenerArea(); break;
            default: echo "Error ha ocurrido mientras se leia la propiedad a actualizar."; break;
        }
    }

    //una vez tenemos el nuevo nombre este remplazara al anterior
    function updateNombre($value, $id_art){
        require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';
        
        $consulta = "UPDATE articulos SET nombre_articulo = '$value' WHERE id_articulo = '$id_art'";
        $sentenciar_consulta = mysqli_query($conectar, $consulta);

        if($sentenciar_consulta){
            header("Location: update_articulo_pagina.php");
        }else{
            echo "Algo salio mal.";;
        }
    }

    //una vez obtenido el area este remplazara al area anterior
    function updateArea($value, $id_art){
        require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';
        
        switch($value){
            case "Computo": $value = 3001; break;
            case "Jardin": $value = 3002; break;
            case "Laboratorio": $value = 3003; break;
            default: echo "error"; die(); break;
        }

        $consulta = "UPDATE articulos SET id_area = '$value' WHERE id_articulo = '$id_art'";
        $sentenciar_consulta = mysqli_query($conectar, $consulta);

        if($sentenciar_consulta){
            header("Location: update_articulo_pagina.php");
        }else{
            echo "Algo salio mal.";;
        }
    }

    //le pedimos al usuario que ingrese el nuevo nombre para el articulo
    function optenerNombre(){
        echo <<<END
        <h2>Actulize el nombre</h2>
        <form method="post">
            <label for="value">Nombre: <input id="value" name="value" type="text"></label>
            <button type="submit">Cambiar</button>
        </form><br>
        <a href="update_articulo_pagina.php"><button>Cancelar</button></a>
        END;
    }

    //le pediomos al usuario que ingrese el cambio de area para el articulo
    function optenerArea(){
        echo <<<END
        <h2>Actualize el area</h2>
        <form method="post">
            <label for="value">Area: <select name="value" id="value">
                <option>Computo</option>
                <option>Jardin</option>
                <option>Laboratorio</option>
            </select></label>
        <button type="submit">Enviar</button>
        </form>
        <br>
        <a href="update_articulo_pagina.php"><button>Cancelar</button></a>
        END;
    }
?>