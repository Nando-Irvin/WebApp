<meta charset='utf-8'>

<?php
include ("conexion.php");

$id = $_POST['id_gps'];
$imei = $_POST["imei"];
$modelo = $_POST["modelo"];
$simcard = $_POST["sim_card"];
$carro = $_POST["id_carro"];




$actualizar="UPDATE gps SET imei_gps='$imei', modelo='$modelo', sim_card='$simcard' WHERE id_gps='$id'";

$verifica_gps=pg_query($cnx, "SELECT * FROM gps WHERE imei_gps = '$imei'");
if (pg_num_rows($verifica_gps)>0) {
	echo"<script>
	alert ('El IMEI Ya Esta Registrado');
	window.history.go(-1);
	</script>";
	exit;
}

$resultado=pg_query($cnx, $actualizar);
if (!$resultado) {
	echo "<script>
	alert('error al actualizar los datos');
	window.history.go(-1);
	</script>";
} else {
	echo "<script>
	alert('los datos se actualizaron correctamente');
	window.location.replace('technician_index.php');
	</script>";
}
pg_close($cnx);
?>
