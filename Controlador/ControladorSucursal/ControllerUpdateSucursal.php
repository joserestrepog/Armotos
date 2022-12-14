<?php
     $id_sucursal=$_POST['codigo']; 
     $nombre=$_POST['name']; 
     $direccion=$_POST['direccion']; 
     include '../../Modelo/Servicios.php';
     $result=editarSucursal($id_sucursal, $nombre, $direccion);
     if($result=="OK"){
        echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Se editó la sucursal.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesActualizar.html");  
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al editar la sucursal.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesActualizar.html"); 
     }
?>