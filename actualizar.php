<?php 
	include("php/conexion.php");
	echo $sql = "SELECT * FROM clientes WHERE id_cliente=".$_GET['id'];
	$ejecuto=mysqli_query($conexion,$sql);
	$cliente=mysqli_fetch_array($ejecuto);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminClientes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="esta es mi sistema web que me permite crear mis clientes">
    <meta name="author" content="cristian zeña mas">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#!/">SisClient</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="registrar_cliente.php">Registrar</a>
                    </li>
                    <li>
                        <a href="lista-clientes.php">Clientes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="cabezera">
    	<div class="logo"></div>
    </div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Registar Cliente</h1>
					<form class="form-horizontal" role="form" action="clientes.php" method="POST">

						<div class="row">
							<div class="col-md-6">
								<label>Empresario</label>
								<input type="text" class="form-control" name="nombre" value="<?php echo $cliente['nombre']; ?>">
							</div>
							<div class="col-md-6">
								<label>Nombre de la empresa</label>
								<input type="text" class="form-control" name="empresa" value="<?php echo $cliente['nombre_negocio'] ?>">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Dirección de la empresa</label>
								<input type="text" class="form-control"  name="ubicacion" value="<?php echo $cliente['ubicacion'] ?>">
							</div>
							<div class="col-md-6">
								<label>RUC de la empresa</label>
								<input type="text" class="form-control" name="ruc" value="<?php echo $cliente['ruc'] ?>">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<label>Correo</label>
								<input type="text" class="form-control" name="email" value="<?php echo $cliente['email'] ?>">
							</div>
							<div class="col-md-6">
								<label>Celular</label>
								<input type="text" class="form-control" name="celular" value="<?php echo $cliente['celular'] ?>">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Fecha de inicio</label>
								<input type="date" class="form-control" name="inicio" value="<?php echo $cliente['fecha_inicio'] ?>">
							</div>
							<div class="col-md-6">
								<label>Fecha de vencimiento</label>
								<input type="date" class="form-control" name="vencimiento" value="<?php echo $cliente['fecha_vencimiento'] ?>">
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<br>
								<p class="text-right">
									<input type="hidden" name="id_cliente" value="<?php echo $_GET["id"] ?>">
									<button type="submit" class="btn btn-primary">Actualizar</button>
								</p>
							</div>
						</div>

					</form>
					<br>
                </div>
			</div>
		</div>
	</div>

    <script src="js/jquery.js"> </script>
    <script src="js/bootstrap.js"> </script>
</body>

</html>