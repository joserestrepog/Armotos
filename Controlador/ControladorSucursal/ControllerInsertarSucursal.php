<?php
     $id_sucursal=$_POST['codigo']; 
     $nombre=$_POST['name']; 
     $direccion=$_POST['direccion']; 
     include '../../Modelo/Servicios.php';
     $result=insertarSucursal($id_sucursal, $nombre, $direccion);
     if($result=="OK"){
        echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Se insertó la sucursal.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesInsertar.html");  
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al insertar la sucursal.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesInsertar.html"); 
     }
?>