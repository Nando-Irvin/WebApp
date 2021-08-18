<?php
$conex = "host=localhost port=5432 dbname=proyectodb user=usu_proyecto password=12345";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
?>
