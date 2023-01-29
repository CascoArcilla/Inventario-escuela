<?php
    function comprobarSesion(){
        if(isset($_SESSION['tipo_user'])){
            if($_SESSION['tipo_user'] != "Super"){
            
                echo "No tiene los permisos paraacceder a esta pagina.";
                die();
            }
        }else{
            $direccion = __DIR__;
            $direccion = $direccion . "\index.html";
            echo <<<END
                <script>
                    alert("Sesion no iniciada");
                </script>
                <a href="../index.html" target="_black"><h1>Ir a login</h1></a>
            END;
            die();
        }
    }
?>