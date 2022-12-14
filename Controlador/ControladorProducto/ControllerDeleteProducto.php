<?php
    $codigo=$_POST['codigoBuscar'];  
     include '../../Modelo/Servicios.php';
     
     $result=eliminarProducto($codigo);
     if($result=="OK"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Se eliminó el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Inventario\ModuloInventarioEliminar.html"); 
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al eliminar el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Inventario\ModuloInventarioEliminar.html");
     }
?>