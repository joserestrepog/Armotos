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

        function editarServicio($placa, $nombre, $fechaing, $fechasal, $usuario, $descripcion, $precio){
            include 'conexion.php';
            $res="";
            $query = "SELECT id_servicio FROM servicio WHERE placa='$placa' ORDER BY fecha_ingreso DESC";
            try{
                $sql = mysqli_query($conn,$query);                
                $filas = mysqli_num_rows($sql); 
                if($filas != 1){
                    while($row = mysqli_fetch_array($sql)){
                        $id_servicio = $row['id_servicio'];                    
                        break;
                    }
                    $query2 = "UPDATE servicio SET placa='$placa', nombre='$nombre', fecha_ingreso='$fechaing', fecha_salida='$fechasal', fk_usuario='$usuario', descripcion='$descripcion', precio=$precio WHERE id_servicio=$id_servicio";
                    try{
                        $sq2l = mysqli_query($conn,$query2);
                        $res="true";      
                    }catch (Exception $e){
                        $res="false";
                    }                    
                }else{
                    $res="false";
                }               
            }catch (Exception $e) {
                $res="false";
            }            
            return $res;            
        }
        
        function buscarProducto($codigo){
            include 'conexion.php';
            $res=[];           
            $query = "SELECT descripcion, precio, cantidad, fecha_ingreso, fecha_vencimiento FROM $schema.producto WHERE id_producto=$codigo";
            $sql = pg_query($conn,$query);
            while($Row=pg_fetch_assoc($sql)){
                $res[0]=$Row['descripcion'];
                $res[1]=$Row['precio'];
                $res[2]=$Row['cantidad'];
                $res[3]=$Row['fecha_ingreso'];
                $res[4]=$Row['fecha_vencimiento'];
            }
            if($res==NULL){
                $res="ERROR";
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