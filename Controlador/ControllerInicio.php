<?php
        #Capturar datos del formulario Iniciar Sesión.
        $usuario=$_POST['usuario']; 
        $contrasena=$_POST['contrasena']; 
        include '../Modelo/Servicios.php';
        
        $result=iniciarSesion($usuario, $contrasena);

        if($result=="true"){
            header ("refresh:0;url=../Vista/Modulo_administrador/html/ModuloAdministrador.html");
        }
        else if($result=="false"){
            echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Datos incorrectos.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../Vista/Login/index.html");            
        }
?>  