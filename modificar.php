<!DOCTYPE html>
<html>
<head>
	<title>modificar imagen</title>
</head>
<body
			<?php
				include("conexion.php");
				$id= $_REQUEST['id'];

				$query= "SELECT * FROM tabla_imagen WHERE id='$id'";
				$resultado=$conexion->query($query);
				$row = $resultado->fetch_assoc();
			?>
	<center></br></br></br>
		<form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
			<input type="text" name="nombre" placeholder="Nombre...." value="<?php echo $row['nombre']; ?>" REQUIRED/></br></br>
			<img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></br></br>
			<input type="file" name="imagen" REQUIRED/></br></br>
			<input type="submit" value="Aceptar" REQUIRED>
		</form>
	</center>

</body>
</html>