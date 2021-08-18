<?php

  include ("conexion.php");
  $query = "select citas.id, citas.inicio_normal, citas.final_normal, citas.placa, citas.clase, citas.body, carros.id_carro, carros.marca, carros.modelo, carros.no_serie from citas inner join carros on citas.placa=carros.placa;";  
  $resultado = pg_query($cnx, $query);  

?>  

<meta charset='utf-8'>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css"/>
    <link href="../css/styleproyect.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.js"></script>
  
    <script>
      $(document).ready(function(){
        $('#mytable').DataTable({
          "order": [[1, "desc"]],
          "language":{
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrada de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "processing":     "Procesando...",
            "search": "Buscar:",
            "zeroRecords":    "No se encontraron registros coincidentes",
            "paginate": {
              "next":       "Siguiente",
              "previous":   "Anterior"
            },          
          }
        });
      });
    </script>
  <title>TECNICO INVENTARIO DE GPS</title>

</head>

<body style="background-color: #6890B4;">
<header class="suad">
  <img class="logo1" src="../images/logo1.png">
  <img class="logo2" src="../images/cdmx_color.png"><br><br>
  <h2 class="proyectn">ADMINISTRADOR GPS</h2><br><br>
</header>
<form class="form-inline menu">
    <div class="form-group">
      <div>
        <a href="logout2.php" class="btn btn-primary">Cerrar Sesion</a>
      </div>
</form>
 <h3 style="text-align:center">Sesion Tecnico</h3> 
 <div class="conteiner">
  <div class="row">
  </div>
  <div class="row table-responsive" style="margin: auto 5;">
    <table class="display" id="mytable" style="text-align: center;">
      <thead>
        <tr>
          <th style="text-align: center;">FECHA INICIO</th>
          <th style="text-align: center;">FECHA FINAL</th>
          <th style="text-align: center;">PLACA</th>
          <th style="text-align: center;">TIPO SERVICIO</th>
          <th style="text-align: center;">OBSERVACION</th>
          <th style="text-align: center;">MARCA</th>
          <th style="text-align: center;">MODELO</th>
          <th style="text-align: center;">NUMERO SERIE</th>
          <th style="text-align: center;">CAMBIAR OBSERVACION</th>
          <th style="text-align: center;">GPS INSERTAR CAMBIAR</th>

        </tr>
      </thead>
      <tbody>
        <?php 
          while($row=pg_fetch_assoc($resultado)) { ?>
            <tr>
              <input type="hidden" id="id" name="id" value="<?php echo $row['id']?>"/>
              <input type="hidden" id="id_carro" name="id_carro" value="<?php echo $row['id_carro']?>"/>    
              <td><?php echo $row['inicio_normal']; ?></td>
              <td><?php echo $row['final_normal']; ?></td>
              <td><?php echo $row['placa']; ?></td>
              <td><?php echo $row['clase']; ?></td>
              <td><?php echo $row['body']; ?></td>
              <td><?php echo $row['marca']; ?></td>
              <td><?php echo $row['modelo']; ?></td>
              <td><?php echo $row['no_serie']; ?></td>
              <td><a href="update_comment.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-comment"></span></a></td>
              <td><a href="insertupdate_gps.php?id_carro=<?php echo $row['id_carro'];?>"><span class="glyphicon glyphicon-edit"></span></a></td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
   </div>
   </div>
         
</body>
</html>


