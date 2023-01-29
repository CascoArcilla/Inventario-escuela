<?php
    session_start();
    
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';
    
    //obtenemos el id del usuario a eliminar
    $id_user = $_POST['id_user'];

    if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['respuesta'])){
        $respuesta = $_POST['respuesta'];
        /*
        /crear la funcionalidad de borrar el usuario si la respuesta es true o regresarlo al menu principal si la respuesta es false
        */
    }else if($id_user == $_SESSION['id_usuario']){
        echo '<div style="margin: auto; width: 300px;">';
        echo '<h3>No puedes borrarte</h3><br>';
        echo '<br><a href="borrar_usuario_pagina.php"><button id="boton">Intentar de nuevo</button></a><br>';
        echo '<br><a href="../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal</button></a>';
        echo '</div>';
    }else{
        //obtenemos los valores de la base de datos
        $consulta = "SELECT * FROM usuarios WHERE id_usuario = '$id_user'";
        $datos_user = mysqli_query($conectar, $consulta);
        //numero de filas para saber que hay solo un usuario con ese id
        $filas = mysqli_num_rows($datos_user);

        //si no hay una fila es porque no esxiste o hay mas de uno con el mismo id, y se reporta.
        if($filas != 1){
            echo <<<end
            <div style="margin: auto; width: 300px;">
                <p>Ah ocurrido un error, mas de un usario con el mismo id o el usuario o el usuario no existe</p>
            </div>
            end;
        }else{
            //obener y mostrar los datos del usuario a eliminar
            $lista = mysqli_fetch_array($datos_user, MYSQLI_ASSOC);

            $arr;
            $i=0;
            foreach($lista as $dato){
                $arr[$i] = $dato;

                $i++;
            }

            echo <<<end

            <div style="margin: auto; width: 300px;">
                <h3>Usuario a borrar</h3>
                <ul>
                    <li>ID: $arr[0] </li>
                    <li>Nombre: $arr[1] </li>
                    <li>Contraseña: $arr[2] </li>
                    <li>Correo: $arr[3] </li>
                    <li>Tipo: $arr[4] </li>
                </ul>
                <center>
                    <button id="boton" onclick="confirmar()">Borrar</button>
                </center>
            </div><br>

            <script type="text/javascript">
                function confirmar(){
                    let res = confirm("Seguro");
                    if(res){
                        window.location.replace("borrar.php?data=true&&id_user_del=$id_user");
                        return true;
                    }else{
                        window.location.replace("borrar.php?data=false&&id_user_del=$id_user");
                        return false;
                    }
                }
            </script>
            end;
        }
    }

    
?>