<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventario de instrumentos</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
  <div class="todo">

    <h1 class="text-center">Lista de baterías</h1>
    <br>
    
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse;" class = "table table-striped">
        <thead>
          <th>Id</th>
          <th>Nombre</th>
          <th>Marca</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Fecha de registro</th>
          <th colspan="2" class="text-center"> <a href="reg_bat.php"> <button type="button" class="btn btn-info">Registrar producto</button> </a> </th>
        </thead>
        <tbody>
          <?php
          include("con_db.php");
          $sentencia="SELECT * FROM baterias";
          $resultado=$conex->query($sentencia);
          while($filas = $resultado->fetch_assoc())
          {
            
            echo "<tr>";
              echo "<td>"; echo $filas['Id']; echo "</td>";
              echo "<td>"; echo $filas['Nombre']; echo "</td>";
              echo "<td>"; echo $filas['Marca']; echo "</td>";
              echo "<td>"; echo $filas['Precio']; echo "</td>";
              echo "<td>"; echo $filas['Stock']; echo "</td>";
              echo "<td>"; echo $filas['Fecha_registro']; echo "</td>";
              echo "<td>  <a href='modif_prod1_bat.php?id=".$filas['Id']."'> <button type='button' class='btn btn-success editbtn'>Modificar</button> </a> </td>";
              echo "<td> <a href='eliminar_bat.php?id=".$filas["Id"]."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
            echo "</tr>";
          }

          ?>
        </tbody>
      </table>

      <br>
      <div class="text text-center">

        <a href="index.html"><button class="btn btn-warning" type="button">  Regresar</button></a>

      </div>

    </div>

  </div>

</body>
</html>