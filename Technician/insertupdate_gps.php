<meta charset='utf-8'>
<?php
include ("conexion.php");

$id = $_GET['id_carro'];

$select = "SELECT * FROM gps WHERE id_carro='$id'";
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
	  	<h2 style="text-align:center">Registro o Actualizacion de GPS</h2>
	

  		<form class="form-horizontal" method="post" action="updategps.php" autocomplete="off">
 			<div class="form-group row">
 				<label for="IMEI" class="col-sm-2 control-label">IMEI</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="imei" name="imei" value="<?php echo $row['imei_gps']?>" required>
 	 			</div>
 	 		</div>

 			<input type="hidden" id="id_carro" name="id_carro" value="<?php echo $row['id_carro']?>"/>
 			<input type="hidden" id="id_gps" name="id_gps" value="<?php echo $row['id_gps']?>"/>

 	     	<div class="form-group row">
 				<label for="modelo" class="col-sm-2 control-label">Modelo</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row['modelo']?>" required>
 	 			</div>
 	 		</div>

 	 		<div class="form-group row">
 				<label for="sim_card" class="col-sm-2 control-label">SIM CARD</label>
 				<div class="col-sm-9">
 					<input type="text" class="form-control" id="sim_card" name="sim_card" value="<?php echo $row['sim_card']?>" required>
 	 			</div>
 	 		</div>

 	 		<div class="form-group">
 	 			<div class="col-sm-offset-2 col-sm-10">
 	 				<a href="technician_index.php" class="btn btn-default">Regresar</a>
 	 				<button type="sumbit" class="btn btn-primary">Guardar</button>
 	 			</div>
 	 		</div>	
		</form>
	  </div>	
  </body>
</html>
