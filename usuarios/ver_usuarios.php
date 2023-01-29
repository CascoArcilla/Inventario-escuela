<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';
    require "../login_in.php";
    //comprocamos que el usario tenga el permiso de entrar
    session_start();

    comprobarSesion();
    
    $consulta = "SELECT * FROM usuarios";
    $users = mysqli_query($conectar, $consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar usuairos</title>
    <link rel="stylesheet" href="ver_usuarios.css">
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <center>
        <a style="background-color:white" href="../interfaz_usuarios/super_admin.php"><button>Regreasr al menu</button></a>
    </center>
    <br>
    <table id="tabla" border=2>
        <tr>
            <th>ID Usuario</th>
            <th>Nombre de usuario</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th>Tipo de usuario</th>
        </tr>
        <?php while($fila = mysqli_fetch_assoc($users)){ ?>

            <tr>
                <td> <?php echo $fila["id_usuario"]; ?> </td>
                <td> <?php echo $fila["nombre_usuario"]; ?> </td>
                <td> <?php echo $fila["contrasena"]?> </td>
                <td> <?php echo $fila["correo"]; ?> </td>
                <td> <?php
                    if($fila["tipo_usuario"] == "alumno"){
                        echo "Alumno";
                    }else{
                        echo "Super";
                    }
                 ?> </td>
            </tr>

        <?php } mysqli_free_result($users);?>
    </table>

    
</body>
</html>