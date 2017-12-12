<?php 

	$conexion = new mysqli("localhost","root","","clientes");
	if ($conexion->connect_errno) { 
		echo "<h1>No se ha podido conectar ala BD</h1>"."<br>";
	}else{
		// echo "Coneccion exitosa". "<br>";
	}
	
 ?>