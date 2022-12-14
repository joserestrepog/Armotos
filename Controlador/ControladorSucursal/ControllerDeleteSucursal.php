<?php
    $id_sucursal=$_POST['codigoBuscar'];  
     include '../../Modelo/Servicios.php';
     
     $result=eliminarSucursal($id_sucursal);
     if($result=="OK"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Se eliminó la sucursal.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesEliminar.html"); 
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al eliminar la sucursal, verifique los datos.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesEliminar.html");
     }
?>