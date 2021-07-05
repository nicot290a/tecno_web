<?xml version="1.0" encoding="iso-8859-1"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Prueba de SELECT y MySQL</title> 
</head> 
<body> 
<?php 
  // Devuelve todas las filas de una consulta a una tabla de una base de datos 
  // en forma de tabla de HTML 
  function sql_dump_result($result) 
  { 
    $line = ''; 
    $head = '';
	
  while($temp = mysqli_fetch_assoc($result)) 
  { 
    if(empty($head)) 
    { 
      $keys = array_keys($temp); 
      $head = '<tr><th>' . implode('</th><th>', $keys). '</th></tr>'; 
    }
	
    $line .= '<tr><td>' . implode('</td><td>', $temp). '</td></tr>'; 
  }
  
  return '<table>' . $head . $line . '</table>'; 
}

  // Se conecta al SGBD 
  if(!($iden = mysqli_connect("localhost", "admin", "pp2000"))) 
    die("Error: No se pudo conectar");
	
  // Selecciona la base de datos 
  if(!mysqli_select_db($iden, "mascotas"))
    die("Error: No existe la base de datos"); 
	
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM mascotas_datos"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysqli_query($iden, $sentencia); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

  // Muestra el contenido de la tabla como una tabla HTML	
  echo sql_dump_result($resultado); 
  
  // Libera la memoria del resultado
  mysqli_free_result($resultado);

  // Cierra la conexión con la base de datos 
  mysqli_close($iden); 
?> 
</body> 
</html> 