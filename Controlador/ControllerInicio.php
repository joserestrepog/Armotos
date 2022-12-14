<?php
        #Capturar datos del formulario Iniciar Sesión.
        $usuario=$_POST['id_usuario']; 
        $contrasena=$_POST['contrasena']; 
        include '../Modelo/Servicios.php';
        
        $result=iniciarSesion($usuario, $contrasena);

        if($result=="Administrador"){
            header ("refresh:0;url=../Vista/Modulo_administrador/html/ModuloAdministrador.html");
        }
        else if($result=="Colaborador"){
            header ("refresh:0;url=../Vista/Modulo_colaborador/ModuloInventarioBuscasC.php");
        }
        else if($result=="NOROL"){
            echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Datos incorrectos.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../Vista/Login/index.html");            
        }
?>  