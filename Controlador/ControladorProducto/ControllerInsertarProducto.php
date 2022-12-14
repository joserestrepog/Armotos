<?php
     $codigo=$_POST['codigo']; 
     $descripcion=$_POST['descripcion']; 
     $precio=$_POST['precio']; 
     $cantidad=$_POST['cantidad']; 
     $fecha_ingreso=$_POST['fechaIngreso']; 
     $fecha_vencimiento=$_POST['fechaVencimiento']; 
     include '../../Modelo/Servicios.php';
     
     $result=insertarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento);
     if($result=="OK"){
        echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Se insertó el producto.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../../Vista/Modulo_administrador/html/Inventario/ModuloInventarioInsertar.html");  
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al insertar el producto.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista/Modulo_administrador/html/Inventario/ModuloInventarioInsertar.html"); 
     }
?>