<?php
//usaremos la conexion que creamos en este archivo
require 'Conexion/conexion.php';

//comprocamos si hay conexcion.
if(!$conectar){
    die("No hay conexion: ".mysqli_connect_error());
}

//tomamos los valores del index.html
$user = $_POST["usuario"];
$password = $_POST["contrasena"];

//comprobamos los datos para ver si hay un usuairo en nuestra base de datos tabla usuarios
$user_carga = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_usuario = '$user' AND contrasena = '$password'");
$numer_fila = mysqli_num_rows($user_carga);

//finalmente redirigimos en caso de coincidir con una fila las valores de usuario y contraseña
if($numer_fila == 1){
    $datos_user = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_usuario = '$user'"); 
    $lista = mysqli_fetch_array($datos_user, MYSQLI_ASSOC);
    
    $arr;
    $i = 0;
    foreach($lista as $dato){
        $arr[$i] = $dato;
        $i++;
    }

    session_start();

    $_SESSION['id_usuario'] = $arr[0];
    $_SESSION['nombre'] = $arr[1];
    $_SESSION['contrasena'] = $arr[2];
    $_SESSION['correo'] = $arr[3];
    $_SESSION['tipo_user'] = $arr[4];

    header("Location: usuarios/validar_usuario.php");
}else{
    header("Location: index.html");
}

?>