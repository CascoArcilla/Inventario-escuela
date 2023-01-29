<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';

    //obtenemos la respuesta del usuario y el id a borrar
    $id_user_delete = $_GET['id_user_del'];
    $respuesta = $_GET['data'];

    if($respuesta){
        $query = "DELETE FROM usuarios WHERE id_usuario = '$id_user_delete'";
        $consulta = mysqli_query($conectar, $query);

        if($consulta){
            echo <<<end
            <div style="width: 300px; margin: auto;">
                <h3>Usuario borrado</h3>
                <a href="borrar_usuario_pagina.php"><button>Borrar otro usuario</button></a>
                <a href="../interfaz_usuarios/super_admin.php"><button>Menu principal</button></a>
            </div>
            end;
        }else{
            echo <<<end
            <div style="width: 300px; margin: auto;">
                <h3>Ah ocurrido un error</h3>
                <a href="borrar_usuario_pagina.php"><button>Borrar otro usuario</button></a>
                <a href="../interfaz_usuarios/super_admin.php"><button>Menu principal</button></a>
            </div>
            end;
        }
    }else{
        header("Location: ../interfaz_usuarios/super_admin.php");
    }
?>