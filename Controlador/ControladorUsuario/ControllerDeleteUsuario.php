<?php
    $id_usuario=$_POST['codigoBuscar'];  
     include '../../Modelo/Servicios.php';
     
     $result=eliminarUsuario($id_usuario);
     if($result=="OK"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Se eliminó el colaborador.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Colaboradores\ModuloColaboradorEliminar.html"); 
     }
     else if($result=="ERROR"){
        echo <<<JAVASCRIPT
        <script type="text/javascript">
            alert("Usuario no existe.");
        </script>
        JAVASCRIPT;
        header ("refresh:0;url=../../Vista\Modulo_administrador\html\Colaboradores\ModuloColaboradorEliminar.html"); 
     }
?>