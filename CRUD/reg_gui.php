<?php
        include("registrar_gui.php")
?>

<?php
        include("regresar_reg_gui.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar productos</title>
    <link rel="stylesheet" type = "text/css" href="css/estilo.css">
</head>
<body>

    <form action="reg_gui.php" method="post">

        <h1>Registra un producto</h1>
        <input type="text" name = "name" placeholder = "Nombre del producto">
        <input type="text" name = "marca" placeholder = "Marca">
        <input type="number" name = "precio" placeholder = "Precio del producto">
        <input type="number" name = "stock" placeholder = "Stock">
        <input type="submit" name = "register">
        <br><br>
        <button name = "regresar">Regresar</button>
        
    </form>

</body>
</html>