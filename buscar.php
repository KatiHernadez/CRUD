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
  <link rel="stylesheet" href="css/buscar.css">

</head>

<h3 class="text-center">
  Bienvenido, Administrador.
  </h3>
  <hr>

<div class="container">
<form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar Producto" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form>
  </div>
  
<?php
include('config.php');
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE codigo LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR proveedor  LIKE'%".$busqueda."%'";
	}
  
}


?>

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
             
$SQL="SELECT codigo, nombre, precio, cantidad, categorias, proveedor FROM productos $where";
$dato = mysqli_query($con, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['codigo']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['categorias']; ?></td>
<td><?php echo $fila['proveedor']; ?></td>

</tr>

    </table>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php

    
}

?>

</body>
</html>