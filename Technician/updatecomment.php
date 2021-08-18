<meta charset='utf-8'>

<?php
include ("conexion.php");

$id = $_POST['id'];
$observaciones = $_POST["observaciones"];


$actualizar="UPDATE citas SET body='$observaciones' WHERE id='$id'";

$resultado=pg_query($cnx, $actualizar);
if (!$resultado) {
	echo "<script>
	alert('error al actualizar la observacion');
	window.history.go(-1);
	</script>";
} else {
	echo "<script>
	alert('las observaciones se actualizaron correctamente');
	window.location.replace('technician_index.php');
	</script>";
}
pg_close($cnx);
?>
