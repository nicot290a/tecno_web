<html> 
      <head>
         <title>Ejemplo de conexión a base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "admin";
 
      // Contraseña del usuario
      $contrasena = "Iphone2000";
 
      // Nombre de la base de datos
      $baseDeDatos ="mascotas";
 
      // Nombre de la tabla a trabajar
      $tabla = "mascotas_datos";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
     $link = Conectarse(); 
 
 
      mysqli_close($link);
 
      ?>
 
      </body> 
      </html>