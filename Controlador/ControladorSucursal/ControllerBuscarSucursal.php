<?php
    $codigo1=$_POST['codigoBuscar']; 


    if($codigo1 != NULL){
        include '../../Modelo/Servicios.php';
        $result=buscarSucursal($codigo1);
        if($result=="ERROR"){        
            echo <<<JAVASCRIPT
            <script type="text/javascript">
                alert("Sucursal no existe.");
            </script>
            JAVASCRIPT;
            header ("refresh:0;url=../../Vista\Modulo_administrador\html\Sucursales\ModuloSucursalesBuscar.html"); 
        }else{
        
        $var1 = $result[0];
        $var2 = $result[1];
        ?>


<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo Sucursal</title>
</head>

<link href="../../Vista/Modulo_administrador/css/cssEstilosForms.css" rel="stylesheet" type="text/css">

<body>
    <div class="container">
        <div class="row header">
          <h1>BUSCAR &nbsp;</h1>
          <h3>Módulo Gestión Sucursal - Buscar</h3>
        </div>
        <div class="row body">
          <form action="../../../../Controlador/ControladorProducto/ControllerBuscarSucursal.php" method="post">
            <ul class="itemsForms">
                <li>
                  <p class="">
                    <label for="first_name">Código</label>
                    <input type="text" name="descripcion" disabled value="<?php echo $codigo1;?>" placeholder="Descripción..." readonly="readonly" />
                  </p>
                </li>
                <li>
                  <p class="">
                    <label for="first_name">Nombre</label>
                    <input type="text" name="descripcion" disabled value="<?php echo $var1;?>" placeholder="Descripción..." readonly="readonly" />
                  </p>
                </li> 
                <li>
                  <p>
                    <label for="first_name">Dirección</label>
                    <input type="text" name="precio" disabled value="<?php echo $var2;?>" placeholder="Precio..." readonly="readonly" />
                  </p>
                </li>
                <li>      
                  <a href="../../../SuperMarket/Vista/Modulo_administrador/html/Sucursales/ModuloSucursalesBuscar.html" class="btn btn-submit"> Volver a buscar </a>
                </li>
            </ul>
          </form>
        </div>
      </div>
</body>
</html>

<?php   
    }  
}