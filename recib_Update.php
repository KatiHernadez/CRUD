
<?php
include('config.php');
$id = $_REQUEST['id'];
$codigo      = $_REQUEST['codigo'];
$nombre 	 = $_REQUEST['nombre'];
$precio 	 = $_REQUEST['precio'];
$cantidad 	 = $_REQUEST['cantidad'];


$update = ("UPDATE productos 
	SET 
	codigo  ='" .$codigo. "',
	nombre  ='" .$nombre. "',
	precio ='" .$precio. "',
	cantidad ='" .$cantidad. "'
	 

WHERE id='" .$id. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>
