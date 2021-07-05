
/*window.onload = function () {
Cargar();    
}
function Registrar()
{
	var name = $("#name").val();
	var especie = $("#especie").val();
	var date_nac = $("#date_nac").val();
	var sexo = $("#sexo").val();
	$("#respuesta").html("<img src="loader.gif" /> Por favor espera un momento");
	$.ajax({type: "POST", dataType:'html',url: "registro.php",data: "name="+name+"&especie="+especie+"&date_nac="+date_nac+"&sexo="+sexo,success: function(resp){$('#respuesta').html(resp);
			Limpiar();
			Cargar();
	}
	});
}   
function Cargar()
{
$('#datagrid').load('test2.php');    
}
function Limpiar()
{
$("#name").val("");
$("#especie").val("");
$("#date_nac").val("");
$("#sexo").val("");
}
*/
function Register() {
   /* Get from elements values */
   var values = $(this).serialize();
   var name = $("#name").val();
   var especie = $("#especie").val();
   var date_nac = $("#date_nac").val();
   var sexo = $("#sexo").val();
   $.ajax({
      url: "/registro.php",
      type: "post",
      data: { name: $name, especie: $especie, date_nac: $date_nac, sexo: $sexo },
      success: function (response) {

         // You will get response from your PHP page (what you echo or print)
      },
      error: function (_jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
   });