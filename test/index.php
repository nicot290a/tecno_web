<!DOCTYPE html>
<html background="fondo.jpg">
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="menu.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    
    <script>
function consultar()
{
$.ajax({
		url: "../pai/test2.php",
		type: "POST",
		cache: false,
		success: function(data){
			alert(data);
			$('#table').html(data); 
		}
    });
    
}
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../pai/test2.php?q="+str,true);
    xmlhttp.send();
  }
} 
function Limpiar(){
$("#name").val("");
$("#especie").val("");
$("#date_nac").val("");
$("#sexo").val("");
} 
    </script>

    </head>
<body>


<header>
    <nav>
        <h2>Consola administracion Alimentador Automatico</h2>
        <div class="area">
    <nav class="main-menu">
            <ul>
                <li>
                    <a type="button" onclick="showUser()">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                        <a button onclick="document.getElementById('id01').style.display='block'"></button>
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Login
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a>
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Formulario
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Files
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graficos
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Cantidades
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tablas
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Mapa
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Notas
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
    </nav>

    
<header>
    <div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>


<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    
    <div id="contenedor" background="fondo.jpg">
    
    <div id="inscribir">
    <section class="widget">
    <h4 class="widgettitulo">Agregar nueva mascota</h4>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
		</div>
		<div class="form-group">
			<label for="pwd">Fecha Nacimiento:</label>
			<input type="year" class="form-control" id="fecha_nac" placeholder="fecha_nac" name="fecha_nac" required>
		</div>
        <div class="form-group" >
			<label for="pwd">sexo:</label>
			<select name="sexo" id="sexo" class="form-control" required >
				<option value="">Select</option>
				<option value="macho">macho</option>
				<option value="hembra">hembra</option>
			</select>
		</div>
		<div class="form-group">
			<label for="pwd">Especie:</label>
			<input type="text" class="form-control" id="especie" placeholder="especie" name="especie" required>
		</div>
		
		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave"><br style="clear:both;">
	</form>
    </section>
    </div>

    <div id="consultar">
    <section class="widget">
        <h4 class="widgettitulo">Mascotas</h4>
		<div class="datagrid" id="datagrid">
        <?php
        require("../pai/test2.php");
        ?> 
         </div>  
    </section>

    <div id="consultar">
    <section class="widget">
        <h4 class="widgettitulo">Mascotas</h4>
		<div class="datagrid" id="datagrid">
        <div id="txtHint"class="widget"><b>Person info will be listed here...</b></div> 
    
         </div>  
    </section>

    	  
	
    </div>
    
</div>

</div>

<script>

</script>
</body>
</html>