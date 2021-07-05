<?php
require("conexion.php");
        

    //variables POST
    $name = $_POST['name'];
    $especie = $_POST['especie'];
    $date_nac = $_POST['date_nac'];
    $sexo = $_POST['sexo'];
    //consulta mysql para insertar los datos del empleados
    $consulta = "INSERT INTO `mascotas_datos` (`name`, `especie`, `date_nac`, `sexo`) VALUES ('" .$name. "','" .$especie. "','" .$date_nac. "','" .$sexo. "')";
    echo $consulta;
	mysqli_query($con, $consulta);
    if($consulta)
    {            
        echo "Empleado Guardado Correctamente";
    }
    else
    {
        echo "No se pudieron guardar los datos";
    }

?>