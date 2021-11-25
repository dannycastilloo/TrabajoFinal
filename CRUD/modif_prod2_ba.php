<?php
	
    ModificarProducto($_POST['Nombre'], $_POST['Marca'], $_POST['Precio'], $_POST['Stock'], $_POST['id']);

	function ModificarProducto($name, $marca, $precio, $stock, $id)
	{
        include("con_db.php");
		$sentencia="UPDATE bajos SET Nombre='".$name."', Marca= '".$marca."', Precio='".$precio."', Stock='".$stock."' WHERE Id='".$id."' ";
		//mysql_query($sentencia) or die (mysql_error());
        $resultado=$conex->query($sentencia);
	}
?>

<script type="text/javascript">
	alert("Producto modificado exitosamente");
	window.location.href='index_ba.php';
</script>