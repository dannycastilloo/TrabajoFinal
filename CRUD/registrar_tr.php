<?php

    include('con_db.php');

    if (isset($_POST['register'])){

        if 
            (strlen($_POST['name']) >= 1 &&
            strlen($_POST['marca']) >= 1 &&
            strlen($_POST['precio']) >= 1 &&
            strlen($_POST['stock']) >= 1){

                $name = trim($_POST['name']);
                $marca = trim($_POST['marca']);
                $precio = trim($_POST['precio']);
                $stock = trim($_POST['stock']);
                $Fecha_registro = date("d/m/y");
                $consulta = "INSERT INTO trompetas(Nombre, Marca, Precio, Stock, Fecha_registro) VALUES ('$name','$marca','$precio','$stock','$Fecha_registro')";
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado){

                    ?>

                        <script type="text/javascript">
	                        alert("¡Producto añadido exitosamente!");
	                        window.location.href='index_tr.php';
                        </script>

                    <?php

                } else{

                    ?>

                        <h2 class = "bad">¡Ha ocurrido un error!</h2>

                    <?php

                }

        } else {

            ?>

                <h2 class = "bad">Por favor, complete los campos correctamente.</h2>

            <?php

        }

    }

?>