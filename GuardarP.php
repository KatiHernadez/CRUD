<?php
include('config.php');
$codigo      = $_REQUEST['codigo'];
$nombre 	 = $_REQUEST['nombre'];
$precio 	 = $_REQUEST['precio'];
$cantidad      = $_REQUEST['cantidad'];
$categorias	 = $_REQUEST['categorias'];
$proveedor 	 = $_REQUEST['proveedor'];

$QueryInsert = ("INSERT INTO productos(
    codigo, nombre, precio, cantidad, categorias, proveedor
)
VALUES (
    '".$codigo. "',
    '".$nombre. "',
    '".$precio."',
    '".$cantidad."',
    '".$categorias."',
    '".$proveedor."'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>
