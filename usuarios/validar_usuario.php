<?php
//Comprobar el tipo de usuario y redireccionarlo segun sea el que super, alumno, etc.

session_start();

switch($_SESSION['tipo_user']){
    case "Super": header("Location: ./../interfaz_usuarios/super_admin.php"); break;
    case "alumno": header("Location: ./../interfaz_usuarios/alumnos.html"); break;
    default: header("Location:./../index.html"); break;
}

?>