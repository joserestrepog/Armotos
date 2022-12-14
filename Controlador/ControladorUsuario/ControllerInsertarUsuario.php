<?php
     $id_usuario=$_POST['codigo']; 
     $nombre=$_POST['name']; 
     $contrasena=$_POST['contraseña'];
     $rol=$_POST['rol']; 
     $sucursal=$_POST['sucursal']; 
     include '../../Modelo/Servicios.php';
     
     $result=insertarUsuario($id_usuario, $nombre, $contrasena, $rol, $sucursal);
     if($result=="OK"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Se insertó usuario.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Colaboradores\ModuloColaboradorInsertar.html");
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Error al insertar usuario.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Colaboradores\ModuloColaboradorInsertar.html");
     }
?>