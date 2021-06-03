<?php 
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="monitoreo";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


	$cordenadas=$_POST["cordenadas"];
	$propietario=$_POST["propietario"];
	$direccion=$_POST["cedula"];
	$celular=$_POST["celular"];
	$variedad=$_POST["variedad"];	
	$densidad=$_POST["densidad"];

	$query = "INSERT into zona(cordenadas,propietario,cedula,celular,variedad,densidad) values  ('$cordenadas','$propietario','$cedula','$celular','$variedad','$densidad')";

	$resultado=mysqli_query($con,$query);
	if($resultado){

		echo '<script>
			alert("los datos se han registrado correctamente");
			window.history.go(-1);

		</script>';
		
	}
	else{
	 echo "no se puede ingresar los datos";
	}
	 



 ?>