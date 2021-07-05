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

  if(!($iden = mysqli_connect("localhost", "admin", "pp2000"))) 
    die("Error: No se pudo conectar");

  if(!mysqli_select_db($iden, "mascotas"))
    die("Error: No existe la base de datos"); 
	
  $sentencia = "SELECT * FROM mascotas_datos"; 
  $resultado = mysqli_query($iden, $sentencia); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

  echo sql_dump_result($resultado); 
  
  mysqli_free_result($resultado);

  mysqli_close($iden); 
?> 
</body> 
</html> 