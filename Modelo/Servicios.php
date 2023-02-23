<?php
   
        function iniciarSesion($usuario, $contrasena){
            include 'conexion.php';
            $res="";
            $query = "SELECT usuario, contrasena FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";
            $sql = mysqli_query($conn,$query);
            $filas = mysqli_num_rows($sql);            
            if($filas){
                $res="true";
            }else{
                $res="false";
            }
            
        return $res;
        }

        function insertarServicio($placa, $nombre, $fechaing, $fechasal, $usuario, $descripcion, $precio){
            include 'conexion.php';
            $res="";
            $query = "INSERT INTO servicio (placa, nombre, fecha_ingreso, fecha_salida, fk_usuario, descripcion, precio)  values ('$placa', '$nombre', '$fechaing', '$fechasal', '$usuario', '$descripcion', $precio)";
            try {
                $sql = mysqli_query($conn,$query); 
                $res="true";
            } catch (Exception $e) {
                $res="false";
            }
            return $res;
        }

        function editarProducto($codigo, $descripcion, $precio, $cantidad, $fecha_ingreso, $fecha_vencimiento){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }else if(pg_num_rows($sql) == 1){
                $query2 = "UPDATE $schema.producto SET id_producto=$codigo, descripcion='$descripcion', precio=$precio, cantidad=$cantidad, fecha_ingreso='$fecha_ingreso', fecha_vencimiento='$fecha_vencimiento' WHERE id_producto=$codigo";
                $sql = pg_query($conn,$query2);
                $res="OK";
            }
            return $res;
        }        
        
        function eliminarProducto($codigo){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_producto FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            if(pg_num_rows($sql) == 0){
                $res="ERROR";
            }
            else if(pg_num_rows($sql) == 1){
                $query2 = "DELETE FROM $schema.producto WHERE id_producto=$codigo";
                $sql2 = pg_query($conn,$query2);
                $res="OK";
                 
            }
            return $res;
        }
?>