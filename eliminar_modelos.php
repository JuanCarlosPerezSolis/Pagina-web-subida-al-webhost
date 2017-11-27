<?php

include("conexion.php");
$id=$_REQUEST['id'];

 $query="DELETE FROM news WHERE id='$id'";
 $resultado= $conexion->query($query);

 if ($resultado) {
 	header("Location: index.php/usuarios/eliminar");
 }
 else {
 	echo "";
 }

?> 	