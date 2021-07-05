<?php
	$server = "localhost:3306";
	$user = "admin";
	$pass = "Iphone2000";
	$db = "mascotas";
	$connection = mysqli_connect($server, $user, $pass, $db)
		or die("Conection Error");
 
 
	$getdestinos = "select * from mascotas_datos";
	$result = mysqli_query($connection, $getdestinos)
		or die ("Insert Error");
 
 
	while($row = mysqli_fetch_array($result)) {
	    echo $row['destino'];
	}
?>