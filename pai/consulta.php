<?php
require("conexion.php");
$consulta = mysqli_query($con, "SELECT * FROM mascotas_datos");
if (mysqli_num_rows($consulta) > 0)
{
    echo "<p>"; 
	echo " <table> <thead> <tr> <th>Nombre</th> <th>Especie</th> <th>Fecha</th> <th>Cargo</th> </tr> </thead> </table>"; 
	while($row = mysqli_fetch_array($consulta)) 
	{ 
		echo "<tr>"; echo "<<td>".$row['name']."</td>"; 
		echo "<td>".$row['especie']."</td>"; 
		echo "<td>".$row['date_nac']."</td>"; 
		echo "<td>".$row['sexo']."</td>"; echo "</tr>"; } 
		
	} 
	else{ 
	echo " <p>Aún no hay registros en la base de datos</p>"; 
		}
?>