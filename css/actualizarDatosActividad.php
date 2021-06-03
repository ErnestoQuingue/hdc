<?php  
			$host="127.0.0.1";
			$port=3306;
			$socket="";
			$user="root";
			$password="";
			$dbname="mydb";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


	$ida_ctividades=$_POST["ida_ctividades"];
    $id_persona=$_POST["id_persona"];
	$fecha=$_POST["fecha"];
	$hora=$_POST["hora"];
	$descripcion=$_POST["descripcion"];

	

$actualizar="UPDATE actividades SET ida_ctividades='$ida_ctividades',id_persona='$id_persona',fecha='$fecha',hora='$hora' WHERE ida_ctividades='$ida_ctividades'";

$resultado=mysqli_query($con,$actualizar);

if ($resultado){

	echo "se ha guadado los datos";
}
else{
echo " no se ha guadado los datos";
}
?>