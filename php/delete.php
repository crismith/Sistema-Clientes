<?php 
	include 'conexion.php';
	$sql = "DELETE FROM alumnos WHERE id=10";

	if (mysqli_query($conexion,$sql)) {
		echo "Registro eliminado";
	}else{
		echo "No se elimino";
	}
	mysqli_close($conexion);
?>