<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href=""/>
  <title>Tiendita ROSY</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
 

</head>
<body>
  

<div class="container mt-5 p-5">

<?php
include('config.php');
$sqlProducto   = ("SELECT * FROM productos");
$queryP = mysqli_query($con, $sqlProducto);


?>


  <h3 class="text-center">
  Bienvenido, Administrador.
  </h3>
  <hr>


<div class="row text-center">
  <div class="col-md-3"> 
    <h5>Registrar Nuevo Producto</h5>
  </div>
  <div class="col-md-9"> 
    <h5>Productos en stock</h5> 
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

        <div class="col-sm-3">
        <!--- Formulario para registrar Producto --->
        <?php include('registrarP.php');  ?>

        </div>  

         

          <div class="col-sm-9">
              <div class="row">
                <div class="col-md-12 p-2">

        <!--- Tabla de PRODUCTOS --->

                <div class="table-responsive ">
                    <table class="table table-bordered table-striped table-hover table_id">
                        <thead>
                          <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php
                              while ($dataProducto = mysqli_fetch_array($queryP)) { ?>
                          <tr>
                            <td>#<?php echo $dataProducto['codigo']; ?></td>
                            <td><?php echo $dataProducto['nombre']; ?></td>
                            <td>$<?php echo $dataProducto['precio']; ?></td>
                            <td><?php echo $dataProducto['cantidad']; ?></td>
                            <td><?php echo $dataProducto['categorias']; ?></td>
                            <td><?php echo $dataProducto['proveedor']; ?></td>
                            
                          <td> 

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataProducto['id']; ?>">
                                  Eliminar
                              </button>
                            <a> | </a>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataProducto['id']; ?>">
                                  Modificar
                              </button>
                          </td>
                          </tr>
                     

                            <!--Ventana Modal para Actualizar--->
                            <?php  include('ModalEditar.php'); ?>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>


                        <?php } ?>
                
                    </table>
                </div>
    </div>
              </div>
          </div>
          </div>
      </div>
  </div>
</div>



</div>
</table>

<a class="btn btn-primary" href="buscar.php" role="button">Busqueda de productos </a>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>