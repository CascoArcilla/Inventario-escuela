<?php
    require 'C:\xampp\htdocs\Inventario escuela\Conexion\conexion.php';
    //crar un usario nuevo para la tabla usuarios de base de datos intario escuela
    $id_user = $_POST['id_user'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    $tipo_user = $_POST['tipo_user'];

    $datos = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_usuario = '$id_user'");
    $filas = mysqli_num_rows($datos);

    if($filas >= 1){
        echo "Ya hay un usuario con esa identificacion.";
        echo '<br><a href="registrar_usuario.html"><button id="boton">Volver a intentar.</button></a>';
        echo '<br><a href="../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal.</button></a>';
    }else{
        $nuevo = "INSERT INTO usuarios VALUES ('$id_user', '$nombre', '$contrasena', '$correo', '$tipo_user')";
        $datos = mysqli_query($conectar, $nuevo);
        echo "Usuario registrado.";
        echo '<br><a href="registrar_usuario.php"><button id="boton">Ingresar nuevo</button></a><br>';
        echo '<br><a href="../interfaz_usuarios/super_admin.php"><button id="boton2">Menu principal</button></a>';
    }
?>