<?php
//Desarrollado por Jesus Liñán
//ribosomatic.com
//Puedes hacer lo que quieras con el código
//pero visita la web cuando te acuerdes

//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "admin"; 
$bd_password = "pp2000"; 
$bd_base = "ejemplo"; 

$con = mysqli_connect($bd_host, $bd_usuario, $bd_password); 

mysqli_select_db($con, $bd_base); 

//consulta todos los empleados

$sql=mysqli_query($con, "SELECT * FROM empleados");

//muestra los datos consultados
echo "<p>cedula - nombre - Fecha - cargo </p> \n";
while($row = mysqli_fetch_assoc($sql)){
	echo "<p>".$row['cedula']." - ".$row['nombre']." - ".$row['fecha_nacimiento']." - ".$row['cargo']."</p> \n";
}
?>