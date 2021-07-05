	<?php
	
echo " <table> <thead> <tr> <th>Nombre</th> <th>Especie</th> <th>Nacimiento</th> <th>Sexo</th><th>ID</th> </tr> </thead> </table>"; 		
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