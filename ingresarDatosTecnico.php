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


		//$con->close();
 			$nombres=$_POST['nombres'];
 			$correo=$_POST['correo'];
 			$cargo=$_POST['cargo'];
 			$lugar=$_POST['lugar'];
			 $contacto=$_POST['contacto'];
			

	$query="INSERT INTO tecnico(nombres,correo,cargo,lugar,contacto) VALUES ('$nombres','$correo','$cargo','$lugar','$contacto')";
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