<meta charset='utf-8'>
<?php
include ("conexion.php");

$id = $_GET['id'];

$select = "select citas.id, citas.inicio_normal, citas.final_normal, citas.placa, citas.clase, citas.body, carros.marca, carros.submarca, carros.modelo, carros.color, carros.no_serie, carros.adscripcion from citas inner join carros on citas.placa=carros.placa where id='$id'";
$resultado = pg_query($cnx,$select);
$row=pg_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<meta charset='utf-8'>
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="../css/styleproyect.css" type="text/css" rel="stylesheet">
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #6890B4;">
<header class="suad">
	<img class="logo1" src="../images/logo1.png">
	<img class="logo2" src="../images/cdmx_color.png"><br><br>
	<h2 class="proyectn">ADMINISTRADOR GPS</h2><br><br>
</header>
     <div class="container">
	  	<h2 style="text-align:center">Ingreso de Nueva Observacion</h2>
	

  		<form class="form-horizontal" method="post" action="updatecomment.php" autocomplete="off">
 			<div class="form-group row">
 				<label for="placa" class="col-sm-2 control-label">Placa</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row['placa']?>" disabled>
 	 			</div>
 	 		</div>

 			<input type="hidden" id="id" name="id" value="<?php echo $row['id']?>"/>

 	     	<div class="form-group row">
 				<label for="marca" class="col-sm-2 control-label">Marca</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row['marca']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="submarca" class="col-sm-2 control-label">Submarca</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="submarca" name="submarca" value="<?php echo $row['submarca']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="modelo" class="col-sm-2 control-label">Modelo</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row['modelo']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="color" class="col-sm-2 control-label">Color</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="color" name="color" value="<?php echo $row['color']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Numero de Serie</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="no_serie" name="no_serie" value="<?php echo $row['no_serie']?>" disabled>
 	 			</div>
 	 		</div>

			<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Adscripcion</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="adscripcion" name="adscripcion" value="<?php echo $row['adscripcion']?>" disabled>
 	 			</div>
 	 		</div>

			<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Inicio de Cita</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="inicio_normal" name="inicio_normal" value="<?php echo $row['inicio_normal']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Fin de Cita</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="final_normal" name="final_normal" value="<?php echo $row['final_normal']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Servicio</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="clase" name="clase" value="<?php echo $row['clase']?>" disabled>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="no_serie" class="col-sm-2 control-label">Observaciones</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" placeholder="observaciones" id="observaciones" name="observaciones" value="<?php echo $row['body']?>" required>
 	 			</div>
 	 		</div>

 	 		<div class="form-group">
 	 			<div class="col-sm-offset-2 col-sm-10">
 	 				<a href="/tecnico/technician_index.php" class="btn btn-default">Regresar</a>
 	 				<button type="sumbit" class="btn btn-primary">Guardar</button>
 	 			</div>
 	 		</div>	
		</form>
	  </div>	
  </body>
</html>

