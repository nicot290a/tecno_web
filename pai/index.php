<!DOCTYPE html>
<html lang="es">
<head>
<title>Registro de empleados</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery.min.js"></script>
<script src="ajax.js"></script>
</head>
<body>
<header>
    <nav>
        <h2>Consola administracion Alimentador Automatico</h2>
    </nav>
<header>
<div id="contenedor">
    <div id="inscribir">
    <section class="widget">
<h4 class="widgettitulo">Agregar nueva mascota</h4>
 <form name="mascotas" onsubmit="return false" action="return false">
            <input type="text" id="name" name="name" placeholder="Nombre" autocomplete="off" tabindex="1" required>
            <input type="text" id="date_nac" name="date_nac" placeholder="Fecha de nacimiento" tabindex="4" required>
            <input type="text" id="sexo" name="sexo" placeholder="Sexo" tabindex="4" required>
			<input type="text" id="especie" name="especie" placeholder="Especie" tabindex="4" required>
            <button onclick="Register();" tabindex="7">Guardar DATO<br style="clear:both;">
            <br>
        </form>
        <div id="respuesta"></div>
    </section>
    </div>
    <div id="consultar">
    <section class="widget">
        <h4 class="widgettitulo">Mascotas</h4>
		<div class="datagrid" id="datagrid">
<?php

require("test2.php");
?> 
 

        </div>  
		
    </section>
	
	
    </div>
	
	
	

</div>
     
</body>
</html>  