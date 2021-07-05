$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var fecha_nac = $('#fecha_nac').val();
		var sexo = $('#sexo').val();
		var especie = $('#especie').val();
		if(name!="" && fecha_nac!="" && sexo!="" && especie!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					name: name,
					fecha_nac: fecha_nac,
					sexo: sexo,
					especie: especie				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
                        $('#success').html('Data added successfully !');		
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
        }
        Limpiar();
        showUser();
        showUser();
        showUser();
    });
 });