<?php 
	include("conexion.php");

	$nombre = $_POST['nombre'];
	$empresa = $_POST['empresa'];
	$ubicacion = $_POST['ubicacion'];
	$ruc = $_POST['ruc'];
	$inicio = $_POST['inicio'];
	$vencimiento = $_POST['vencimiento'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$sql = "INSERT INTO clientes (nombre,nombre_negocio,ubicacion,ruc,fecha_inicio,fecha_vencimiento,celular,email) 
				VALUES (
						'$nombre',
						'$empresa',
						'$ubicacion',
						'$ruc',
						'$inicio',
						'$vencimiento',
						'$celular',
						'$email')";

	if (mysqli_query($conexion,$sql)) {
		header("Location:../index.php");
	}else{
		echo "No se envio correctamente los datos¡¡";
	}
	mysqli_close($conexion);
?>