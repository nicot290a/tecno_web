<?php
	include 'database.php';
	$name=$_POST['name'];
	$fecha_nac=$_POST['fecha_nac'];
	$sexo=$_POST['sexo'];
	$especie=$_POST['especie'];
	$sql = "INSERT INTO `mascotas_datos`( `name`, `especie`, `date_nac`, `sexo`) 
	VALUES ('$name','$especie','$date_nac','$sexo')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>