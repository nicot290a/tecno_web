<html>
  <head>
  <link rel="stylesheet" href="menu.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>
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
  <body>
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
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Infome
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
                            Paginas
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Grafico
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Cantidad
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
                            Mapas
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentos
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

        
  </body>
  <body >
  <div class="area">
  <div id="consultar" class="widget">
    <section class="widget">
        <h4 class="widgettitulo">Mascotas</h4>
		<div class="datagrid" id="datagrid">
  <div id="txtHint"class="widget" ><b>Person info will be listed here...</b></div> </div>
  </div>  
    </section>
    </div>
  </body>
    </html>