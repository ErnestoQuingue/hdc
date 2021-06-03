 <?php

 include('conexion.php');


//$con->close();

	$query = "SELECT idautor,nombre,apellido,edad FROM autor";


if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($idautor, $nombre, $apellido, $edad);
    while ($stmt->fetch()) {
 		

    	echo "
    	<table border=1>
			<tr>
				<td>$idautor</td>
				<td>$nombre</td>
				<td>$apellido</td>
				<td>$edad</td>

			</tr>
		</table>";
      
    }
    $stmt->close();
}


?>