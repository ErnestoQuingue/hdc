<?php 

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="monitoreo";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());


 			$codigoArbol=$_POST['codArbol'];
 			$codFruto=$_POST['codFruto'];
 			$incidencia=$_POST['incidencia'];
 			$severidad=$_POST['severidad'];
			
			

	$query="INSERT INTO monitoreo(codigoArbol,codFruto,incidencia,severidad) VALUES('$codigoArbol','$codFruto','$incidencia','$severidad')";
		$resultado=mysqli_query($con,$query);
		if ($resultado) {
			
			echo '<script>
			alert("los datos se han registrado correctamente");
			window.history.go(-1);

		</script>';		}
		else{
			echo "no se pudo agregar los datos ingresados";
		}


 ?>