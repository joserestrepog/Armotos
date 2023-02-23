<?php
     $placa=$_POST['placa'];
     $nombre=$_POST['nombre'];     
     $fechaing=$_POST['fechaing'];  
     $fechasal=$_POST['fechasal'];  
     $usuario=$_POST['usuario'];
     $descripcion=$_POST['descripcion']; 
     $precio=$_POST['precio'];
     include '../../Modelo/Servicios.php';
     
     $result=insertarServicio($placa, $nombre, $fechaing, $fechasal, $usuario, $descripcion, $precio);
     if($result=="true"){
        echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Se ingresó el servicio.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../../Vista/Modulo_administrador/html/ModuloGestionInsertar.html");  
     }
     else if($result=="false"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al ingresar el servicio.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/ModuloGestionInsertar.html"); 
     }
?>