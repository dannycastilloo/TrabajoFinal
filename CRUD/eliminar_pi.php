<?php
	
	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		include('con_db.php');
		$sentencia="DELETE FROM pianos WHERE Id='".$id."' ";
		$resultado=$conex->query($sentencia);
	}
?>

<script type="text/javascript">
	alert("┬íProducto eliminado exitosamente!");
	window.location.href='index_pi.php';
</script>