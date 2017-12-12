<?php 
include("conexion.php");
	 $sql = "SELECT id, name, user FROM alumnos";
	 $lista=mysqli_query($conexion,$sql);
?>
<html>
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse bg-primary">
  	<a class="navbar-brand" href="index.php">Ingresar Mas Registros</a>
</nav>

	<h1>Usuarios Registrados</h1>
	<table class="table table-hover success">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
	<?php 

	if (mysqli_num_rows($lista)>0) {
	 		while($row=mysqli_fetch_assoc($lista)){
	 			echo "<tr >";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["user"]."</td>";
					echo "<td>
							<a href=''><i class='fa fa-trash-o fa-2x'> </i></a>
							<a href=''><i class='fa fa-pencil fa-2x'> </i></a>
						</td>";
	 			echo "</tr>";
	 		}
	 }else{
	 	echo "0 Registro¡¡¡";
	 }
	 mysqli_close($conexion);
	?>
		</tbody>
	</table>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>